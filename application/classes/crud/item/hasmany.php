<?php defined('SYSPATH') or die('No direct script access.');
/**
 * hasMany relation for CRUD ORM
 * @author jwest
 */
class CRUD_Item_HasMany extends CRUD_Item
{
   
    /**
     * Declare type for mysql migration
     */
    const TYPE = null;
    
    
    
    public function initialize(&$object)
    {
        $object->create_relation('hasMany', $this->item['name']);
    }
    
    
}

?>
