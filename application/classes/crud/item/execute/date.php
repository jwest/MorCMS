<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Datetime for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_Date extends CRUD_Item_Execute
{
   
    /**
     * Show datetime in datatime format
     * @param type $value
     * @return type 
     */
    public function on_show($value) 
    {
        if(isset($this->item['format']))
        {
            //costom date format
            return '<i>'.date($this->item['format'], $value).'</i>';
        }
        else
        {
            //default date format
            return '<i>'.date('Y.m.d H:i:s', $value).'</i>';
        }
    }
    
    
    /**
     * Save auto date to db on create value
     * @param mixed $value
     * @return mixed 
     */
    public function on_create($value) 
    {
        if( (isset($this->item['auto']['create']) AND $this->item['auto']['create'] ) AND !$this->is_edit() )
        {
            return time();
        }
        else
        {
            return $value;
        }
    }
    
    
    /**
     * Save auto date to db on update value
     * @param mixed $value
     * @return mixed 
     */
    public function on_update($value) 
    {
        if((isset($this->item['auto']['update']) AND $this->item['auto']['update'] ) AND !$this->is_edit() )
        {
            return time();
        }
        else
        {
            return $value;
        }
    }
    
    
    /**
     * Use filter in grid
     * @param Model_CRUD $object
     * @param mixed $value 
     */
    public function on_filter(&$object, $value)
    {
        $object->where($this->item['name'], '=', $value);
    }
    
    
    /**
     * input for filter
     * @param string $value
     * @return string form::select 
     */
    public function input_filter($value)
    {   
        if(isset($this->item['format']))
        {
            //costom date format
            $value = date($this->item['format'], $value);
        }
        else
        {
            //default date format
            $value = date('Y.m.d H:i:s', $value);
        }
        
        return Form::input($this->item['name'], $value . ' - '.date('Y.m.d H:i:s'), array('class'=>'datepicker'));
    }
    
}

?>
