<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Belongs to relation for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_BelongsTo extends CRUD_Item_Execute
{
   
    /**
     * return value for show in data grid
     * @return mixed
     */
    public function on_show($value)
    {
        $field = (isset($this->item['field'])) ? $this->item['field'] : "name";
        return (!empty($value->{$field})) ? Html::anchor($value->url(), $value->{$field}) : '';
    }
    
    
    /**
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {   
        if(!is_object($value))
        {
            $object = ORM::factory($this->item['name']);            
            $field_value = $value;
        }
        else
        {
            $object = $value;
            $field_value = 0;
        }
        
        $field = (isset($this->item['field'])) ? $this->item['field'] : 'name';
        $values_model = $object->find_all()->as_array($field);
        $values = array();
        
        foreach($values_model as $value)
        {
            $values[$value->id] = $value->{$field};
        }
        
        if(!$this->item['notnull'])
        {
            Arr::unshift($values, 0, '');
        }
        
        return Form::select($this->item['name'], $values, $field_value);
    }
    
    
    /**
     * Input for edit item
     * @return string Form::input
     */
    public function input_edit($value)
    {        
        if(is_object($value))
        {
            $id = $value->id;
        }
        else
        {
            $id = $value;
            $value = ORM::factory(Inflector::singular($this->item['name']), $id);
        }
        
        $field = (isset($this->item['field'])) ? $this->item['field'] : 'name';
        $values_model = $value->clear()->find_all()->as_array($field);
        $values = array();
        
        foreach($values_model as $value)
        {
            $values[$value->id] = $value->{$field};
        }
        
        if(!$this->item['notnull'])
        {
            Arr::unshift($values, 0, '');
        }
        
        return Form::select($this->item['name'], $values, $id);
    }
    
    
    /**
     * return value for save in database
     * @return mixed
     */
    public function on_create($value)
    {  
       return ORM::factory($this->item['name'],$value);
    }
    
    
    /**
     * return value for save in database
     * @return mixed
     */
    public function on_update($value)
    {  
       return ORM::factory($this->item['name'],$value);
    }
    
    
    /**
     * Use filter in grid
     * @param Model_CRUD $object
     * @param mixed $value 
     */
    public function on_filter(&$object, $value)
    {
        $object->where($this->item['name'].'_id', '=', $value);
    }
    
    
    /**
     * input for filter
     * @param string $value
     * @return string form::select 
     */
    public function input_filter($value)
    {   
        if(!is_object($value))
        {
            $object = ORM::factory($this->item['name']);            
            $field_value = $value;
        }
        else
        {
            $object = $value;
            $field_value = 0;
        }
        
        $field = (isset($this->item['field'])) ? $this->item['field'] : 'name';
        $values_model = $object->find_all()->as_array($field);
        $values = array();
        
        foreach($values_model as $value)
        {
            $values[$value->id] = $value->{$field};
        }
        
        if(!$this->item['notnull'])
        {
            Arr::unshift($values, 0, '');
        }
        
        return Form::select($this->item['name'], $values, $field_value);
    }
    
}

?>
