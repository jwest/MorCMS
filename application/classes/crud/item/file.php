<?php defined('SYSPATH') or die('No direct script access.');
/**
 * File upload/download item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_File extends CRUD_Item
{
      
    /**
     * Declare type for mysql migration
     */
    const TYPE = "VARCHAR";
    
    
    /**
     * Get default param for column (for observer model class)
     * @param CRUD_Item_File $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $global_param = parent::observe_param($item, $model_name);
        $item = $item->get_item();
        
        $param = array
        (
            'var' => 255,
        );
        
        return array_merge($global_param, $param);
    }
    
    
    /**
     * Set path for upload files
     * @param string $path
     * @return CRUD_Item_File 
     */
    public function path($path)
    {
        $this->item['path'] = $path;
        
        return $this;
    }
    
    
    /**
     * Set option for multiupload files
     * @param bool $value
     * @return CRUD_Item_File 
     */
    public function multi_upload($value = false)
    {
        $this->item['multi_upload'] = false;
        
        return $this;
    }
    
    
    /**
     * Set max size for upload file
     * @param int $size
     * @return CRUD_Item_File 
     */
    public function max_size($size)
    {
        $this->item['max_size'] = $size;
        
        return $this;
    }
    
    
    /**
     * Validate file type
     * @param array $types
     * @return CRUD_Item_File 
     */
    public function types($types = array())
    {
        $this->item['types'] = $types;
        
        return $this;
    }
    
    
    public function rename($pattern = null)
    {
        $this->item['rename'] = true;
        $this->item['pattern'] = $pattern;
        
        return $this;
    }
    
    
}

?>
