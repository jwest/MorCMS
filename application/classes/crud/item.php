<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Model for CRUD ORM
 * @author jwest
 */
abstract class CRUD_Item 
{
    
    /**
     * Information about column in table
     * @var array
     */
    protected $item = array
    (
        'type' => NULL,
        'name' => NULL,
        'show' => FALSE,
        'edit' => FALSE,
        'filter' => FALSE,
        'position' => 'left',
        'notnull' => FALSE,
        'default' => null,
    );
    
    
    /**
     * Create new column in table
     * @param type $name
     * @return SELF 
     */
    public static function e($name)
    {
        return new static($name);
    }
    
    
    /**
     * Create new item object
     * @param string $name 
     */
    public function __construct($name)
    {
        $this->item['type'] = str_replace('CRUD_Item_',null,get_class($this));
        $this->item['name'] = $name;
    }
    
    
    /**
     * Do action on initialize object
     * @param Model_CRUD $object
     */
    public function initialize(&$object)
    {
        
    }
    
    
    /**
     * Column show in view
     * @param CRUD_Item_Option $option
     * @return CRUD_Item 
     */
    public function show(CRUD_Item_Option $option = NULL)
    {
        $this->item['show'] = ($option != NULL) ? $option : TRUE;
        return $this;
    }
    
    
    /**
     * Column show in view
     * @param CRUD_Item_Option $option
     * @return CRUD_Item 
     */
    public function filter($value = true)
    {
        $this->item['filter'] = $value;
        return $this;
    }
    
    
    /**
     * Column editable from admin panel
     * @param CRUD_Item_Option $option
     * @return CRUD_Item 
     */
    public function edit(CRUD_Item_Option $option = NULL)
    {
        $this->item['edit'] = ($option != NULL) ? $option : TRUE;
        return $this;
    }
    

    /**
     * Show in right panel
     * @return CRUD_Item 
     */
    public function right()
    {
        $this->item['position'] = 'right';
        return $this;
    }

    
    /**
     * Var must be not null
     * @param bool $value
     * @return CRUD_Item 
     */
    public function notnull($value = true)
    {
        $this->item['notnull'] = $value;
        
        return $this;
    }
    
    
    /**
     * Default value for column
     * @param mixed $value
     * @return CRUD_Item 
     */
    public function default_value($value = null)
    {
        $this->item['default'] = $value;
        
        return $this;
    }
    
    
    /**
     * Return all configuration for field
     * @return array
     */
    public function get_item()
    {
        return $this->item;
    }
    
    
    /**
     * Return all configuration for field
     * @return array
     */
    public function get_name()
    {
        return $this->item['name'];
    }
    
    
    /**
     * Return class type
     * @return string 
     */
    public function __toString() 
    {
        return $this->item['type'];
    }
    
    
    /**
     * Get default param for column (for observer model class)
     * @param CRUD_Item $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $item = $item->get_item();
        
        $param = array
        (
            'notnull' => $item['notnull'],
            'default' => $item['default'],
        );
        
        return $param;
    }
    
    
}

?>
