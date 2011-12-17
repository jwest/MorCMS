<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Content item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Content extends CRUD_Item
{
      
    /**
     * Declare type for mysql migration
     */
    const TYPE = "TEXT";
    
    
    public static function e($name) 
    {
        $object = parent::e($name);        
        $object->item['editor'] = new CRUD_Editor_Textarea();
        
        return $object;
    }
    
    
    /**
     * Get default param for column (for observer model class)
     * @param CRUD_Item_Content $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $global_param = parent::observe_param($item, $model_name);
        $item = $item->get_item();
        
        $param = array
        (
            'var' => null,            
        );
        
        return array_merge($global_param, $param);
    }
    
    
    /**
     * Length for content
     * @param int $min
     * @param int $max
     * @return CRUD_Item_Content 
     */
    public function length($min, $max)
    {
        $this->item['length'] = array
        (
            'min' => $min,
            'max' => $max,
        );
        
        return $this;
    }
    
    
    public function editor(CRUD_Editor $editor)
    {
        $this->item['editor'] = $editor;
        
        return $this;
    }
    
    
}

?>
