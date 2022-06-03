<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <title>SignUp YourBook</title>
       <link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">
       <link href="<?php echo base_url('assets/css/signUp.css')?>" rel="stylesheet">
   </head>
   <body>
       <div class="container-fluid text-center  ">
           <div class="row">
               <div class="col-md-8">
                    <img src="<?php echo base_url('assets/img/rafiki.svg')?>" id="image2" style="width:62%" alt="Login YourBook">
                    <h2>Enter Your Personal Detail and Start Journey With Us!</h2>
                </div>
                <div class="col-md-4" style="align-items: center;">
                    <form action="<?= site_url('regis/register') ?>" method="post">
                        <h1>Sign Up</h1>
                        <?php if(isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <input type="text" class="form-control" name ="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ="username" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ="address" id="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ="number" id="number" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="psw" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2"id="psw" placeholder="Confirm Password" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="color: white; height : 38px">Sign Up</a> 
                        <p class="text-secondary" style="margin-top:10px">Sudah punya akun? <a href="<?php echo base_url('Login') ?>" >Login</a></p> 
                    </form>
                </div>
            </div>
        </div>
   </body>
</html>