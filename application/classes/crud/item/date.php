<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Datetime for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Date extends CRUD_Item
{
      
    /**
     * Declare type for mysql migration
     */
    const TYPE = "INT";
    
    
    /**
     * Get default param for column (for observer model class)
     * @param CRUD_Item_Date $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $global_param = parent::observe_param($item, $model_name);
        $item = $item->get_item();
        
        $param = array
        (
            'var' => 11,            
            'attr' => 'UNSIGNED',
        );
        
        return array_merge($global_param, $param);
    }
    
    
    /**
     * Auto change datatime value
     * @param bool $on_create
     * @param bool $on_update
     * @return CRUD_Item_Date
     */
    public function auto($on_create = true, $on_update = true)
    {
        $this->item['auto'] = array
        (
            'create' => $on_create,
            'update' => $on_update,
        );
        
        return $this;
    }
    
    
    /**
     * Change dataformat for show data in grid
     * @param string $format (format for date() php function)
     * @return CRUD_Item_Date 
     */
    public function format($format)
    {
        $this->item['format'] = $format;
        return $this;
    }
    
    
}

?>
