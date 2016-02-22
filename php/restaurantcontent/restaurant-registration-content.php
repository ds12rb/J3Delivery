<section id="registration-section">


<div class="container-fluid text-center" id="restaurant-registration-container">
    <div class="row " id='restaurant-registration-block'>
          <div class="col-md-5 panel panel-default col-centered " id="login-panel">
            <div class="panel-header text-center">  <h1>Restaurant Sign Up</h1></div>



            <div class="panel-body">
            <form id="restaurant-signup-form" action="" accept-charset="utf-8" method="POST" role="form" >

                <div class="input-row row">
                    <div class="col-sm-6">
                        <input type="text" name="firstname" id="firstname" class="input-fieldformat form-control"  placeholder="Your first name" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="lastname" id="lastname" class="input-fieldformat form-control"  placeholder="Your last name"/>
                    </div>
                </div>

                <div class="input-row row" >
                    <div class="col-sm-6">
                        <input type="text" name="phoneno" id="phoneno" class="input-fieldformat form-control"  placeholder="Phone Number"/>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="email" id="email" class="input-fieldformat form-control"  placeholder="Email Address"/>
                    </div>
                </div>

                    <div id="initial-addressop" class="input-row">

                        <div class="btn btn-default" data-toggle="collapse" data-target="#inaddressinfo">Do You Want to Provide an Initial Address?</div>

                        <div id="inaddressinfo" class="collapse input-row">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" name="streetaddress" id="streetaddress"  class="input-fieldformat form-control" placeholder="Street Address"/>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="province" id="province" class="input-fieldformat form-control" placeholder="State/Province"/>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="country" id="country"  class="input-fieldformat form-control" placeholder="Country"/>
                                </div>
                            </div>

                            <div class="input-row row">
                                <div class="col-sm-4">
                                    <input type="text" name="city" id="city"  class="input-fieldformat form-control" placeholder="City"/>
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="zipcode" id="zipcode"  class="input-fieldformat form-control" placeholder="Postal/ZipCode"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- panel body container -->









                <div class="input-row" id="register-idinfo">
                    <h3>Identification Details</h3>
                    <input type="text" name="firstname" id="firstname" placeholder="Your first name" />
                    <input type="text" name="lastname" id="lastname" placeholder="Your last name"/>
                    <input type="text" name="dateofbirth" id="dateofbirth" placeholder="Date of Birth" />
                    <input type="text" name="position" id="position" placeholder="Position"/>
                    <input type="text" name="company" id="company" placeholder="Company"/>
                                <div class="address">
                                    <input type="text" name="streetaddress" id="streetaddress" placeholder="Street Address"/>
                                    <input type="text" name="city" id="city" placeholder="City"/>
                                    <input type="text" name="province" id="province" placeholder="State/Province"/>
                                    <input type="text" name="zipcode" id="zipcode" placeholder="Postal/ZipCode"/>
                                    <input type="text" name="country" id="country" placeholder="Company"/>
                                       </div>
                </div>

                                            <div class="input-row"  id="register-operationalpref">
                                              <h3>Operational Preferences</h3>
                                              <input type="text" name="location" id="location" placeholder="Enter Location"/>
                                              <input type="text" name="preparationtimes" id="preparationtimes" placeholder="Enter Estimated Product Preparation Times"/>
                                                <input type="text" name="deliverytime" id="deliverytime" placeholder="Enter Delivery Time"/>
                                                   </div>

                                                   <div class="input-row" id="register-contactinfo">
                                                     <h3>Contact Information</h3>
                                                       <input type="text" name="phoneno" id="phoneno" placeholder="Phone Number"/>
                                                       <input type="text" name="email" id="email" placeholder="Email Address"/>
                                                          </div>























                <div class="panel-footer ">
                <p class="disclaimer">By clicking Register, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Data Use Policy</a>, including our <a href="#">Cookie Use</a>.</p>
                <div class="text-right">
                    <input type="submit" class="button button-block " name="register" id="register" value="Register">
                </div>
            </div>
            </form>

</div>
</div> <!-- main row -->
</div>
</section>
