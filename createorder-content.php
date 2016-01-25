<section id="order-section">
  <div class="createorder-container">
  <h1>Create an Order</h1>
  <form action="/" method="post">
  <div class="row ">
    <div class="col-sm-6">
      <h1> Customer Details</h1>
        <div class="input-row">
            <input type="text" name="firstname" id="firstname" placeholder="Customer First Name"/>
            <input type="text" name="lastname" id="lastname" placeholder="Customer Last Name"/>
            <input type="text" name="phoneno" id="phoneno" placeholder="Customer Phone Number"/>
            <input type="text" name="location" id="location" placeholder="Enter Customer Location"/>
          </div>
    </div>

    <div class="col-sm-6">
      <h1> Order Details</h1>
      <div class="input-row">
            <input type="text" name="producttype" id="producttype" placeholder="Enter the Type of Product"/>
            <input type="text" name="productno" id="productno" placeholder="Enter the Number of Products"/>
            <input type="text" name="productsize" id="productsize" placeholder="Enter the Size of the Products"/>
            <input type="text" name="ordertime" id="ordertime" placeholder="Enter the time of Order Placement"/>
            <input type="text" name="preptime" id="preptime" placeholder="Enter Estimated Prep Time"/>
          </div>
    </div>
<button class="button button-block"/>Create</button>
</div> <!-- container --->
</form>
</div>
</section>
