<div class="container-fluid" id="landingpage-container">
  <div class="row" id="lpgreet">
        <div class="col-sm-6">
              <div id="left-infobox ">
                <h2> Here For the First Time?</h2>

                <form action="/" method="post"  role="form" >
                  <div class="form-group">
                    <label for="sel1">Who are you:</label>
                  <select class="form-control" id="landing-signupselect">
                    <option>Customer</option>
                    <option>Guest</option>
                    <option>Restaurant Owner</option>
                  </select>
                  </div>
              <button type="button" class="button" id="landingsignup" >Sign Up</button>
                </form>

                <h2> Hungry Again? Welcome Back!</h2>
              <a href="http://localhost/AIDelivery/php/login/login.php"> <button type="button" class="button" id="landinglogin" >Login</button> </a>
              </div>
        </div>
        <div class="col-sm-6">
              <div id="right-infobox ">
              <h2>Welcome To J3 Foods!</h2>
              <h3>What Can We Do?</h3>
              <img src="images/placeholder3.png" alt="..." class="img-thumbnail center-block img-responsive" id="overview-mainimg">
              <ul>
                <li>Make a Reservation</li>
                <li>Create an Order for Pickup</li>
                <li>Create an Order for Delivery</li>
              </ul>
              </div>
       </div>
  </div>

  <div class="row" id="lpinfo">
    <h1>Who Can we help</h1>

    <div class="col-md-4">
      <div class="card card-block">
        <h1 class="card-title text-center">Hungry Person</h1>
        <img class="img-circle img-responsive center-block" src="images/placeholder2.png"  alt="...">
        <p class="card-text">Are you  hungry but don't want to leave the house? Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
        <a href="http://localhost/AIDelivery/createorder.php" class="btn btn-primary btn-block">Get Started</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-block">
        <h1 class="card-title text-center">Restaurant Owner</h1>
        <img class="img-circle img-responsive center-block" src="images/placeholder2.png"  alt="...">
        <p class="card-text">Are you a local restaurant owner interested in reaching more customers mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
        <a href="http://localhost/AIDelivery/viewgroups.php" class="btn btn-primary  btn-block">Get Started</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-block">
        <h1 class="card-title text-center">Guest</h1>
        <img class="img-circle img-responsive center-block" src="images/placeholder2.png"  alt="...">
        <p class="card-text">Too hungry to provide all that information kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
        <a href="http://localhost/AIDelivery/viewgroups.php" class="btn btn-primary  btn-block">Get Started</a>
      </div>
    </div>
  </div>


</div>



<script>
$(function() {
  $("#landingsubbarlink-home").addClass("active");

});
</script>
