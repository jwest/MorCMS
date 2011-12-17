<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Tools for crud
 * @author jwest
 */
class CRUD_Tools {
    
    
    private static $request;
    private static $response;
    
    
    
    
    
    public static function init(Kohana_Request $request, Kohana_Response $response)
    {
        self::$request = $request;
        self::$response = $response;
    }
    
    
    public static function all_param($name = null)
    {        
        $param = array_merge(self::get_param(), self::post_param());
        $param = array_merge($param, self::files_param());
     
        if($name == null)
        {
            return $param;
        }
        else
        {    
            return (isset($param[$name])) ? $param[$name] : false;
        }
    }
    
    
    public static function get_param($route_param = 'id', $sep1 = '&', $sep2 = ':')
    {
        $params = array();
        
        if(self::$request->param($route_param))
        {        
            $param = explode($sep1, self::$request->param($route_param));
            
            foreach($param as $value)
            {
                $value_param = explode($sep2, $value);
                if(isset($value_param[1]))
                {
                    $params[$value_param[0]] = $value_param[1];                
                }
            }
        }
        
        return $params;
    }
    
    
    public static function files_param($clean_null = true)
    {
        $files = $_FILES;
        
        if($clean_null)
        {
            foreach($files as $name => $file)
            {
                if(empty($file['name']) OR empty($file['tmp_name']) OR $file['size'] == 0)
                {
                    unset($files[$name]);
                }
            }
        }
        
        return $files;
    }
    
    
    public static function post_param($key = null)
    {
        if($key == null)
        {
            return self::$request->post();
        }
        else
        {
            return self::$request->post($key);
        }
    }
    
    
}

?>
