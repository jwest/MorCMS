<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Item execute CRUD ORM
 * @author jwest
 */
abstract class CRUD_Item_Execute
{
   
    /**
     * All preferences for item
     * @var array array from CRUD_Item
     */
    protected $item = array();
        
    
    /**
     * Current use model (row with value)
     * @var ORM
     */
    protected $model;
    
    
    /**
     * Validation item
     * @var Validation
     */
    protected $validation;
    
    
    /**
     * Create values in CRUD?
     * @var bool
     */
    public $create = true;
    
    
    /**
     * Edit values in CRUD?
     * @var bool
     */
    public $edit = true;
    
    
    /**
     * Item manager
     * @param CRUD_Item $item
     * @param mixed $value 
     */
    public function __construct(CRUD_Item $item, &$model = null)
    {
        $this->item = $item->get_item();        
        $this->model = $model;
    }
    
    
    /**
     * Change model for item
     * @param type $model 
     */
    public function change_model($model)
    {
        $this->model = $model;
    }
    
    
    /**
     * Default validation field
     * if validation failed method 
     * throw validation exception
     */
    public function validate($value)
    {        
        $this->validation = new Validation(array($this->get_name() => $value));
        //$this->validation->label($this->get_name(), $this->get_name());
        
        if($this->item['notnull'])
        {
            if($value == null)
            {
                $this->validation->rule($this->get_name(), 'not_empty');
            }
        }
        
        if(!$this->validation->check())
        {
            throw new Validation_Exception($this->validation);
        }
        
        return $this->validation;
    }
    
    
    /**
     * Get item name
     * @return string
     */
    public function get_name()
    {
        return $this->item['name'];
    }
    
    
    /**
     * Check if item is showable
     * @return bool
     */
    public function is_show()
    {
        return ($this->item['show']);
    }
    
    
    /**
     * Check if item is editable
     * @return bool
     */
    public function is_edit()
    {
        return ($this->item['edit']);
    }
    
    
    /**
     * Check if item is editable
     * @return bool
     */
    public function is_notnull()
    {
        return ($this->item['notnull']);
    }
    
    
    /**
     * Check if item is editable
     * @return bool
     */
    public function is_filter()
    {
        return ($this->item['filter']);
    }


    /**
     * left or right panel
     * @return string
     */
    public function get_position()
    {
        return ($this->item['position']);
    }
    
    
    //------INPUTS---------------------------------------
    
    /**
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {
        return Form::input($this->item['name'], $value);
    }
    
    
    /**
     * Input for edit item
     * @return string Form::input
     */
    public function input_edit($value)
    {
        return $this->input_create($value);
    }
    
    
    /**
     * Input for edit item
     * @return string Form::input
     */
    public function input_filter($value)
    {
        return Form::input($this->item['name'], $value);
    }
    
    
    //------ACTIONS--------------------------------------
    
    /**
     * return value for save in database
     * (after create or edit)
     * @return mixed
     */
    public function on_save($value)
    {  
       return $value;
    }
    
    
    /**
     * return value for show in data grid
     * @return mixed
     */
    public function on_show($value)
    {
        return $value;
    }
    
    
    /**
     * return value for save in database
     * @return mixed
     */
    public function on_create($value)
    {
        return $value;
    }
    
    
    /**
     * return value for save in database
     * @return mixed
     */
    public function on_update($value)
    {
        return $value;
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
     * return bool is action success
     * (for transaction dispose or commit)
     * @return bool
     */
    public function on_delete($value)
    {
        return true;
    }
    
    
    /**
     * return bool is action success
     * (for transaction dispose or commit)
     * (after create or edit)
     * @return bool
     */
    public function after_save($value, $id = null)
    {
        return true;
    }
    
    
    /**
     * return bool is action success
     * (for transaction dispose or commit)
     * @return bool
     */
    public function after_create($model, $id = null, $value = null)
    {
        return true;
    }
    
    
    /**
     * return bool is action success
     * (for transaction dispose or commit)
     * @return bool
     */
    public function after_update($model, $id = null, $value = null)
    {
        return true;
    }
    
    
    /**
     * return bool is action success
     * (for transaction dispose or commit)
     * @return bool
     */
    public function after_delete($value, $id = null)
    {
        return true;
    }
    
    
}

?>
