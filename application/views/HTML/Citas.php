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
        
        <form action="INSERT" method = "POST">
                    
            <table>
               
            <tr>
                <td>Nombre: </td>
                <td> <input type = "text" name = "name"> </td>
            </tr>
               
             <tr>
                <td>Apellidos: </td>
                <td> <input type = "text" name = "ape"> </td>
             </tr>
                <tr><td>&nbsp;</td></tr>
             <tr>
                 <td colspan="2">Enfermedades que pueden afectar el tratamiento:</td>
                 <td> <input type = "text" name = "enfer"> </td>
             </tr>
                <tr><td>&nbsp;</td></tr>
               
            <tr>
                <td>Presión: </td>
                <td> <input type = "text" name = "Pre"> </td>
            </tr>
               
             <tr>
                <td>Alergias: </td>
                <td> <input type = "text" name = "Ale"> </td>
             </tr>
               <tr><td>&nbsp;</td></tr>
             <tr>
                 <td>Urgencia:</td>
                 <td> <input type = "text" name = "Urg"> </td>
             </tr>
                <tr><td>&nbsp;</td></tr>
            <tr>
                <td>Teléfono de contacto: </td>
                <td> <input type = "text" name = "Tel"> </td>
           </tr>
            
           <tr>
                <td>¿Cómo se enteró del consultorio? </td>
           </tr>
                <tr><td>&nbsp;</td></tr>
           <tr>
              <td colspan="2"><textarea cols="25" name="com"></textarea> </td> 
           </tr>
                <tr><td>&nbsp;</td></tr>
            </table> 
            
            <br>
            <input type="Submit" name="Guardar" value="Guardar" id="btn"> 
         
        </form>
        
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
