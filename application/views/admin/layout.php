<?php defined('SYSPATH') or die('No direct script access.');

I18n::$view = 'layout'; 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo __($title) ?> - wunderCMS - Admin Panel</title>

	<?php echo Html::style('media/css/reset.css')?>
	<?php echo Html::style('media/css/buttons.css')?>
	<?php echo Html::style('media/css/style.css')?>
	<?php echo Html::style('media/css/tpl-std.css')?>
	<?php echo Html::style('media/css/jquery.jgrowl.css')?>
	<?php echo Html::style('media/css/aristo/jquery-ui-1.8.7.custom.css')?>

	<script type="text/javascript">
		var URL = "<?php echo URL::base(); ?>";
		var CONTROLLER = "<?php echo $controller; ?>";
    </script>
	
	<?php echo Html::script('media/js/jquery-1.5.2.min.js')?>
	<?php echo Html::script('media/js/core.js')?>
	<?php echo Html::script('media/js/jquery.jgrowl_minimized.js')?>
	<?php echo Html::script('media/js/jquery-ui-1.8.13.custom.min.js')?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			<?php //foreach(MorCMS_Notify::get() as $time => $message): ?>
                //$.jGrowl('<?php //echo $message['content']; ?>', { header: '<?php //echo $message['header']; ?>', life: <?php //echo ($time + Wunder_Notify::$timer - time())*1000; ?> });
			<?php //endforeach; ?>
		});		
	</script>
	
  </head>
  <body>

    <div id="top">

      <ul>
        <?php foreach($menu as $name => $url): ?>
            <li><?php echo Html::anchor($url, __($name)) ?></li>
		<?php endforeach; ?>
      </ul>

	  <h1>mor<span>CMS</span></h1>
		
    </div>

    <div id="middle">

      <div id="content">

			<?php echo $content ?>

      </div>

    </div>

    <div id="bottom">
        <div class="diary">diary</div>
        <span><?php echo __('Hello')?> <b><?php echo $username ?></b></span>, 
        <?php echo HTML::anchor('admin/auth/signout', __('logout')) ?>
    </div>

  </body>
</html>