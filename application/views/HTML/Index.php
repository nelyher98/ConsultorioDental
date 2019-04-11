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

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
       
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/freelancer.css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/freelancer.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style> .carousel-inner > .item > img { width:100%; height:250px; } </style>
    </head>
    <body>
        
       <!-- Header -->
    <header>
      <div class="container">
           <img src="<?php echo base_url(); ?>assets/img/Logo2.1.png" alt="" id="Logo">
          
          <div id="Carrusel">
            
        <div id="MySlider" class="carousel slide" data-ride="carousel">
              
            <ol class="carousel-indicators">
            <li data-target="#MySlider" data-slide-to="0" class="active"></li>
            <li data-target="#MySlider" data-slide-to="1" ></li>
            <li data-target="#MySlider" data-slide-to="2"></li>
            </ol>
        
        <div class="carousel-inner">
            
            <!--IMAGEN1-->
            <div class="item active">
                <img src="<?php echo base_url(); ?>assets/img/portfolio/QH.jpg" alt="Imagen 1" >
            </div>
            
            <!--IMAGEN2-->
            <div class="item">
                <img src="<?php echo base_url(); ?>assets/img/portfolio/Teuscher.jpg" alt="Imagen 2">
            </div>
            
            <!--IMAGEN2-->
            <div class ="item">
                <img src="<?php echo base_url(); ?>assets/img/portfolio/TwinBlock.jpg" alt="Imagen 3">
            </div> 
            
           </div>
            <a href="#MySlider" class="carousel-control left" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
            <a href="#MySlider" class="carousel-control right" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        </div>
            
    </div>
          
      </div>  
        
        
    </header>
    
    <!--Nav-->
    <aside class="Flex2">
        
        <!--SEARCH NAV-->
        <div class="wrap">
            <div class="search">
            <input type="text" class="searchTerm">
            <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
        <div><a href="<?php echo base_url()?>Controller/Login"><H3 class="Menu"> Login </H3></a></div>
        <div><a href="<?php echo base_url()?>Controller/Ubicacion"><H3 class="Menu"> Ubicación </H3></a></div>
        <div><a href="<?php echo base_url()?>Controller/Contactos"><H3 class="Menu"> Contactos </H3></a></div>
    </aside>    

    <!-- Portfolio Grid Section -->
    <section class="flex-container">
        
            
          <div>
            <a href="<?php echo base_url()?>Controller/OrtopediaMax"><img src="<?php echo base_url(); ?>assets/img/portfolio/Bionator2.png" class="im"></a>
              <div class="sub">
                  <p><font color="white" align="center"> Ortopedia Maxilar</font></p>
              </div>
          </div>
            
          <div>
            <a href="<?php echo base_url()?>Controller/Productos"><img src="<?php echo base_url(); ?>assets/img/portfolio/ArcoMargolis2.png" class="im"></a>
              <div class="sub">
                  <p><font color="white" align="center">Productos</font></p>
              </div>
          </div>
            
          <div>
             <a href="<?php echo base_url()?>Controller/AcercaDe"><img src="<?php echo base_url(); ?>assets/img/portfolio/Espejo3.png" class="im"></a>
              <div class="sub">
                  <p>Acerca de...</p>
              </div>
          </div>
        
    </section>

    <!-- Footer -->
     <footer>
      <div id="foot">
        <small>Copyright &copy; HERMEN 2019</small>
      </div>
    </footer>

        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>
