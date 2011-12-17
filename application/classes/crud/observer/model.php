<?php

/**
 * observe model for change
 * and create migration files
 * @author jwest
 */
class CRUD_Observer_Model {
    
    
    /**
     * Model name
     * @var string
     */
    protected $model_name;
    
    
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
     * number of migration
     * @var int
     */
    protected $migration_no = 0;
    
    
    /**
     * If migration created sql to file
     * @var bool
     */
    protected $executed = false;
    
    
    /**
     * CRUD observer sql generator
     * @var CRUD_Observer_Generator
     */
    protected $generator;
    
    
    public function __construct($model_name, $items)
    {                       
        $this->model_name = $model_name;
        $this->get_migrations_info();
        
        $this->items = $this->get_data($items);
        $this->items_old = $this->get_last_data();
        
        $this->generator = new CRUD_Observer_Generator($model_name);  
        
    }
    
    
    /**
     * Get data from migration info
     */
    protected function get_migrations_info()
    {
        try
        {
            $migration = unserialize(file_get_contents(WORKSPACE.'migrations/data/'.$this->model_name.'/mig.dat'));            
            $this->migration_no = $migration['migration_no'];
            $this->executed = $migration['executed'];            
        }
        catch(Exception $e)
        {
            $this->migration_no = 0;
            $this->update_migrations_info();
        }
    }
    
    
    /**
     * update information about model migrations
     */
    protected function update_migrations_info()
    {        
        $data = array
        (
            'migration_no' => $this->migration_no,
            'executed' => $this->executed,
            'date' => time(),
        );
                   
        if(!file_exists(WORKSPACE.'migrations/data/'.$this->model_name.'/'))
        {
            mkdir(WORKSPACE.'migrations/data/'.$this->model_name.'/', 0777);
        }
        
        file_put_contents(WORKSPACE.'migrations/data/'.$this->model_name.'/mig.dat', serialize($data));
    }
    
    
    /**
     * Get data from last migrate
     */
    protected function get_last_data()
    {
        $items_old = array();
        
        if($this->migration_no == 0)
        {
            return array();
        }
        
        try
        {
            $last_migration = unserialize(file_get_contents(WORKSPACE.'migrations/data/'.$this->model_name.'/mig_'.($this->migration_no).'.dat'));            
            $items_old = $last_migration['items'];
        }
        catch(Exception $e)
        {
            echo 'Migration file don\'t exists!';
        }
        
        return $items_old;
    }
    
    
    /**
     * Create new migration from actual state
     */
    public function create_migration()
    {
        $diff1 = array_diff_assoc($this->items, $this->items_old);
        $diff2 = array_diff_assoc($this->items_old, $this->items);
        
        if(empty($diff1) AND empty($diff2) AND $this->migration_no != 0)
        {            
            return;
        }
        
        if($this->migration_no == 0)
        {
            $this->generator->set_data($this->items);
        }
        else
        {            
            $this->generator->set_data($this->items, $this->items_old);
        }
        
        $this->items_old = $this->items;
        $this->migration_no++;
            
        $data = array
        (
            'migration_no' => $this->migration_no,
            'items' => $this->items,
            'date' => time(),
        );
            
        if(!file_exists(WORKSPACE.'migrations/data/'.$this->model_name.'/'))
        {
            mkdir(WORKSPACE.'migrations/data/'.$this->model_name.'/', 0777);
        }
        
        file_put_contents(WORKSPACE.'migrations/data/'.$this->model_name.'/mig_'.$this->migration_no.'.dat', serialize($data));
        
        $this->update_migrations_info($this->items);
        
        $this->generator->exec($this->migration_no);        
    }
    
    
    /**
     * Get info about actual state fields
     * @return array with fields
     */
    public function get_data($items)
    {
        $fields = array();
        
        foreach($items as $item)
        {            
            $item_class = 'CRUD_Item_'.$item;
            
            $fields[$item->get_name()] = array
            (
                'name' => $item->get_name(),
                'type' => $item_class::TYPE,
                'info' => $item_class::observe_param($item, $this->model_name),
            );
        }
    
        return $fields;
    }
    
    
}

?>
