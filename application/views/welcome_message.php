<?php include('header.php')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Features Section -->
<style>
.text-light{
  color:white;
}
.menu-item-price{
  margin-left:-200px;
}
</style>
<div class="container"><br/>
    <h2>Menu Foods</h2>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <h4>Food</h4>
            <div class="row">
            <?php foreach ($data as $row) : ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                          <img width="200" src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">

                            <h4><?php echo $row->dish_name;?></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo number_format($row->dish_price);?></h4>
                                    <div class="col-md-5 col-md-offset-3">
                                      <?php if($row->dish_food_type == "non_veg"){?>
                                        <p style="width:10px; height:10px; background-color:red;"></p>
                                      <?php }else{?>
                                        <p style="width:10px; height:10px; background-color:green;"></p>
                                      <?php }?>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->id;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <?php if($this->session->userdata('user_role') == '2'):?>
                            <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $row->id;?>" data-productname="<?php echo $row->dish_name;?>" data-productprice="<?php echo $row->dish_price;?>">ORDER</button>
                          <?php else: ?>
                            <?=  anchor('welcome/loginlink',"ORDER",array('class' =>'add_cart btn btn-success btn-block') );?>
                          <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

            </div>

        </div>
        <div class="col-md-4">
            <h4>Your Order List</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">

                </tbody>

            </table>
        </div>
    </div>
</div>
<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Top Rating Restaurants</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Dominoz</h3>

          <img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-responsive" alt="">
          <p>GURGAON</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Pizza Hut</h3>
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-responsive" alt="">
          <p>New Delhi</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Food Mania</h3>
          <img src="https://www.posist.com/restaurant-times/wp-content/uploads/2016/07/restaurant-449952_1280-800x533.jpg" class="img-responsive" alt="">
          <p>Noida</p
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
            echo "<div class='menu-item-name'> ".$row->dish_name."<br><hr><br></div>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
            echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
            echo "</div>";
            }
           }
             ?>


        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Non Veg</h2>

          <?php
            foreach($data as $row)
            {
            if($row->dish_food_type == "non_veg")
            {
            echo "<div class='menu-item'>";
            echo "<div class='menu-item-img'><img src='https://img.etimg.com/thumb/msid-74572648,width-640,resizemode-4,imgsize-246114/people-say-no-to-non-veg.jpg'></div>";
            echo "<div class='menu-item-name'> ".$row->dish_name."<br><hr><br></div>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
             if($this->session->userdata('user_role') == "2"){
              echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
             }
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
            echo "<div class='menu-item-name'> ".$row->dish_name."<br><hr><br></div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
            echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
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
            echo "<div class='menu-item-name'> ".$row->dish_name."<br><hr><br></div><br>";
            echo "<div class='menu-item-price'>RS.".$row->dish_price."</div>";
            echo "<div class='menu-item-description'>".$row->dish_description."</div><br>";
            echo "<button class='add_cart btn btn-success' data-productid=".$row->id." data-productname=".$row->dish_name." data-productprice=".$row->dish_price.">ORDER</button>";
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
