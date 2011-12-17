<?php echo Html::script('media/js/wymeditor/jquery.wymeditor.min.js') ?>

<script type="text/javascript">
    $(document).ready(function() { 
        $('textarea#<?php echo $name ?>').wymeditor({
            updateSelector: 'input[type="submit"]'
        }); 
    });    
</script>