<?php defined('SYSPATH') or die('No direct script access.');
/**
 * manyToMany (has_many "through") relation for CRUD ORM
 * @author jwest
 */
class CRUD_Item_ManyToMany extends CRUD_Item
{
   
    /**
     * Declare type for mysql migration
     */
    const TYPE = null;
    
    
    /**
     * Select main field for show value in grid and input
     * @param string $name field name
     * @return CRUD_Item_ManyToMany 
     */
    public function field($name)
    {
        $this->item['field'] = $name;
        
        return $this;
    }
    
    
    /**
     * Show all values in grid (default only count)
     * @return CRUD_Item_ManyToMany 
     */
    public function all()
    {
        $this->item['showall'] = true;
        
        return $this;
    }
    
    
    /**
     * Get default param for sql (for observer model class)
     * @param CRUD_Item_Options $item
     * @return array 
     */
    public static function observe_param($item, $model_name)
    {
        $param = parent::observe_param($item, $model_name);        
        
        $models[0] = Inflector::plural(strtolower(str_replace('Model_', '', $model_name)));
        $models[1] = $item->get_name();
        
        sort($models);  
        
        $param['sql'] = "\n".
                
            'CREATE TABLE IF NOT EXISTS `'.$models[0].'_'.$models[1].'` ('."\n".
            '  `'.Inflector::singular($models[0]).'_id` int(10) unsigned NOT NULL,'."\n".
            '  `'.Inflector::singular($models[1]).'_id` int(10) unsigned NOT NULL,'."\n".
            '  PRIMARY KEY (`'.Inflector::singular($models[0]).'_id`,`'.Inflector::singular($models[1]).'_id`),'."\n".
            '  KEY `fk_'.Inflector::singular($models[1]).'_id` (`'.Inflector::singular($models[1]).'_id`)'."\n".
            ') ENGINE=InnoDB DEFAULT CHARSET=utf8;'."\n".
            "\n".
            'ALTER TABLE `'.$models[0].'_'.$models[1].'`'."\n".
            '  ADD CONSTRAINT `'.$models[0].'_'.$models[1].'_ibfk_1` FOREIGN KEY (`'.Inflector::singular($models[0]).'_id`) REFERENCES `'.$models[0].'` (`id`) ON DELETE CASCADE,'."\n".
            '  ADD CONSTRAINT `'.$models[0].'_'.$models[1].'_ibfk_2` FOREIGN KEY (`'.Inflector::singular($models[1]).'_id`) REFERENCES `'.$models[1].'` (`id`) ON DELETE CASCADE;'."\n";
        
        return $param;
    }
    
    
    /**
     * Initialize object (for relations)
     * @param orm $object 
     */
    public function initialize(&$object)
    {
        $models[0] = Inflector::plural(strtolower(str_replace('Model_', '', get_class($object))));
        $models[1] = $this->item['name'];
        
        sort($models);        
        
        $object->create_relation('hasMany', $this->item['name'], array( 'model' => Inflector::singular($this->item['name']), 'through' => $models[0].'_'.$models[1]) );
    }
    
    
}

?>
