<?php require("../../head.php"); ?>
      <body>
        <?php require("../../php/topbar/topbar_logged.php"); ?>
        <?php require("../../php/restaurantcontent/restaurantnav.php"); ?>
        <?php require("../../php/restaurantcontent/history-content.php"); ?>

<?php require("../../php/footer/footer.php"); ?>
<script>
$(function() {
  $("#restaurantnavlink-history").addClass("active");
  $('[data-toggle="tooltip"]').tooltip();
  $('table.highchart').highchartTable();








});
</script>
      </body>
</html>
