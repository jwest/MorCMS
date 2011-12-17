<?php
/**
 * Generate SQL files for migrations
 * @author jwest
 */
class CRUD_Observer_Generator {
    
    
    /**
     * name for observe model
     * @var string
     */
    protected $model_name;
    
    
    /**
     * number for actual migration
     * @var int
     */
    protected $migration_no;
    
    
    /**
     * State for generator 
     * @var string CREATE, UPDATE or REMOVE
     */
    private $action;
    
    
    /**
     * Model items for migration
     * @var array
     */
    protected $items = array();
    
    
    /**
     * Old items from model migration
     * @var array
     */
    protected $items_old = array();
    
    
    /**
     * Init crud observer sql generator for migrations
     * @param string $model_name 
     */
    public function __construct($model_name, $migration_no = 2) 
    {
        $this->model_name = $model_name;
        $this->migration_no = $migration_no;
    }
    
    
    /**
     * Set data for migration
     * @param array $items
     * @param array $items_old 
     */
    public function set_data($items, $items_old = null)
    {
        $this->items = $items;
        $this->items_old = $items_old;
        
        if($items_old == null)
        {
            $this->action = 'CREATE';
        }
        else if($items == null)
        {
            $this->action = 'REMOVE';
        }
        else
        {
            $this->action = 'UPDATE';
        }
    }
    
    
    /**
     * Execute generator
     * @param bool $dynamic (only for test) Execute sql query live
     */
    public function exec($migration_no = null, $dynamic = false)
    {
        if($migration_no == null)
        {
            $this->migration_no = $migration_no;
        }        
                
        $buffer = null;
        
        switch($this->action)
        {
            case 'CREATE': $buffer = $this->create_table(); break;
            case 'UPDATE': $buffer = $this->alter_table(); break;
            case 'REMOVE': $buffer = $this->remove_table(); break;
            default:
                throw new Exception('You don\'t initialize data and action');
        }
        
        file_put_contents(WORKSPACE.'/migrations/migration_'.$this->migration_no.'.sql', $buffer, FILE_APPEND);
        
        
        //only for test!
        if($dynamic)
        {
            DB::query(Database::SELECT, $buffer)->execute();
        }
    }
    
    
    private function create_table()
    {
        $buffer_sql = "\n";
        
        $buffer  = '--'."\n";
        $buffer .= '-- create table for model: '.$this->model_name."\n";
        $buffer .= '--'."\n";
        $buffer .= 'CREATE TABLE IF NOT EXISTS `'.Inflector::plural($this->model_name).'` ('."\n";
        $buffer .= '    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,'."\n";
        
        foreach($this->items as $name => $item)
        {
            if(isset($item['info']['var']) AND $item['info']['var'] != null)
            {
                $buffer .= '    ';
                $buffer .= '`'.$name.'` ';
                $buffer .= $item['type'];
                $buffer .= (isset($item['info']['var']) and $item['info']['var'] != null) ? '('.$item['info']['var'].') ' : '  ' ;
                $buffer .= (isset($item['info']['attr']) and $item['info']['attr'] != null) ? $item['info']['attr'].' ' : null ;
                $buffer .= (isset($item['info']['notnull']) and $item['info']['notnull']) ? 'NOT NULL ' : 'NULL ' ;
                $buffer .= (isset($item['info']['default']) and $item['info']['default'] != null) ? 'DEFAULT `'.$item['info']['default'].'`' : null ;
                $buffer .= ','."\n";
            }
            else if(isset($item['info']['sql']) AND $item['info']['sql'] != null)
            {
                $buffer_sql .= $item['info']['sql'];
            }
        }
        $buffer .= '    primary key(id)'."\n";
        $buffer .= ') ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;'."\n\n";

        return $buffer.$buffer_sql;
    }
    
    
    private function alter_table()
    {
        $buffer = null;
        
        $diff1 = array_diff_assoc($this->items, $this->items_old);
        
        foreach($diff1 as $name => $item)
        {
            $buffer .= $this->add_column($name, $item);
        }
        
        $diff2 = array_diff_assoc($this->items_old, $this->items);
        
        foreach($diff2 as $name => $item)
        {
            $buffer .= $this->remove_column($name, $item);
        }
        
        foreach($this->items as $name => $item)
        {   
            if(!isset($this->items_old[$name]))
            {
                $buffer .= $this->add_column($name, $item);
            }
            else if(!isset($this->items[$name]))
            {
                $buffer .= $this->remove_column($name);
            }
            else if($this->items[$name] != $this->items_old[$name])
            {
                $buffer .= $this->modify_column($name, $item);
            }
        }
        
        
        return $buffer;
    }    
    
    
    /**
     * Create new column for database
     * @param string $name
     * @param string $item
     * @return string 
     */
    private function add_column($name, $item)
    {
        $buffer  = '--'."\n";
        $buffer .= '-- alter table for model: '.$this->model_name.' - add column: '.$name."\n";
        $buffer .= '--'."\n";
        $buffer .= 'alter table `'.Inflector::plural($this->model_name).'` add column ';  
        $buffer .= '`'.$name.'` ';
        $buffer .= $item['type'];
        $buffer .= (isset($item['info']['var']) and $item['info']['var'] != null) ? '('.$item['info']['var'].') ' : '  ' ;
        $buffer .= (isset($item['info']['attr']) and $item['info']['attr'] != null) ? $item['info']['attr'].' ' : null ;
        $buffer .= (isset($item['info']['notnull']) and $item['info']['notnull']) ? 'NOT NULL ' : 'NULL ' ;
        $buffer .= (isset($item['info']['default']) and $item['info']['default'] != null) ? 'DEFAULT `'.$item['info']['default'].'`' : null ;         
        $buffer .= ';'."\n\n";
        
        return $buffer;
    }
    
    
    /**
     * Remove data and column
     * @param string $name
     * @return string 
     */
    private function remove_column($name)
    {
        $buffer  = '--'."\n";
        $buffer .= '-- alter table for model: '.$this->model_name.' - remove column: '.$name."\n";
        $buffer .= '--'."\n";
        $buffer .= 'alter table `'.Inflector::plural($this->model_name).'` drop column ';                        
        $buffer .= '`'.$name.'` ';
        $buffer .= ';'."\n\n";
        
        return $buffer;
    }
    
    
    /**
     * Generate modification column script 
     * @param string $name
     * @param string $item
     * @return string 
     */
    private function modify_column($name, $item)
    {
        $buffer  = '--'."\n";
        $buffer .= '-- alter table for model: '.$this->model_name.' - modify column: '.$name."\n";
        $buffer .= '--'."\n";
        $buffer .= 'alter table `'.Inflector::plural($this->model_name).'` modify ';  
        $buffer .= '`'.$name.'` ';
        $buffer .= $item['type'];
        $buffer .= (isset($item['info']['var']) and $item['info']['var'] != null) ? '('.$item['info']['var'].') ' : '  ' ;
        $buffer .= (isset($item['info']['attr']) and $item['info']['attr'] != null) ? $item['info']['attr'].' ' : null ;
        $buffer .= (isset($item['info']['notnull']) and $item['info']['notnull']) ? 'NOT NULL ' : 'NULL ' ;
        $buffer .= (isset($item['info']['default']) and $item['info']['default'] != null) ? 'DEFAULT `'.$item['info']['default'].'`' : null ;         
        $buffer .= ';'."\n\n";
        
        return $buffer;
    }
    
    
    private function remove_table(){}
    
    
    private function insert(){}
    
    
}

?>
