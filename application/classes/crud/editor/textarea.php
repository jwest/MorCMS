<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Simple editor with textarea for CRUD
 * @author jwest
 */
class CRUD_Editor_Textarea implements CRUD_Editor {
    
    
    protected $item = array();
    
    
    public function __construct($param = array()) 
    {
        return;
    }
    
    
    public function change_param($item)
    {
        $this->item = $item;
    }
    
    
    public function javascript() 
    {
        return null;
    }
    
    
    public function on_save($value) 
    {
        return $value;
    }
    
    
    public function textarea($value) 
    {
        return Form::textarea($this->item['name'], $value);
    }
    
    
}

?>
