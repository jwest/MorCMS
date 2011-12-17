<?php defined('SYSPATH') or die('No direct script access.');
/**
 * BelongsTo relation for CRUD ORM
 * @author jwest
 */
class CRUD_Item_BelongsTo extends CRUD_Item
{
   
    /**
     * Declare type for mysql migration
     */
    const TYPE = "INT";
    
    
    /**
     * Show main field
     * @param type $name
     * @return CRUD_Item_BelongsTo 
     */
    public function field($name)
    {
        $this->item['field'] = $name;        
        return $this;
    }
    
    
    public function initialize(&$object)
    {
        $object->create_relation('belongsTo', $this->item['name']);
    }
    
    
}

?>
