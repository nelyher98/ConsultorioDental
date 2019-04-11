<!doctype html>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!--ICON-->
        
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/Logo2.1_1.ico">
        <title>HERMEN: Laboratorio Dental</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
       
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/freelancer.css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/freelancer.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Login.css">
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/Cancelar.js"></script>
        
    </head>
    <body>
        
        <form action="<?php echo base_url(); ?>Controller/Citas" method = "POST" name=form>   
                <div class="container">
                    <div class="imgcontainer">
                        <img src="<?php echo base_url(); ?>assets/img/Logo2.1.png"  class="avatar">
                    </div>
                        <input type="text" placeholder="User" name="uname" required>
                        <input type="password" placeholder="Password" name="psw" required>
                    
                    <div class="buttons">
                        
                        <button type="submit" onclick=go()>Aceptar</button>
                        <button type="button" onclick="window.location='<?php echo base_url()?>Controller/index';return false;" class="cancelbtn">Cancelar</button>
                    </div>  
                </div>  
        </form>

        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>
