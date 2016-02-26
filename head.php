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
              <link rel='stylesheet' type='text/css' href="<?php echo $root; ?>/css/reset.css" />
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/jquery-ui.min.css">
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/jquery-ui.structure.min.css">
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/jquery-ui.theme.min.css">
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/bootstrap.min.css">
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/bootstrap-theme.min.css">
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/font-awesome.min.css">
              <link rel="stylesheet" type='text/css' href="<?php echo $root; ?>/css/style.css"/>
<!-- javascript -->
            <script src="<?php echo $root; ?>/js/jquery-1.12.0.min.js"></script>
            <script src="<?php echo $root; ?>/js/jquery-ui.min.js"></script>
            <script src="<?php echo $root; ?>/js/bootstrap.min.js"></script>
            <script src="<?php echo $root; ?>/js/highcharts.js"></script>
            <script src="<?php echo $root; ?>/js/jqueryhighchartTable-min.js"></script>
            <script src="https://code.highcharts.com"></script>

      </head>
