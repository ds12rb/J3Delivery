<?php require("../../head.php"); ?>
      <body>
        <?php require("../../php/topbar/topbar_logged.php"); ?>
        <?php require("../../php/restaurantcontent/restaurantnav.php"); ?>
        <?php require("../../php/restaurantcontent/restaurantoverview-content.php"); ?>
        <?php require("../../php/restaurantcontent/orderdropdown.php"); ?>

<?php require("../../php/footer/footer.php"); ?>
<script>
$(function() {
  $("#restaurantnavlink-orders").addClass("active");
  $('[data-toggle="tooltip"]').tooltip();

});
</script>
      </body>
</html>
