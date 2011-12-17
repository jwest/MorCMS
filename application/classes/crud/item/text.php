<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Text for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Text extends CRUD_Item
{
   
    /**
     * Declare type for mysql migration
     */
    const TYPE = "VARCHAR";
    
    
    /**
     * Get default param for column (for observer model class)
     * @param CRUD_Item $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $global_param = parent::observe_param($item, $model_name);
        $item = $item->get_item();
        
        $param = array
        (
            'var' => isset($item['length']['max']) ? $item['length']['max'] : 255,            
        );
        
        return array_merge($global_param, $param);
    }
    
    
    /**
     * Length for content
     * @param int $min
     * @param int $max
     * @return CRUD_Item_Text 
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


    /**
     * Email validate
     * @return CRUD_Item_Text 
     */
    public function email()
    {
        $this->item['email'] = true;
        
        return $this;
    }
    
}

?>
