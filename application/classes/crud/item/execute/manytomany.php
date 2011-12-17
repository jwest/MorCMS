<?php defined('SYSPATH') or die('No direct script access.');
/**
 * HasMany to relation for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_ManyToMany extends CRUD_Item_Execute
{
   
    /**
     * Create values in CRUD?
     * @var bool
     */
    public $create = false;
    
    
    /**
     * Edit values in CRUD?
     * @var bool
     */
    public $edit = true;
    
    
    /**
     * return value for show in data grid
     * @return mixed
     */
    public function on_show($value)
    {        
        if(isset($this->item['showall']))
        {
            $html = NULL;
            $items = $value->find_all()->as_array();
            $field = (isset($this->item['field'])) ? $this->item['field'] : 'name';

            foreach($items as $item)
            {
                $html .= Html::anchor('admin/'.$this->item['name'].'/edit/'.$item->id, $item->{$this->item['field']}).', ';
            }

            return $html;	
        }
        else
        {
            return Html::anchor($value->url().$this->model->object_plural().':'.$this->model, $value->count_all().' &#8594;');
        }
    }
    
    
    /**
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {   
        $activ = array();
        
        if(!empty($value) AND $value instanceof ORM)
        {
            $activ = $value->find_all()->as_array();

            $id = $value;

            $field = (isset($this->item['field'])) ? $this->item['field'] : 'name';
            $values_model = $value->clear()->find_all()->as_array($field);
            $values = array();

            foreach($values_model as $value_item)
            {
                $values[$value_item->id] = $value_item->{$field};
            }

            return Form::select($this->item['name'].'[]', $values, $activ, array('multiple' => 'multiple'));
        }
        else
        {
            $field = (isset($this->item['field'])) ? $this->item['field'] : 'name';
            
            $values_model = ORM::factory(Inflector::singular($this->item['name']))->find_all()->as_array($field);
            $values = array();
            
            foreach($values_model as $value_item)
            {
                $values[$value_item->id] = $value_item->{$field};
            }

            return Form::select($this->item['name'].'[]', $values, $value, array('multiple' => 'multiple'));
        }
        
    }
    
    
    /**
     * Action on create, do nothing
     * @param array $value
     * @return mixed 
     */
    public function on_create($value) 
    {
        return null;
    }
     
    
    /**
     * Action after create, register relation
     * @param Model_ORM $model
     * @param int $id
     * @param array $value
     * @return mixed 
     */
    public function after_create($model, $id = null, $value = null) 
    {        
        if($this->item['edit'] != FALSE)
        {             
            if(empty($value))
            {
                $value = CRUD_Tools::post_param($this->item['name']);                
            }
            
            $model = ORM::factory($this->model->object_name(), $id);
            $model->add($this->item['name'], $value);
        }
        
        return null;
    }
    

    /**
     * On update many-to-many relation
     * @param mixed $value
     * @param int $id
     * @return mixed
     */
    public function on_update($value, $id = null) 
    {
        if($this->item['edit'] != FALSE)
        {
            $this->model->remove($this->item['name']);

            if(!empty($value))
            {
                $this->model->add($this->item['name'], $value);
            }
        }
        
        return null;
    }
    
    
    /**
     * Delete relation values
     * @param mixed $value 
     */
    public function on_delete($value)
    {
        $this->model->remove($this->item['name']);
    }
    
    
    /**
     * Use filter in grid
     * @param Model_CRUD $object
     * @param mixed $value 
     */
    public function on_filter(&$object, $value)
    {
        $model_main = $models[0] = Inflector::plural(strtolower(str_replace('Model_', '', get_class($object))));
        $model_rel = $models[1] = $this->item['name'];
        
        sort($models);  
        $rel_table = $models[0].'_'.$models[1];
        
        $object->join($rel_table)->on($rel_table.'.'.Inflector::singular($model_main).'_id', '=', 'id')->where($rel_table.'.'.Inflector::singular($model_rel).'_id', '=', $value);
    }
    
    
}

?>
