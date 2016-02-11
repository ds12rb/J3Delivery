<?php require("head.php"); ?>
<?php require("/php/topbar/topbar_logged.php"); ?>
<?php require("/php/topbar/subbar.php"); ?>
<body>
  <?php require("profile-content.php"); ?>
  <script>
  $(function() {
    $("#subbarlink-viewprofile").addClass("active");
  });
  </script>
</body>
<?php require("php/footer/footer.php"); ?>

</html>
