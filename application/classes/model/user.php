<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu model
 * @author jwest
 */
class Model_User extends Model_Auth_User
{
    
    protected $pagination = 20;
    
    
    protected $observe = false;
    
    
    protected function items()
    {
        return array
        (           
            CRUD_Item_Text::e('email')->show()->edit()->filter()->length(1,100)->notnull(true),
            CRUD_Item_Text::e('username')->show()->edit()->filter()->length(1,100)->notnull(true),
            CRUD_Item_ManyToMany::e('roles')->show()->edit()->all()->field('name'),
            CRUD_Item_Password::e('password')->repeat()->nothash()->edit()->length(8,100)->notnull(true),
            CRUD_Item_Text::e('logins')->show(),
            CRUD_Item_Date::e('last_login')->show()->format('d.m.Y H:i'),            
        );
    }
    
}

?>
