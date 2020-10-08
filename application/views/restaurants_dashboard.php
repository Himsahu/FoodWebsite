<?php include('restaurants_header.php')?>
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
    font-weight: 200;
    color: #555;
    margin-top: 10px;
}
</style>
<center>  <div style="color:green; font-size:30px;"><?php echo $this->session->flashdata('msg');?></div><center>

<!-- Features Section -->
<div id="features" class="restaurant-menu" class="text-center">

  <div class="container">
  <div class="section-title text-center">
      <h2>Recently Got Order</h2>
    </div>
    <div class="row">
      <div  class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Veg Order</h2>
          <?php
            foreach($data1 as $row)
            {
             if($row->dish_food_type == "veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Quantity:</b> ".$row->quantity."</div>";
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
            foreach($data1 as $row)
            {
             if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item border'>";
            echo "<div class='btn btn-success float-right'><a class='text-light' href='#'>Accept</a></div>";
            echo "<div class='name'> ".$row->dish_name."</div><br>";
            echo "<div class='price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'> <b>Quantity:</b> ".$row->quantity."</div>";
            echo "<div class='menu-item-description'> <b>Address:</b>  XXXXXXX </div>";
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
      <h2>Your Restaurant Menu</h2>
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
            <div class="menu-item-img"><img src="https://img.etimg.com/thumb/msid-74572648,width-640,resizemode-4,imgsize-246114/people-say-no-to-non-veg.jpg"></div>
              <div class="menu-item-name">Roast Stuffed Chicken</div><br>
            <div class="menu-item-price"> Rs 180 </div>
            <div class="menu-item-description">The mackerel most esteemed as food is the common species, and individuals from 10 to 12 in. </div>
          </div>
          <?php
            foreach($data as $row)
            {
            if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."</div><br>";
            echo "<div class='menu-item-price'><br>RS.".$row->dish_price."</div>";
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
            echo "<div class='menu-item-img'><img src='http://images.bigoven.com/image/upload/t_recipe-256/dirt-pie.jpg'></div>";
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
