<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <title>Login YourBook</title>
       <link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">
       <link href="<?php echo base_url('assets/css/signUp.css')?>" rel="stylesheet">
   </head>
   <body>
       <div class="container-fluid text-center  ">
           <div class="row">
               <div class="col-md-8">
                    <img src="<?php echo base_url('assets/img/amico.svg')?>" id="image2" style=" width: 52%;" alt="Login YourBook">
                    <h2>To keep connected with us please login with your personal info!</h2>
                </div>
                <div class="col-md-4" style="align-items: center;">
                    <form action="Login/aksi_login" method="post">
                        <h1>Login</h1>
                        <?php 
                            if($this->session->flashdata('info') !='')
                            {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $this->session->flashdata('info');
                                echo '</div>';
                            }
                        ?>
                        <div class="form-group">
                            <input type="text" name = "username" class="form-control" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="psw" placeholder="Password" required>
                            <a href="#" class="text-muted">Lupa password?</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" style="color: white; height : 38px">Login</a>
                            <p class="text-secondary" style="margin-top:10px">Belum punya akun? <a href="<?php echo base_url('Regis') ?>">Daftar</a></p> 
                        </div> 
                    </form>
                </div>
            </div>
        </div>
   </body>
</html>