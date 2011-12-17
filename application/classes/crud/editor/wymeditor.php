<?php defined('SYSPATH') or die('No direct script access.');
/**
 * WYSIWYM editor for CRUD
 * @author jwest
 */
class CRUD_Editor_WYMEditor implements CRUD_Editor {
    
    
    protected $item = array();
    
    
    public function __construct($param = array()) {
        ;
    }
    
    
    public function change_param($item)
    {
        $this->item = $item;
    }
    
    
    public function javascript() 
    {
        return View::factory('crud/scripts/wymeditor', array('name' => $this->item['name']) );
    }
    
    
    public function on_save($value) 
    {
        return $value;
    }
    
    
    public function textarea($value) 
    {
        return Form::textarea($this->item['name'], $value, array('id' => $this->item['name'], 'class' => 'wymeditor'));
    }
    
    
}

?>
