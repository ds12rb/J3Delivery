<div class="container login-container">
<div class="col-sm-6">
  <div id="left-infobox ">
      <div class="form login-info">
            <ul class="tab-group">
              <li class="tab active"><a href="#login">Log In</a></li>
              <li class="tab"><a href="#signup">Sign Up</a></li>
            </ul>

            <div class="tab-content">
              <div id="login">
                <?php require("/login-content.php");?>
              </div>
              <div id="signup">
                <?php require("/php/registration/register.php");?>
              </div><!-- signup-content -->
            </div><!-- tab-content -->
      </div> <!-- /form -->
  </div>
</div>

<div class="col-sm-6">
  <div id="right-infobox ">
    <section id="logininfo-section">
      <div class="row login-info">
<h2>Welcome To AIDelivery!</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie, eros eget pharetra blandit, quam est euismod arcu, eu consectetur nibh sapien quis lorem. Fusce sed aliquet libero. Donec tristique vel velit at iaculis. Fusce euismod mi in semper consectetur. Curabitur a eros convallis augue malesuada pharetra et quis leo. Nam justo neque, euismod et ornare eu, convallis quis nulla. Morbi erat diam, malesuada malesuada mi cursus, sodales placerat mauris. Nulla facilisi.

Donec accumsan nibh in orci tempus, at posuere ante sodales. In placerat magna in tortor feugiat tempus. Sed id gravida odio. Duis non finibus nisi, ac semper erat. Aliquam erat volutpat. Pellentesque lobortis sit amet enim sed convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>


      </div>
    </section>
  </div>

</div>




</div>
<script>
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight');
			} else {
		    label.removeClass('highlight');
			}
    } else if (e.type === 'focus') {

      if( $this.val() === '' ) {
    		label.removeClass('highlight');
			}
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  e.preventDefault();

  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');

  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();

  $(target).fadeIn(600);
});

</script>
