<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Kohana password hash for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_Password extends CRUD_Item_Execute
{
    
    /**
     * Use filter in grid
     * @param Model_CRUD $object
     * @param mixed $value 
     */
    public function on_filter(&$object, $value)
    {
        return null;
    }
    
    
    public function input_create($value) 
    {
        if(isset($this->item['repeat']))
        {
            return 
                Form::password($this->item['name']).
                Form::password($this->item['name'].'_repeat');
        }
        else
        {
            return Form::password($this->item['name']);
        }
    }
    
    
    public function input_edit($value) 
    {
        if(isset($this->item['repeat']))
        {
            return 
                Form::password($this->item['name'], '1111111111111111').
                Form::password($this->item['name'].'_confirm', '1111111111111111');
        }
        else
        {
            return Form::password($this->item['name'], '1111111111111111');
        }
    }
    
    
    /**
     * When create, password be hashed
     * @param string $value
     * @return string(64)
     */
    public function on_create($value) 
    {
        if(isset($this->item['nothash']) AND $this->item['nothash'])
        {
            return $value;
        }
        else
        {
            Auth::instance()->hash($value);
        }
    }

    
    /**
     * When update, password be hashed
     * @param string $value
     * @return string(64)
     */
    public function on_update($value) 
    {
        if($value === '1111111111111111')
        {
            return null;
        }
        
        if(isset($this->item['nothash']) AND $this->item['nothash'])
        {
            return $value;
        }
        else
        {
            Auth::instance()->hash($value);
        }
            
    }
    
    
    /**
     * Validation input (text length in input)
     */
    public function validate($value)
    {
        parent::validate($value);
        
        if(isset($this->item['length']))
        {
            if($this->item['length']['min'] != false)
            {
                $this->validation->rule($this->get_name(), 'min_length', array(':value', $this->item['length']['min']));
            }
            
            if($this->item['length']['max'] != false)
            {
                $this->validation->rule($this->get_name(), 'max_length', array(':value', $this->item['length']['max']));
            }

        }

        if(isset($this->item['rules']))
        {
            $this->validation->rule($this->get_name(), 'min_length', array(':value', 8));
        }
            
        if(isset($this->item['repeat']))
        {
            //$this->validation->rule($this->get_name().'_confirm', 'matches', array(':validation', ':field', $this->get_name()));                
        }
        
        if(!$this->validation->check())
        {
            throw new Validation_Exception($this->validation);
        }
                    
        return $this->validation;
    }
    
    
}

?>
