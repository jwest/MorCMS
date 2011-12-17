<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Image upload/download item for CRUD ORM
 * @author jwest
 */
class CRUD_Item_Execute_Image extends CRUD_Item_Execute_File
{
   
    /**
     * Input for create item
     * @return string Form::input
     */
    public function input_create($value)
    {
        return HTML::image('media/data/'.$this->model->object_plural().'/'.$value) . ' ' . Form::file($this->item['name']) . Form::hidden($this->item['name'], $value);
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
            return $value;
        }
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
            $this->on_delete($value);
         
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
    * Deleted file before delete row
    * @param mixed $value
    * @return bool
    */
    public function on_delete($value = NULL) {
        
        if($value == null)
        {
            $value = $this->model->{$this->item['name']};
        }
        
        if(file_exists('media/data/'.$this->model->object_plural().'/thumb_'.$value))
        {
            unlink('media/data/'.$this->model->object_plural().'/thumb_'.$value);
        }   
        
        return parent::on_delete();
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
        
        $name = parent::upload($file, $name);
        
        if(isset($this->item['resize']))
        {
            $this->resize($name, $this->item['resize']['x'], $this->item['resize']['y']);
        }
        
        if(isset($this->item['thumb']))
        {
            $this->thumb($name, $this->item['thumb']['x'], $this->item['thumb']['y'], 'thumb_');
        }
        
        return $name;
    }
    
    
    /**
     * Resize uploaded image
     * @param string $file
     * @param int $x max width
     * @param int $y max height
     */
    protected function resize($file, $x, $y)
    {               
        $image = Image::factory('media/data/'.$this->model->object_plural().'/'.$file);
        $image->resize($x, $y);
        
        $image->save();
    }
    
    
    /**
     * Create thumbanail
     * @param string $file
     * @param int $x max width
     * @param int $y max height
     * @param string $prefix
     */
    protected function thumb($file, $x, $y, $prefix = null)
    {
        $image = Image::factory('media/data/'.$this->model->object_plural().'/'.$file);
        $image->resize($x, $y);
        
        $image->save('media/data/'.$this->model->object_plural().'/'.$prefix.$file);
    }
    
    
}

?>
