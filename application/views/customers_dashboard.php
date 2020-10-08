<?php include('header.php')?>
<style>
body{
  margin-top:-100px;
}
.text-light{
  color:white;
}
.float-right{
  float:right;
  margin-right:10px;
}
.border{
  padding:10px;
  border:1px solid green;
}
.name{
  font-weight: 400;
  font-size: 20px;
color: #444;
margin-bottom: 10px;
}
.price{
    font-weight: 400;
    color: #555;
    margin-top: -36px;
}
</style>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Our Specials</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Lorem ipsum dolor</h3>
          <img src="img/specials/1.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Consectetur adipiscing</h3>
          <img src="img/specials/2.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Duis sed dapibus</h3>
          <img src="img/specials/3.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Features Section -->
<div id="features" class="restaurant-menu" class="text-center">

  <div class="container">
  <div class="section-title text-center">
      <h2>Recently Order</h2>
    </div>
    <div class="row">
      <div  class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Veg Order</h2>
          <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Moblie:</b> ".$row->dish_description."</div>";
            echo "<div class='menu-item-description'> <b>Address:</b> ".$row->dish_description."</div>";
            echo "</div><br><br>";
            }
           }
             ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Non Veg Order</h2>
          <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Mobile:</b> ".$row->dish_description."</div>";
            echo "<div class='menu-item-description'> <b>Address:</b> ".$row->dish_description."</div>";
            echo "</div><br><br>";
            }
           }
             ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="container">
    <div class="section-title text-center">
      <h2>Menu</h2>
      <div class="btn btn-primary" style="color:white; width:200px; height:50px; font-size:20px;"><?=  anchor('restaurant/add_new_iteam',"Add Iteam",array('class' =>'text-light') );?></div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Veg.</h2>
          <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-dracula-dentures-still003-1529424138.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
           }
             ?>


        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Non Veg</h2>
          <div class="menu-item">
            <div class="menu-item-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb_DyLrgdoLj3lxmgDFC29GO79uF6dSQW91lSZ6UEEOgzXLMJ-"></div>
              <div class="menu-item-name">Roast Stuffed Chicken</div>
            <div class="menu-item-price"> Rs 180 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <?php
            foreach($data as $row)
            {
            if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://img.etimg.com/thumb/msid-74572648,width-640,resizemode-4,imgsize-246114/people-say-no-to-non-veg.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
            }
             ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Drinks</h2>
          <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "drinks")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://images.theconversation.com/files/194291/original/file-20171113-27595-ox08qm.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
           }
             ?>

        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Desserts</h2>
          <?php
            foreach($data as $row)
            {
             if($row->dish_food_type == "desserts")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://images7.alphacoders.com/421/421534.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div>";
            echo "</div>";
            }
           }
             ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Reservations</h3>
      <div class="contact-item">
        <p>Please call</p>
        <p>+919915511759</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p>DLF Cyber City,</p>
        <p>GURGAON, INDIA 122001</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Thurs: 09:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 09:00 AM - 02:00 AM</p>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>