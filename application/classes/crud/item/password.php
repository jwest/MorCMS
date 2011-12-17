<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Kohana password hash item
 * @author jwest
 */
class CRUD_Item_Password extends CRUD_Item
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
            'var' => 64,            
        );
        
        return array_merge($global_param, $param);
    }
    
    
    /**
     * Length for content
     * @param int $min
     * @param int $max
     * @return CRUD_Item_Password
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
     * password validation rules
     * @return CRUD_Item_Password
     */
    public function rules($regex = true)
    {
        $this->item['rules'] = $regex;
        
        return $this;
    }
    
    
    /**
     * repeat password on edit
     * @return CRUD_Item_Password
     */
    public function repeat()
    {
        $this->item['repeat'] = true;
        
        return $this;
    }
    
    
    /**
     * If you use Kohana auth module use this option
     * @return CRUD_Item_Password
     */
    public function nothash()
    {
        $this->item['nothash'] = true;
                
        return $this;
    }
    
    
}

?>
