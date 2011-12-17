<?php
/**
 * Geting and saving information from migrations files
 * @author jwest
 */
class CRUD_Observer_File {

    
    protected $model_name;
    
    
    protected $migration_no;
    
    
    public function __construct($model_name, $migration_no)
    {
        $this->model_name = $model_name;
        $this->migration_no = $migration_no;
    }
    
    
    public function get_diff()
    {
        $items_new = $this->read_file($this->migration_no);
        $items_old = $this->get_last_non_exec($this->migration_no);
        
        $diff1 = array_diff_assoc($items_new, $items_old);
        $diff2 = array_diff_assoc($items_old, $items_new);
        
        return array
        (
            'create' => $diff1,
            'remove' => $diff2
        );
    }
    
    
    protected function get_last_non_exec($migration_no)
    {
        $content = $this->read_file($migration_no);
        
        if(!$content['executed'] AND $migration_no > 1)
        {
            $this->get_last_non_exec($migration_no - 1);
        }
        else
        {
            return $content;
        }
    }
    
    
    private function read_file($migration_no)
    {
        $content = file_get_contents(WORKSPACE.'migrations/data/'.$this->model_name.'/mig_'.($migration_no).'.dat');
        return unserialize($content);
    }


    private function save_file($migration_no, $content)
    {
        $content = serialize($content); 
        file_put_contents(WORKSPACE.'migrations/data/'.$this->model_name.'/mig_'.($migration_no).'.dat', $content);        
    }


}

?>
