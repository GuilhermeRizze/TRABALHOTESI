<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Produtos- Padaria</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url();?>public/css/animate.min.css">

		<link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/responsive.css">
		<!-- Js -->
    <script src="<?php echo base_url();?>public/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>public/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>public/js/jquery.nav.js"></script>
    <script src="<?php echo base_url();?>public/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins.js"></script>
    <script src="<?php echo base_url();?>public/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>public/js/main.js"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="<?php echo base_url();?>public/images/header.png" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>


                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <a href="<?php echo base_url();?>produto/consulta" class="btn btn-primary">Home</a>
                                <a href="#price" class="btn btn-primary">Menu</a>
                                <a href="<?php echo base_url();?>tipo/pesquisa" class="btn btn-primary">Categorias</a>

                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
   
    

    <?php echo $contents; ?>



    
    
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>TRABALHO TESI</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>