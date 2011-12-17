<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Text for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_Text extends CRUD_Item_Execute
{
    
    /**
     * Use filter in grid
     * @param Model_CRUD $object
     * @param mixed $value 
     */
    public function on_filter(&$object, $value)
    {
        $object->where($this->item['name'], 'LIKE', $value.'%');
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

        if(isset($this->item['email']))
        {
            $this->validation->rule($this->get_name(), 'email');        
        }
            
        if(!$this->validation->check())
        {
            throw new Validation_Exception($this->validation);
        }
                    
        return $this->validation;
    }
    
    
}

?>
