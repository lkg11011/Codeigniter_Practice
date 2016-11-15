<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href='<?php echo base_url("/public/css/style.css"); ?>'>

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Welcome Login</h1><span>Design <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Brad Company</a></span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <!--<div class="tooltip">Click Me</div>-->
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <!--<?php echo validation_errors(); ?>-->
    <?php echo form_open('index.php/blog/login') ?>
      <?php echo form_error('username'); ?>
      <input type="text" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>"/>
      <?php echo form_error('password'); ?>
      <input type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
      <!--<input type="submit" name="submit" value="Login" />-->
      <button>Login</button>
    </form>
  </div>
  <!--<div class="form">-->
  <!--  <h2>Create an account</h2>-->
  <!--  <form>-->
  <!--    <input type="text" placeholder="Username"/>-->
  <!--    <input type="password" placeholder="Password"/>-->
  <!--    <input type="email" placeholder="Email Address"/>-->
  <!--    <input type="tel" placeholder="Phone Number"/>-->
  <!--    <button>Register</button>-->
  <!--  </form>-->
  <!--</div>-->
  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>

      <script src='<?php echo base_url("/public/js/index.js"); ?>'></script>

</body>
</html>