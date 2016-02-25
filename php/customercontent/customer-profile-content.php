<section id="profile-section">
  <div class="container text-center" id="profile-container" >
    <div class="row row-centered">
      <div class="col-sm-5 panel panel-default col-centered " id="profile-panel">
        <div class="panel-header center-block">
      <?php    require("../../php/customercontent/customer-profile-contentbar.php"); ?>
        </div>


  <div class="panel-body">
<!-- decide what content is loaded based on where the user clicks, probably needs javascript -->
<?php
$selectedcontent=null;
if (isset($selectedcontent)) {
    if(1==0){$selectedcontent="../../php/customercontent/customer-profile-editprofileform.php";}
    elseif(1==0){$selectedcontent="../../php/customercontent/customer-profile-editaddressform.php";}
    elseif(1==0){$selectedcontent="../../php/customercontent/customer-profile-orders.php";}
}
else{
$selectedcontent="../../php/customercontent/customer-profile-editprofileform.php";
}

require($selectedcontent);

?>



      </div>
  </div>
  </div><!-- container --->
</div>
</div>
</section>
