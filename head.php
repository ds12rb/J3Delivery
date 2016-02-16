<?php
$root = "/J3Foods";

?>
<!DOCTYPE html>
<html lang="en">
      <head>
              <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
              <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'/>
              <meta http-equiv='x-ua-compatible' content='ie=edge'/>
<!--Title
Define the title for each page by creating a pageTitle variable before each inclusion of head.php
that value is echoed here
-->
              <title>
                <?php
                echo $pageTitle;
                ?>
              </title>
<!-- CSS -->
              <link rel='stylesheet' type='text/css' href='<?php echo $root; ?>/css/reset.css' />
              <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'/>
          <link rel="stylesheet" href="<?php echo $root; ?>/css/style.css"/>
              <link rel='stylesheet' type='text/css' href='<?php echo $root; ?>/css/bootstrap.min.css' />
<!-- javascript -->
            <script src='<?php echo $root; ?>/js/jquery-1.12.0.min.js' type='text/javascript'></script>
            <script src='<?php echo $root; ?>/js/bootstrap.min.js' type='text/javascript'></script>
            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      </head>
