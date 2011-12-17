<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Image upload/download item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Image extends CRUD_Item_File
{

    /**
     * Default param for create crud field
     * @param string $name 
     * @return CRUD_Item_Image
     */
    public static function e($name) 
    {
        $object = parent::e($name);        
        $object->item['types'] = array('jpg', 'gif', 'png');
        
        return $object;
    }

    
    /**
     * Resize image
     * @param int $max_x
     * @param int $max_y
     * @return CRUD_Item_Image
     */
    public function resize($max_x = 800, $max_y = 800)
    {
        $this->item['resize'] = array(
            'x' => $max_x,
            'y' => $max_y,
        );
        
        return $this;
    }
    
    
    /**
     * Create thumbanails
     * @param int $max_x
     * @param int $max_y
     * @return CRUD_Item_Image
     */
    public function thumb($max_x = 200, $max_y = 200)
    {
        $this->item['thumb'] = array(
            'x' => $max_x,
            'y' => $max_y,
        );
        
        return $this;
    }
    
    
}

?>
