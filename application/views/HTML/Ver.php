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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Productos.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Citas.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/Ver.css">
        
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
    </head>
    <body>
       <!-- Header -->
    <header>
        
        <div class="container">
           <img src="<?php echo base_url(); ?>assets/img/Logo2.1.png" alt="" id="Logo1">
        <div class="Title">
        <H2>Citas</H2>
        </div>
        </div>
        
    </header>
    
   <aside class="Flex3">
        
       <a href="<?php echo base_url(); ?>Controller/Citas"><H3 class="sub3">Citas</H3></a>
       <a href="<?php echo base_url(); ?>Controller/Ver"><H3 class="sub3">Ver</H3></a>
       <a href="<?php echo base_url(); ?>Controller/index"><H3 class="sub3">Salir</H3></a>
        
    </aside>    

    <!-- Portfolio Grid Section -->
    <section class="Flex4">
        
       <table>
            <tr>
                <th>idPaciente</th>  
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
            </tr>
            <?php
            foreach ($Pacientes as $p){ ?>
             <tr>
                <td><?php echo $p->idPac ?></td>
                <td><?php echo $p->nombre ?></td>
                <td><?php echo $p->apellidos ?></td>
                <td><?php echo $p->telefono?></td>
            </tr>
        
        <?php } ?>
        </table>
   
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

