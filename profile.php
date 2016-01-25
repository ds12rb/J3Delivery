<?php require("head.php"); ?>
<?php require("/php/topbar/topbar_logged.php"); ?>
<?php require("/php/topbar/subbar.php"); ?>
<body>
  <?php require("profile-content.php"); ?>
  <?php require("php/footer/footer.php"); ?>
  <script>
  $(function() {
    $("#subbarlink-viewprofile").addClass("active");
  });
  </script>
</body>
</html>
