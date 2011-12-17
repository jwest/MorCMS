<?php defined('SYSPATH') or die('No direct script access.');

I18n::$view = 'CRUD_'.$name; 

?>

<div class="crud-edit">
    
    <div id="header">

        <h2><?php echo __($name); ?></h2>

        <?php echo Html::anchor($base_controller.$name.'/show/', __('show all'), array('class' => 'button icon home')); ?>

    </div>

    <div id="errors">
        <?php foreach($errors as $error): ?>
            <?php if(is_array($error)): ?>
                <div><?php echo var_dump($error) ?></div>
            <?php else: ?>
                <div><?php echo $error ?></div>
            <?php endif; ?>
        <?php endforeach;?>
    </div>

    <form action="#" method="post" enctype="multipart/form-data">
        
        <div class="left">
        <?php foreach($columns as $column): ?>
        
            <?php if($column->is_edit() AND $column->get_position() == 'left'): ?>
                
                <div class="item">
                    <div>
                        <?php echo Form::label($column->get_name(), $column->get_name(), (isset($errors[$column->get_name()])) ? array('style'=>'color:red;') : null )?>
                    </div>
                    <div>
                        <?php if($id == null): ?>
                            <?php echo $column->input_create((!isset($_POST[$column->get_name()])) ? $data[$column->get_name()] : $_POST[$column->get_name()] ); ?>
                        <?php else: ?>
                            <?php echo $column->input_edit((!isset($_POST[$column->get_name()])) ? $data[$column->get_name()] : $_POST[$column->get_name()] ); ?>
                        <?php endif; ?>
                    </div>
                </div>
        
            <?php endif;?>
        
        <?php endforeach;?>
        </div>

        <div class="right">
        <?php foreach($columns as $column): ?>
        
            <?php if($column->is_edit() AND $column->get_position() == 'right'): ?>
                
                <div class="item">
                    <div>
                        <?php echo Form::label($column->get_name(), $column->get_name(), (isset($errors[$column->get_name()])) ? array('style'=>'color:red;') : null )?>
                    </div>
                    <div>
                        <?php echo $column->input_edit((!isset($_POST[$column->get_name()])) ? $data[$column->get_name()] : $_POST[$column->get_name()] ); ?>
                    </div>
                </div>
        
            <?php endif;?>
        
        <?php endforeach;?>
        </div>

        <input type="submit" name="submit_previous" value="<?php echo __('save and go to grid'); ?>" />
        <input type="submit" name="submit" value="<?php echo __('save'); ?>" />
        <input type="submit" name="submit_next" value="<?php echo __('save and add next'); ?>" />
        
    </form>
</div>