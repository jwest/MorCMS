<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Pages model
 * @author jwest
 */
class Model_Page extends Model_CRUD
{
    
    protected $pagination = 10;
    
    
    protected $observe = true;
    
    
    protected $sortable = true;
    
    
    protected function items()
    {
        return array
        (           
            CRUD_Item_Options::e('publish')->show()->yesno()->notnull(true)->edit()->right(),
            CRUD_Item_Text::e('name')->show()->edit()->length(1,100)->notnull(true),
            CRUD_Item_Text::e('name_url')->show()->edit()->length(1,100)->notnull(true),
            CRUD_Item_Date::e('date')->show()->auto()->format('d.m.Y H:i')->right(),
            CRUD_Item_Content::e('content')->show()->edit()->editor(new CRUD_Editor_WYMEditor()),
            CRUD_Item_ManyToMany::e('menu')->show()->edit()->all()->field('title')->right(),
        );
    }
    
}

?>
