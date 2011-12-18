<?php defined('SYSPATH') or die('No direct access allowed.');

//configuration menu in admin panel (per role)
return array(
    
    'author' => array(
        
        'pages' => 'admin/pages/',  
        'menu' => 'admin/menu/',      
        'back to site' => null,
        
    ),
    
    'admin' => array(
        
        'pages' => 'admin/pages/',
        'menu' => 'admin/menu/',
        'users' => 'admin/users/',
        'stats' => 'admin/stats',
        'back to site' => null,
        
    ),
    
    'default' => array(
        
        'pages' => 'admin/pages/',
        'menu' => 'admin/menu/',
        'users' => 'admin/users/',
        'roles' => 'admin/roles/',
        'back to site' => null,
        
    ),
    
);

?>
