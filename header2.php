<!DOCTYPE html>
<html lang="en">
<head>

     <title>Starcraft 2 Troops</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     
     


     <!-- MENU -->
     
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div  class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">
                    	<img style="width: 70px; margin-top: -20px" src="images/logo.png">
                    </a>
               </div>

               <!-- MENU LINKS -->
               <div  class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Início</a></li>
                         <li><a href="#about" class="smoothScroll">Ordens de Contrução</a></li>
                         <li><a href="zerg_table.php" class="smoothScroll">Zerg</a></li>
                         <li><a href="zerg_table.php" class="smoothScroll">Protoss</a></li>
                         <li><a href="zerg_table.php" class="smoothScroll">Terrano</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"> <i></i> </a></li>
                         <?php
                         @session_start();
                         
                         if (@$_SESSION['nome'] ==Null) {
                             ?>
                              <button class='section-btn' type='button' data-toggle='modal' data-target='#loginUsuarioModal'>Entrar</button>
                              <button class='section-btn' type='button' data-toggle='modal' data-target='#addUsuarioModal'>Cadastre-se</button>
                              <?php
                         }
                         else{
                              ?>
                              <button  type='button' class='section-btn' data-toggle='modal' data-target='#perfilUsuarioModal'>
                               <?php echo $_SESSION['nome'];?></button>
                              <button class='section-btn' type='button' data-toggle='modal' data-target='#logoutUsuarioModal'>Sair</button>
                              <?php
                             
                         }
                         
                         ?>
                          
                    </ul>
               </div>

          </div>
     </section>
     
</body>
</html>