<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gerenciar Padaria</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">

          <a class="navbar-brand brand-logo-mini" href="<?php echo base_url();?>public/index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Bem vindo a Padaria do Barba!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Pesquisar" title="Pesquisar">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url();?>public/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url();?>public/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url();?>public/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
          
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="public/#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> ALTERAR VARIAEL </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">USUARIO</p><!--USUARIO LOGADO - ALTERAR VARIAVEL-->
                  <p class="font-weight-light text-muted mb-0"></p><!--USUARIO LOGADO - ALTERAR VARIAVEL-->
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> Meu Perfil <span class="badge badge-pill badge-danger">1</span></a>

                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sair</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo base_url();?>public/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">USUARIO</p><!--COLOCAR VARIAVEL-->
                  <p class="designation">Administrador</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Painel de Controle</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>public/index.html">
                <span class="menu-title">Painel</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">ESTOQUE</span></li>
           
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>public/pages/icons/simple-line-icons.html">
                <span class="menu-title">PRODUTOS</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>public/pages/forms/basic_elements.html">
                <span class="menu-title">CADASTRO PRODUTOS</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>public/pages/tables/basic-table.html">
                <span class="menu-title">CATEGORIAS PRODUTOS</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">GERENCIAR USUARIOS</span></li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>index.php/login/registro">
                <span class="menu-title">CADASTRO USUARIO</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>public/pages/tables/usuario.html">
                <span class="menu-title">VISUALIZAR USUARIO</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>

            
       
          </ul>
        </nav>

 

        <!-- partial -->
        <div class="main-panel">
         

             <?php echo $contents; ?>


<footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">TRABALHO TESI 2022- Guilherme e Thaynan Thyago</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>