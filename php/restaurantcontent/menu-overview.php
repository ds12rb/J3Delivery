<?php require("../../head.php"); ?>
      <body>
        <?php require("../../php/topbar/topbar_logged.php"); ?>
        <?php require("../../php/restaurantcontent/restaurantnav.php"); ?>
        <?php require("../../php/customercontent/menu-overview-content.php"); ?>
        <script>
        $(function() {
          $("#restaurantnavlink-menu").addClass("active");
          $('[data-toggle="tooltip"]').tooltip();

        });
        </script>
      </body>
      <footer>
        <?php require("../../php/footer/footer.php"); ?>
      </footer>
</html>
