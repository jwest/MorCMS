<?php defined('SYSPATH') or die('No direct script access.');
/**
 * HasMany to relation for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_HasMany extends CRUD_Item_Execute
{
   
    /**
     * return value for show in data grid
     * @return mixed
     */
    public function on_show($value)
    {   
        $count = $this->model->{$value->object_plural()}->count_all();     
        
        return Html::anchor($value->url().$this->model->object_name().':'.$this->model, $count.' &#8594;');
    }
    
    
    /**
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {        
        $id = $value->id;
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
    public function on_update($value)
    {  
       return null;
    }
    
}

?>
