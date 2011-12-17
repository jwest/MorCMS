<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Pages model
 * @author jwest
 */
class Model_Role extends Model_CRUD
{
    
    protected $pagination = false;
    
    
    protected $observe = false;
    
    
    protected function items()
    {
        return array
        (           
            CRUD_Item_Text::e('name')->show()->edit()->length(1,100)->notnull(true),
            CRUD_Item_Content::e('description')->show()->edit(),
            CRUD_Item_ManyToMany::e('users')->show()->field('username'),
        );
    }
    
}

?>
