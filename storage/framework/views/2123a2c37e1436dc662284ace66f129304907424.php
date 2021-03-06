<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incotec</title>



     <?php echo Html::style('css/bootstrap.css'); ?>

      <?php echo Html::style('css/estilo.css'); ?>

      <?php echo Html::style('css/font-awesome.css'); ?>




</head>


<body style="overflow-x: hidden;">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height: 77px; background: rgba(255, 255, 255, 0.65)">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="height: 70px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"> <img src="images/log.png" width="170"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menuR" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="aR" href="http://www.incotec.com.bo/">INCOTEC</a>
                    </li>
                    <li>
                        <a class="aR" href="#">SERVICIOS</a>
                    </li>
                    <li>
                        <a class="aR" href="#">PRODUCTOS</a>
                    </li>
                     <li>
                        <a class="aR" href="#">GESTIÓN DE CONOCIMIENTO</a>
                    </li>
                    <li>
                        <a class="aR" href="http://www.incotec.com.bo/contact/">CONTÁCTANOS</a>
                    </li>
                    <li class="active">
                        <a class="aR" href="http://localhost/incotec/public/">PROVEEDOR</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> <br><br><br><br><br>


    <!-- Page Content -->
    <div class="container-fluid">



       <div class="container well" id="sha">

    <div class="row">
          <div class="col-xs-12">
           <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <img src="images/email.png" class="img-responsive" id="avatar">
          </div>
    </div>
 
      
       
    <?php echo Form::open(['route'=>'mail.store', 'method'=>'POST']); ?>


        <div class="form-group">
           <input type="email" id="emailR" class="form-control" placeholder="Correo electrónico" name="emailR" required autofocus>
        </div>

        <img src="images/cargando.gif" width="175" height="50" id="cargandoR" style="display: none;">
       <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnR" name="btnR">ENVIAR</button> <br> 
       
      <!--  <?php echo Form::submit(); ?>  -->
 
    <?php echo Form::close(); ?>


        <div >
           <p class="help-block">Introduzca el código de verificación.</p>
           <center><img src="" id="image" style="height: 40px;">
  
            <button type="button" class="btn btn-danger" id="btn"><i class="fa fa-refresh" aria-hidden="true"></i> refresh</button>
            </center>
        </div>

        <div>
            <center><input type="text" class="form-control" id="txtcaptcha" style="margin-top: 5px; width: 70%;"></center> 
        </div>

  </div>

<br>





        <!-- Footer -->
        <footer style="position: absolute; width: 98%;">
            
            <div class="content">
                <div class="row" style="background-color: #232222;">

                    <div class="col-lg-4" style="color: white; padding-left: 15px; padding-right: 15px;">
                        <center> <h3>Contáctenos</h3> </center>
                        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 15px;"></i>
                        <strong>Dirección:</strong> 5to. Anillo, esquina radial 27 Santa Cruz de la Sierra-Bolivia
                            <br><br>
                        <i class="fa fa-phone" aria-hidden="true" style="font-size: 15px;"></i>
                        <strong>Teléfono:</strong> (591 3) 342-9522
                            <br><br>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <strong>Email:</strong> <a href="mailto:info@incotec.com.bo" style="text-decoration: none;"> info@incotec.com.bo </a>
                            <br><br>
                    </div>

                    <div class="col-lg-4" style="padding-top: 15px;">
                       <center>     
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.1113989377995!2d-63.17654198567563!3d-17.739389487868515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e7a365d004cd%3A0xc159e139b7585061!2sIncotec+S.A.!5e0!3m2!1ses!2ses!4v1502294144107" frameborder="0" style="border:0; width: auto; height: auto;" allowfullscreen></iframe> 
                        </center>     
                    </div>

                    <div class="col-lg-4">
                        <center> <h3 style="color: white;">Redes Sociales</h3>
                            
                            <a href="https://www.facebook.com/incotec.bolivia" target="_blank" style="text-decoration: none;"> <img src="images/img-facebook.png" width="35" height="35"> </a>

                            <a href="https://twitter.com/IncotecSrl" target="_blank" style="text-decoration: none;"> <img src="images/img-twitter.png" width="35" height="35"> </a>

                            <a href="https://www.linkedin.com/company/incotec-sa" target="_blank" style="text-decoration: none;"> <img src="images/img-linkedin.png" width="35" height="35"> </a>

                            <br><br>
                        </center>
                    </div>

                </div>

                <div class="row" style="background-color: black; color: white; padding-top: 10px;">
                    <center>
                        <p>© Copyright 2017. All Rights Reserved - <a href="http://www.grayhatcorp.com/" target="_blank" style="font-style: italic; text-decoration: none;"> Desarrolladores </a> </p>
                    </center>
                </div>

            </div>

        </footer>

    </div>
    <!-- /.container -->





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <?php echo Html::script('js/myjscargando.js'); ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>



</body>

</html>
