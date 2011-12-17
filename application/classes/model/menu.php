<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Menu model
 * @author jwest
 */
class Model_Menu extends Model_CRUD
{
    
    protected $pagination = false;
    
    
    protected $observe = true;
    
    
    protected function items()
    {
        return array
        (           
            CRUD_Item_Text::e('title')->show()->edit()->length(1,100)->notnull(true),
            CRUD_Item_Text::e('title_url')->show()->edit()->length(1,100)->notnull(true),
            CRUD_Item_ManyToMany::e('pages')->show()->edit()->field('name'),
            CRUD_Item_Date::e('date')->show()->auto()->format('d.m.Y H:i')->right(),
        );
    }
    
}

?>
