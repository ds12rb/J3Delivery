<?php require("head.php"); ?>
<?php require("/php/topbar/topbar_logged.php"); ?>
<?php require("/php/topbar/subbar.php"); ?>

<section id="viewgroups-section">

<div id="viewgroups" class="container well well-lg">
  <div class="row ">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">
        <h1>Available Delivery Groups
        <span class="badge">4</span></h1>
       </div>
      <div class="panel-body">
        <h3>Select one of the available delivery groups below</h3>
      </div>

      <!-- List group -->
      <div class="list-group">
        <a href="#" class="list-group-item " data-toggle="modal" data-target="#largeModal">
          <h4 class="list-group-item-heading">Group Id 112</h4>
          <p class="list-group-item-text">Dayview Street, St.Martin's Avenue, Harbour Lane</p>
        </a>
        <a href="#" class="list-group-item " data-toggle="modal" data-target="#largeModal">
          <h4 class="list-group-item-heading">Group Id 432</h4>
          <p class="list-group-item-text">Dayview Street, St.Martin's Avenue, Harbour Lane</p>
        </a>
        <a href="#" class="list-group-item " data-toggle="modal" data-target="#largeModal">
          <h4 class="list-group-item-heading">Group Id 112</h4>
          <p class="list-group-item-text">Dayview Street, St.Martin's Avenue, Harbour Lane</p>
        </a>
        <a href="#" class="list-group-item " data-toggle="modal" data-target="#largeModal">
          <h4 class="list-group-item-heading">Group Id 12</h4>
          <p class="list-group-item-text">Dayview Street, St.Martin's Avenue, Harbour Lane</p>
        </a>

      </div>

    </div>



  </div>
</div>




<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Group ID:</h4>
      </div>
      <div class="modal-body">
        <h3>Addresses: Turner Lane, Malcolm Drive, Baseball Avenue</h3>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="gmaproute">View Route</button>
        <button type="button" class="btn btn-secondary">Print Order</button>
        <button type="button" class="btn btn-secondary">Print Directions</button>
        <button type="button" class="btn btn-primary">Select This Group</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



</section>

<?php require("php/footer/footer.php"); ?>
 <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>$(function() {
$latitude=32;
$longitude=23;


  $("#subbarlink-viewgroups").addClass("active");





  $("#gmaproute").on("click",function() {
    $(".modal-content").html(" <div id='googleMap' style='width:900px;height:380px;'></div> <button type='button' id='gmapback' style='float:left;' class='btn btn-primary'>Back</button>");
        var mapProp = {
          center:new google.maps.LatLng($latitude,$longitude),
          zoom:8,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        $("#gmapback").on("click",function() {
              $("#largeModal").remove();
              $(".modal-content").html(" <div id='googleMap'></div>");
        });
  });







});</script>

</body>
</html>
