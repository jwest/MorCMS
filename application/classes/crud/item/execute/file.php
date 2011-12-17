<?php defined('SYSPATH') or die('No direct script access.');
/**
 * File upload/download item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_File extends CRUD_Item_Execute
{
   
    /**
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {
        return $value . ' ' . Form::file($this->item['name']) . Form::hidden($this->item['name'], $value);
    }
    
    
    /**
     * When value is show in grid or tree
     * @param string $value
     * @return string 
     */
    public function on_show($value)
    {
        return Html::anchor($value, $value, array('target'=>'_blank'));
    }

    
    /**
     * When value is show in grid or tree
     * @param string $value
     * @return string 
     */
    public function on_update($value)
    {
        if(is_array($value))
        {
            $this->on_delete();
         
            if(isset($this->item['rename']))
            {
                return $this->rename_file($value['name']);
            }
            
            return $value['name'];
        }
        else
        {
            return $value;
        }
    }
    
    
    /**
     * When value is show in grid or tree
     * @param string $value
     * @return string 
     */
    public function on_create($value)
    {        
        if(is_array($value))
        {
            if(isset($this->item['rename']))
            {
                return $this->rename_file($value['name']);
            }
        
            return $value['name'];
        }
        else
        {
            return $this->rename_file($value);
        }
    }
    
    
    /**
     * If new record was created, this method init upload
     * @param int $id
     * @param string $value
     * @return string
     */
    public function after_update($model, $id = null, $value = null) 
    {        
        return $this->upload($value, $model);        
    }
    
    
    /**
     * If new record was created, this method init upload
     * @param int $id
     * @param string $value
     * @return string
     */
    public function after_create($model, $id = null, $value = null) 
    {        
        return $this->upload($value, $model);        
    }
    
    
    /**
    * Upload new file
    * @param array $file
    * @param string $name
    * @return string
    */
    protected function upload($file, $name = NULL){

        if(empty($file['name']))
        {
            return $name;
        }        
        
        Upload::$default_directory = 'media/data/'.$this->model->object_plural();
        
        if(!file_exists('media/data/'.$this->model->object_plural()))
        {
            mkdir('media/data/'.$this->model->object_plural(), 0777);
        }
        
        return str_replace(DOCROOT . 'media/data/'.$this->model->object_plural().'/', '', Upload::save($file, $name));
        
    }
    
    
    /**
     * Validation file (empty, valid, size, type...)
     */
    public function validate($value)
    {
        parent::validate($value);        
        
        if(is_string($value))
        {
            return $this->validation;
        }
        
        if(!$this->item['notnull'])
        {
            $this->validation->rule($this->get_name(), 'Upload::valid');
            $this->validation->rule($this->get_name(), 'Upload::not_empty');
        }

        if(isset($this->item['max_size']))
        {
            $this->validation->rule($this->get_name(), 'Upload::size', array(':value', $this->item['max_size']));
        }

        if(isset($this->item['types']) and !empty($this->item['types']))
        {
            $this->validation->rule($this->get_name(), 'Upload::type', array(':value', $this->item['types']));
        }

        if(!$this->validation->check())
        {            
            throw new ORM_Validation_Exception('image', $this->validation);
        }
        
        return $this->validation;
    } 
    
    
    /**
    * Deleted file before delete row
    * @param mixed $value
    * @return bool
    */
    public function on_delete($value = NULL)
    {
        try
        {
            if($value == null)
            {
                $value = $this->model->{$this->item['name']};
            }
            
            if(file_exists('media/data/'.$this->model->object_plural().'/'.$value))
            {
                unlink('media/data/'.$this->model->object_plural().'/'.$value);
            }  
        }
        catch(Exception $e)
        {
            Log::instance()->add(Log::WARNING, 'file delete error in update values: '.$this->model->object_plural().'/'.$value);
        }
    }
    
    
    /**
     * Auto rename file
     * @param string $filename old filename
     * @param int $id (if exists of course)
     * @return string new file name 
     */
    protected function rename_file($filename, $id = null)
    {
        if($filename == null)
        {
            return null;
        }
        
        $new_filename = '';
        
        $filename_part = explode('.', $filename);
        $type = '.'.strtolower($filename_part[count($filename_part) - 1]);
        
        if($this->item['pattern'] == null)
        {         
            return $this->item['name'].'_'.time().$type;
        }
        else
        {
            $pattern = $this->item['pattern'];
            $pattern = str_replace('<time>', time(), $pattern);
            $pattern = str_replace('<id>', $id, $pattern);
            $pattern = str_replace('<hash>', md5($filename), $pattern);
            
            return $pattern.$type;
        }
    } 
    
    
}

?>
