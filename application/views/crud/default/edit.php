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

        <?php if(count($columns->left) > 0): ?>

            <div class="left">
                <div class="container">

                <?php foreach($columns->left as $column): ?>

                    <div class="item">
                        <div>
                            <?php echo Form::label($column->get_name(), ( ($column->is_notnull()) ? '* ' : ' ' ).$column->get_name(), (isset($errors[$column->get_name()])) ? array('style'=>'color:red;') : null )?>
                        </div>
                        <div>
                            <?php if($id == null): ?>
                                <?php echo $column->input_create((!isset($_POST[$column->get_name()])) ? $data[$column->get_name()] : $_POST[$column->get_name()] ); ?>
                            <?php else: ?>
                                <?php echo $column->input_edit((!isset($_POST[$column->get_name()])) ? $data[$column->get_name()] : $_POST[$column->get_name()] ); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endforeach;?>

                </div>
            </div>
                    
        <?php endif;?>

        <?php if(count($columns->right) > 0): ?>

            <div class="right">
                <div class="container">

                <?php foreach($columns->right as $column): ?>

                    <div class="item">
                        <div>
                            <?php echo Form::label($column->get_name(), ( ($column->is_notnull()) ? '* ' : ' ' ).__($column->get_name()), (isset($errors[$column->get_name()])) ? array('style'=>'color:red;') : null )?>
                        </div>
                        <div>
                            <?php echo $column->input_edit((!isset($_POST[$column->get_name()])) ? $data[$column->get_name()] : $_POST[$column->get_name()] ); ?>
                        </div>
                    </div>

                <?php endforeach;?>

                </div>
            </div>

        <?php endif;?>

        <div class="clr"></div>
        
        <div class="button-group">
            <input class="button" type="submit" name="submit_previous" value="<?php echo __('save and go to grid'); ?>" />
            <input class="button primary" type="submit" name="submit" value="<?php echo __('save'); ?>" />
            <input class="button" type="submit" name="submit_next" value="<?php echo __('save and add next'); ?>" />
        </div>
        
    </form>
</div>