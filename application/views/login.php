<?php include('loginheader.php'); ?>

  <div>

<center><h2>Login</h2>
<div><?php echo $this->session->flashdata('msg');?></div>
</center>

<form action="<?php echo site_url('login/auth');?>"  method="post">

  <div class="container ">
    <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>
</div>
</div>
  <div class="container" >
  <div class="form-group" >
  <div class="col-md-6 col-md-offset-3" style="background-color:#f1f1f1">
   <div class="#"><?= anchor('welcome/customers_signup', "Sign up", array('class'=>'btn-lg btn-success'));?></div>
  </div>
</div>
</div>
</form>

</div>

<?php include('footer.php');?>
