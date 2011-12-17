<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 'Select option' item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Options extends CRUD_Item
{
    
    /**
     * Declare type for mysql migration
     */
    const TYPE = "ENUM";
    
    
    /**
     * Get default param for column (for observer model class)
     * @param CRUD_Item_Options $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $global_param = parent::observe_param($item, $model_name);
        $item = $item->get_item();
        $var = null;
        
        foreach($item['values'] as $value)
        {
            if($var != null)
            {
                $var .= ', ';                
            }
            
            $var .= '\''.$value.'\'';
        }
        
        $param = array
        (
            'var' => $var,
        );
        
        return array_merge($global_param, $param);
    }
    
    
    /**
     * Add param to select
     * If null, or is don't exists this class use enum var from db
     * @param array $array key=>value struct for select input
     * @return CRUD_Item_Options
     */
    public function values($array)
    {
        $this->item['values'] = $array;                
        return $this;
    }
    
    
}

?>
