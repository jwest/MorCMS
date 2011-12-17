<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Internationalization used db table for create language
 */
class I18n extends Kohana_I18n 
{
    
    /**
     * View for keys
     * @var string
     */
    public static $view = null;
    
    
    /**
     * Get value from db table
     * @param string $string
     * @param string $lang
     * @return string 
     */
    public static function get($string, $lang = null)
    {
        if(Kohana::$environment == Kohana::DEVELOPMENT)
        {
            if ( ! $lang)
            {
                // Use the global target language
                $lang = I18n::$lang;
            }

            // Load the translation table for this language
            $table = I18n::load($lang);

            // Return the translated string if it exists
            return isset($table[I18n::$view.'|'.$string]) ? $table[I18n::$view.'|'.$string] : I18n::add($string);
        }
        else
        {
            return parent::get($string, $lang);
        }
    }
    
    
    /**
     * Add new kang value to db
     * @param string $string
     * @return string
     */
    public static function add($string)
    {
        $isExist = ORM::factory('language')
            ->where('view','=',I18n::$view)
            ->and_where('key', '=', $string)
            ->count_all();
        
        if($isExist == 0)
        {        
            $language = ORM::factory('language');
            $language->key = $string;
            $language->view = I18n::$view;
            
            // languages in application
            $language->pl = $string;
            $language->en = $string;
            
            $language->save();
        }
            
        return $string;
    }
    
    
    /**
     * Load lang from db table
     * @param string $lang
     * @return array
     */
    public static function load($lang)
    {
        if(Kohana::$environment == Kohana::DEVELOPMENT)
        {
            if (isset(I18n::$_cache[$lang]))
            {
                return I18n::$_cache[$lang];
            }
            
            I18n::$_cache[$lang] = array();
            
            $language = ORM::factory('language')->find_all()->as_array();
            
            foreach($language as $item)
            {
                I18n::$_cache[$lang][$item->view.'|'.$item->key] = $item->$lang;
            }
            
            return I18n::$_cache[$lang];
        }
        else
        {
            return parent::load($lang);
        }
    }
    
    
    public static function exec()
    {
        //@TODO generate output files with language from db
    }
}
