<?php
header("X-XSS-Protection: 1; mode=block");
?>
<!DOCTYPE html>
<html lang="en">
    <?php echo $template['partials']['head']; ?>
<head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- header -->
            <?php echo $template['partials']['header']; ?>
            <!-- header -->

            <!-- header -->
            <?php echo $template['partials']['sidebar']; ?>
            <!-- header -->

            <!-- body -->
            
            <?php echo $template['body']; ?>  
            <!-- body -->

            <!-- footer -->
            <?php echo $template['partials']['footer']; ?>
            <!-- footer -->
        </div>
    </body>
</html>
