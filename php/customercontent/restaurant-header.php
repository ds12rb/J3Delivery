<?php
$pageTitle="J3 Foods - Online Food Ordering";
require("../../head.php"); //TODO: everytime we include head.php we have to set a pageTitle
?>
<body>


            <section id="restaurant-header">
            <div id="restaurant-hdrcontainer" class="container">
            <div class="row">
                        <div id="rhdr-left" class="col-sm-3">



                        </div>
                        <div id="rhdr-center" class="col-sm-6 text-center">
                        <h1>Average Rating</h1>
            <span class="glyphicon glyphicon-star-empty"></span>
            <span class="glyphicon glyphicon-star"></span>
                        </div>
                        <div id="rhdr-right" class="col-sm-3">



                          <span class="glyphicon glyphicon-shopping-cart"></span><?php //TODO: add a popover to explain what the button does clicking activates a popoutmenu  ?>



                        </div>
            </div>
            </div>
            </section>



</body>
<?php require("../../php/footer/footer.php"); ?>
</html>
