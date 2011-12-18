<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 'Select option' item execute for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_Options extends CRUD_Item_Execute
{
   
    
    /**
     * Create input for options
     * @param mixed $value
     * @return string html 
     */
    protected function input($value)
    {
        $options = array();
        
        // if values is exists use like key value pair (for int type item in db)
        if(isset($this->item['values']) AND $this->item['values'] != null)
        {
            foreach($this->item['values'] as $option)
            {
                $options[$option] = $option;
            }            
        }
        
        // if no exists you use enum values from database
        else
        {
            $columns = $this->model->table_columns();
            $options_temp = $columns[$this->get_name()]['options'];
            
            foreach($options_temp as $option)
            {
                $options[$option] = $option;
            }
        }
        
        if(!isset($this->item['notnull']) OR !$this->item['notnull'])
        {
            Arr::unshift($options, '', '');
        }
        
        return Form::select($this->get_name(), $options, $value);
    }
    
    
    /**
     * Create input for create options
     * @param mixed $value
     * @return string html 
     */
    public function input_create($value) 
    {
        return $this->input($value);
    }
    
    
    /**
     * Create input for edit options
     * @param mixed $value
     * @return string html 
     */
    public function input_edit($value) 
    {
        return $this->input($value);
    }
    
    
    /**
     * If values is yes/no
     * @param string $value
     * @return string
     */
    public function on_show($value)
    {        
        if(isset($this->item['yesno']))
        {
            return HTML::image('media/gfx/'.$value.'.png');
        }
        else
        {
            return $value;
        }
    }


}

?>
