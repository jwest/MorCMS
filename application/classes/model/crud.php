<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Abstract model for CRUD ORM
 * @author jwest
 */
abstract class Model_CRUD extends ORM
{
    
    /**
     * Use pagination in crud grid
     * @var int or false
     */
    protected $pagination = false;
    
    
    /**
     * Default url for base controller
     * @var string
     */
    protected $url = '';
    
    
    /**
     * Filter for show values
     * @var array
     */
    protected $filters = array();
    
    
    /**
     * manual sortable rows 
     * Must exists column sort in table!
     * @var bool
     */
    protected $sortable = false;
    
    
    /**
     * Return array with CRUD_Item element
     */
    protected function items()
    {
        throw new Kohana_Exception('items not exists!');
    }
    
    
    /**
     * Check change in model and generate (or execute) sql query
     * @var bool
     */
    protected $observe = false;
    
    
    /**
     * Initialize CRUD and ORM
     */
    public function _initialize()
    {
        foreach ($this->items() as $item)
        {
            $item->initialize($this);
        }
     
        $this->observe_change();
        
        parent::_initialize();
    }

    
    /**
     * Return url for controller of model
     * @return string url
     */
    public function url()
    {
        if(empty($this->url))
        {
            $this->url = 'admin/' . $this->_object_plural . '/';
        }
        
        if($this->_loaded)
        {
            return $this->url . 'edit/' . $this->id;
        }
        else
        {
            return $this->url . 'show/';
        }
    }
    
    
    /**
     * Get items for execute
     * @return CRUD_Item_Execute
     */
    public function get_items()
    {
        $output = array();
        
        foreach($this->items() as $item)
        {
            $type = 'CRUD_Item_Execute_'.$item;             
            $execute_object = new $type($item, $this);
            $output[$execute_object->get_name()] = $execute_object;
        }
        
        return $output;
    }
    
    
    /**
     * Get array for data grid
     * @return array
     */
    public function get_array()
    {        
        $items = $this->get_items();
        
        if(!empty($this->filters))
        {
            foreach($this->filters as $column => $filter)
            {
                $items[$column]->on_filter($this, $filter);
            }
        }
        
        if($this->pagination)
        {
            $config = array( 
                'total_items'       => $this->count_all(),
                'items_per_page'    => $this->pagination,            
                'view'              => 'crud/default/basic',
            );            
            
            $this->pagination = new Pagination($config);
            
            $this->order_by('id','DESC')
                ->limit($this->pagination->items_per_page)
                ->offset($this->pagination->offset);           
        }
        
        if(!empty($this->filters))
        {
            foreach($this->filters as $column => $filter)
            {
                $items[$column]->on_filter($this, $filter);
            }
        }
        
        $rows = $this->find_all()->as_array();        
        $columns = array();
        $output = array();
        
        foreach($items as $item)
        {
            if($item->is_show())
            {
                $columns[] = $item;
            }
            
        }
        
        foreach($rows as $row)
        {
            $output_row = array();
            
            foreach($columns as $column)
            {
                $column->change_model($row);
                $output_row[$column->get_name()] = $column->on_show($row->{$column->get_name()});
            }
            
            $output[$row->id] = $output_row;
        }
        
        return $output;
    }
    
    
    
    /**
     * Return data for create position (one row)
     * @return array
     */
    public function get_for_create()
    {
        $items = $this->get_items();
        $output = array();
        
        foreach($items as $item)
        {
            if($item->is_edit())
            {
                $output[$item->get_name()] = null;                
            }
            
        }
        
        return $output;
    }
    
    
    /**
     * Return data for edit position (one row)
     * @param int $id
     * @return array
     */
    public function get_for_edit($id)
    {        
        $row = $this->clear()->where('id','=',$id)->find();        
        $items = $this->get_items();
        $output = array();
        
        foreach($items as $item)
        {
            if($item->is_edit())
            {
                $output[$item->get_name()] = $row->{$item->get_name()};                                
            }
            
        }
        
        return $output;
    }
    
    
    /**
     * Method for create end save row
     * @param array $values ($_POST)
     * @return int id
     */
    public function save_create($values)
    {        
        $id = null;
        $items = $this->get_items();
        
        try
        {

            foreach($items as $item)
            {
                if($item->create)
                {
                    if($item->is_edit())
                    {
                        $item->validate($values[$item->get_name()]);
                        $temp_value = $item->on_create($values[$item->get_name()]);
                        
                        if($temp_value !== null)
                        {
                            $this->{$item->get_name()} = $temp_value;                
                        }
                    }
                    else
                    {
                        try
                        {
                            $temp_value = $item->on_create(null);
                            
                            if($temp_value !== null)
                            {
                                $this->{$item->get_name()} = $temp_value;                
                            }
                        }
                        catch(Exception $e){}
                    }
                }
            }
            
            $id = $this->save();
            $this->reload();
            
            foreach($items as $item)
            {
                $temp_value = null;
                
                if($item->is_edit() AND $item->create)
                {
                    $temp_value = $values[$item->get_name()];
                }
                
                $item->after_create($this->{$item->get_name()}, $id, $temp_value);
            }

        }    
        catch(Validation_Exception $e)
        {
            throw new Validation_Exception($e->array);
        }
        
        return $id;
    }
    
    
    /**
     * Method for update values in row
     * @param array $values ($_POST)
     * @param int $id 
     * @return int id
     */
    public function save_update($values, $id)
    {        
        if(!$this->loaded())
        {
            $this->where('id', '=', $id)->find();        
        }
        $items = $this->get_items();

        try
        {           
            foreach($items as $item)
            {                      
                if($item->edit)
                {
                    if($item->is_edit())
                    {
                        $item->validate($values[$item->get_name()]);                                            
                        $temp_value = $item->on_update($values[$item->get_name()]);     
                        
                        if($temp_value !== null)
                        {
                            $this->{$item->get_name()} = $temp_value;
                        }
                    }
                    else
                    {
                        $temp_value = $item->on_update($this->{$item->get_name()});
                        
                        if($temp_value !== null)
                        {
                            $this->{$item->get_name()} = $temp_value;
                        }
                    }
                }
            }
            
            $this->update();
            $this->reload();
            
            foreach($items as $item)
            {                
                $temp_value = null;
                
                if($item->is_edit())
                {
                    $temp_value = $values[$item->get_name()];
                }
                
                $item->after_update($this->{$item->get_name()}, $id, $temp_value);
            }

        }    
        catch(Validation_Exception $e)
        {
            throw new Validation_Exception($e->array);
        }
        
        return $id;
    }
    
    
    /**
     * Delete row with id
     * @param int $id 
     * @return bool success or error
     */
    public function delete_row($id)
    {
        $this->where('id', '=', $id)->find();
        
        try
        {
            foreach($this->get_items() as $item)
            {
                $item->on_delete($this->{$item->get_name()});
            }
            
            $this->delete();
            
            foreach($this->get_items() as $item)
            {
                $item->after_delete($this->{$item->get_name()}, $id);
            }
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    
    
    /**
     * Rows sort helper
     * @param post $rows
     * @return bool 
     */
    public function sort_rows($rows)
    {        
        if(!$this->sortable)
        {
            return false;
        }
        
        foreach ($rows as $sort => $id)
        {				
            $row = $this->where('id', '=', $id)->find();
            $row->sort = $sort;
            $row->save();
        }
        
        return true;
    }
    
    
    /**
     * Create new filter for show values
     * @param string $name
     * @param mixed $param 
     */
    public function add_filter($name, $param)
    {
        $this->filters[$name] = $param;
    }
    
    
    /**
     * Create relation
     * @param string $type relation type (belongsTo, hasMany, manyToMany)
     * @param string $name relation name
     * @param array $param param for relation
     */
    public function create_relation($type, $name, $param = array())
    {
        switch($type)
        {
            case 'belongsTo':
                if(!isset($this->_belongs_to[$name]))
                {
                    $this->_belongs_to[$name] = $param;
                }
                break;
            
            case 'hasMany':
                if(!isset($this->_has_many[$name]))
                {
                    $this->_has_many[$name] = $param;
                }
                break;
            
            default:
                throw new Kohana_Exception('Relation type not exists');
        }
    }
    
    
    /**
     * Get render pagination
     * @return html
     */
    public function render_pagination()
    {
        if($this->pagination == false)
        {
            return false;
        }
        else
        {
            return $this->pagination->render();
        }
    }
    
    
    /**
     * Observe model for changes in sql tables in db
     */
    protected function observe_change()
    {
        if($this->observe)
        {
            $observe = new CRUD_Observer_Model('menu', $this->items());
            $observe->create_migration();
        }
    }
    
    
}

?>
