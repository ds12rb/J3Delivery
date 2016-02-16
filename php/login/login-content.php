<?php

$welcomeheading=null;
$debuggingloginlink=null;

if($user=="customer"){
  $welcomeheading="Customer Login";
  $debuggingloginlink="../../php/customercontent/customeroverview.php";
}
if($user=="restaurant"){
  $welcomeheading="Restaurant Login";
  $debuggingloginlink="../../php/restaurantcontent/restaurantoverview.php";
}
if($user=="default"){ //TODO: double check that this is a valid case
  $welcomeheading="";

}
?>

<section id="login-section">
  <div class="container text-center" id="login-container" >
    <div class="row row-centered">
      <div class="col-md-5 panel panel-default col-centered " id="login-panel">
        <div class="panel-header text-center">  <h1><?php echo$welcomeheading;?></h1></div>
        <div class="panel-body">
          <form action="/" method="post" role="form">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                </div>
                <div id="forgotpass"><a href='#'>Forgot Password?</a> </div>
                <div id="loginsign-up">New to J3Foods?<a href='#'>Sign up</a>
                <?php
                if($user=="customer"){
                  $guestbutton="<button class='btn btn-sm btn-default ' /> Enter as a Guest</button>";
                echo $guestbutton;
                }
                ?>

                </div>


        </div>
          <div class="sign-up ">
          </div>
      <a    <?php
            if (isset($debuggingloginlink)) {
            echo "href='".$debuggingloginlink."'";
            }
            //adding an attribute
            ?> >
        <button class="login-btn btn btn-lg btn-primary  center-block btn-block" />Log In</button> <!-- //:TODO a href is  only here for debugging until login starts working using php to redirect when pressing the login button to help debuggin -->
      </a>

              </form>
      </div>
  </div>
  </div><!-- container --->
</div>
</div>
</section>
