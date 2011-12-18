<?php defined('SYSPATH') or die('No direct script access.');

I18n::$view = 'CRUD_'.$name; 

?>

<div id="header">

    <h2><?php echo __($name); ?></h2>

    <?php echo Form::button(null, __('search'), array('class' => 'button icon search', 'id' => 'filter')); ?>
    <?php echo Html::anchor($base_controller.$name.'/add/', __('add'), array('class' => 'button icon add')); ?>

</div>

<?php if(count($data) != 0) :?>
<table class="tpl selectable <?php echo ($sortable) ? 'sortable' : '' ?>">
    <thead>
        <tr>
            <?php foreach($columns as $column): ?>
                <?php if($column->is_show()): ?>
                    <th><?php echo __($column->get_name()) ?></th>
                <?php endif; ?>
            <?php endforeach; ?>
            <th><?php echo __('options'); ?></th>
        </tr>
        <tr class="filter">
            <?php foreach($columns as $column): ?>
                <th>
                <?php if($column->is_filter()): ?>
                    <?php echo $column->input_filter((isset($filters[$column->get_name()])) ? $filters[$column->get_name()] : null ); ?>
                <?php endif; ?>
                 </th>
            <?php endforeach; ?>
            <th><?php echo Form::button(null, __('Ok'), array('class' => 'button icon search', 'id' => 'search'))?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $id => $row): ?>
            <tr data-select="false" id="row_<?php echo $id ?>" data-id="<?php echo $id ?>">
                <?php foreach($row as $item): ?>
                    <td><?php echo $item ?></td>
                <?php endforeach; ?>
                <td style="white-space: nowrap;">
                    <?php echo Html::anchor($base_controller.$name.'/edit/'.$id, __(''), array('class' => 'button icon edit')); ?>
                    <?php //echo Html::anchor('javascript: if(confirm("Remove row?")) window.location = "'.$base_controller.$name.'/delete/'.$id .'";', __(''), array('class' => 'button danger icon remove')); ?>
                    <a href="<?php echo 'javascript: if(confirm(\'Remove row?\')) window.location = \'delete/'.$id .'\'' ?>" class="button danger icon remove"></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<div id="errors"><div><?php echo __('Rows not exists'); ?></div></div>
<?php endif; ?>

<div class="tplPagination">
    <?php echo $pagination; ?>
</div>

<div class="tplOptions">
    <select name="crud_options" id="crud_options">
        <option value=""> </option>
        <option value="delete"><?php echo __('Delete selected rows'); ?></option>
        <option value="sort"><?php echo __('Save sort rows'); ?></option>
    </select>
    <button id="crud_exec"><?php echo __('Exec'); ?></button>
</div>

<div class="clr"></div>