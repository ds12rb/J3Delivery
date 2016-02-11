<?php require("../../head.php"); ?>
      <body>
        <?php require("../../php/customercontent/customertopbar.php"); ?>
        <?php require("../../php/customercontent/customersubbar.php"); ?>

<section id="customeroverview-section">
  <div class="customeroverview-container container-fluid" >

      <div class="row " id="customeroverview-content">
      <div class="col-md-6"  ">
        <h1>Your Favorite Venues <span class="glyphicon glyphicon-cutlery"></span></h1>
        <div id="favoritevenue-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#favoritevenue-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#favoritevenue-carousel" data-slide-to="1"></li>
            <li data-target="#favoritevenue-carousel" data-slide-to="2"></li>
            <li data-target="#favoritevenue-carousel" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="../../images/placeholder.jpg" alt="Venue1">
              <div class="carousel-caption">
                <h3>Venue1</h3>
                <p>Your First Favorite Venue</p>
              </div>
            </div>

            <div class="item">
              <img src="../../images/placeholder.jpg" alt="Venue2">
              <div class="carousel-caption">
                <h3>Venue2</h3>
                <p>Your Second Favorite Venue</p>
              </div>
            </div>

            <div class="item">
              <img src="../../images/placeholder.jpg" alt="Venue3">
              <div class="carousel-caption">
                <h3>Venue3</h3>
                <p>Your Third Favorite Venue.</p>
              </div>
            </div>

            <div class="item">
              <img src="../../images/placeholder.jpg" alt="Venue4">
              <div class="carousel-caption">
                <h3>Venue4</h3>
                <p>Your Fourth Favorite Venue</p>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#favoritevenue-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#favoritevenue-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-md-6"   ">
          <h1>Your Favorite Meals <span class="glyphicon glyphicon-apple"></span></h1>
        <div class="list-group">
<li class="list-group-item">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object " src="images/placeholderuser.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Pizza</h4>
                <ul class="list-group">
                  <li class="list-group-item">Restaurant: Mario's Pizza's</li>
                  <li class="list-group-item">Price: $300.00</li>
                  <li class="list-group-item">Meal Specific Options: Pizza Sauce</li>
                </ul>
              </div>
            </div>
</li>

<li class="list-group-item">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="images/placeholderuser.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Burgers</h4>
                <ul class="list-group">
                  <li class="list-group-item">Restaurant: Bob's Burgers's</li>
                  <li class="list-group-item">Price: $300.00</li>
                  <li class="list-group-item">Meal Specific Options: Burger Sauce</li>
                </ul>
              </div>
            </div>
</li>


<li class="list-group-item">
            <div class="media">
              <div class="media-left ">
                <a href="#">
                  <img class="media-object" src="images/placeholderuser.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Doughnuts</h4>
                <ul class="list-group">
                  <li class="list-group-item">Restaurant: Jimmy's Doughnuts's</li>
                  <li class="list-group-item">Price: $300.00</li>
                  <li class="list-group-item">Meal Specific Options: Doughnut Sauce</li>
                </ul>


              </div>
            </div>
</li>

<li class="list-group-item">
            <div class="media">
              <div class="media-left ">
                <a href="#">
                  <img class="media-object" src="images/placeholderuser.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Garlic Breadsticks</h4>
                <ul class="list-group">
                  <li class="list-group-item">Restaurant: Gary's Breadstick's</li>
                  <li class="list-group-item">Price: $431.00</li>
                  <li class="list-group-item">Meal Specific Options: Breadstick Sauce</li>
                </ul>

              </div>
            </div>
</li>

<li class="list-group-item">
            <div class="media">
              <div class="media-left ">
                <a href="#">
                  <img class="media-object" src="images/placeholderuser.png" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Chicken Wings</h4>

                <ul class="list-group">
                  <li class="list-group-item">Restaurant: Bob's Chicken Wing's</li>
                  <li class="list-group-item">Price: $30.00</li>
                  <li class="list-group-item">Meal Specific Options: BBQ Dipping Sauce</li>
                </ul>



              </div>
            </div>
</li>
        </div>
      </div>
            </div>

<div class="row" id="customeroverview-links">
  <div class="col-md-6">
    <div class="card card-block text-center">
      <h1 class="card-title">Make an Order</h1>
      <a href="http://localhost/AIDelivery/createorder.php" class="btn btn-primary btn-lg ">Create</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-block text-center">
      <h1 class="card-title">View Restaurants</h1>
      <a href="http://localhost/AIDelivery/viewgroups.php" class="btn btn-primary   btn-lg">View</a>
    </div>
  </div>
</div>
</div>
</section>



<script>
$(function() {
  $("#subbarlink-home").addClass("active");

});
</script>
      </body>
      <footer>
        <?php require("../../php/footer/footer.php"); ?>
      </footer>
</html>
