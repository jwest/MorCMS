<?php I18n::$view = 'auth'; ?>

<?php if(isset($error)): ?>
    <b>Error</b>
<?php endif; ?>

<form action="#" method="post">
    <div>
        <label for="authUsername"><?php echo __('username') ?></label>
        <input id="authUsername" type="text" name="username" />
    </div>
    <div>
        <label for="authPassword"><?php echo __('password') ?></label>
        <input id="authPassword" type="password" name="password" />
    </div>
    <div>
        <input type="submit" name="submit" value="<?php echo __('signin') ?>" />
    </div>
</form>