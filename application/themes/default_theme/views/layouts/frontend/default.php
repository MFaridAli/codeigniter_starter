<?php
header("X-XSS-Protection: 1; mode=block");
?>
<!DOCTYPE html>
<html lang="en">
    <?php echo $template['partials']['head']; ?>
<head>
<!-- header -->
<?php echo $template['partials']['header']; ?>
<!-- header -->

<!-- body -->
<?php echo $template['body']; ?>  
<!-- body -->

<!-- footer -->
<?php echo $template['partials']['footer']; ?>
<!-- footer -->
</body>
</html>
