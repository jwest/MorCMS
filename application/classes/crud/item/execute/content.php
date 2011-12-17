<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Content execute item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_Content extends CRUD_Item_Execute
{
    
    public function __construct(CRUD_Item $item, &$model = null) 
    {
        parent::__construct($item, $model);
        
        $this->item['editor']->change_param($this->item);
    }
    
    
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
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {
        return $this->item['editor']->textarea($value) . $this->item['editor']->javascript();
        //return Form::textarea($this->item['name'], $value);
    }
    
    
    public function on_save($value) 
    {
        return $this->item['editor']->on_save($value);
    }
    
    
    /**
     * Validation textarea (text length in input)
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
            
            if(!$this->validation->check())
            {
                throw new Validation_Exception($this->validation);
            }

        }
        
        return $this->validation;
    }

    
}

?>
