<?php
$pageTitle= "Login";
require("../../head.php"); ?>


<body>
<?php require("../../php/topbar/topbar.php"); ?>
<?php require("../../php/topbar/landingpage_subbar.php"); ?>
<?php
$user=null;
if (isset($_GET["user"])) {
    if ($_GET["user"] == "customer") {
        $user="customer";
    } elseif ($_GET["user"] == "restaurant") {
        $user= "restaurant";
    }
}
else{
    $user= "default"; //no login value specified
}
require("login-content.php"); ?>

<script>$(function() {
  $("#landingsubbarlink-login").addClass("active");
});</script>
</body>
<?php require("../../php/footer/footer.php"); ?>
</html>
