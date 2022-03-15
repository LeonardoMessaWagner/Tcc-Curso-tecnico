<!DOCTYPE html>
<html lang="pt-br">
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

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


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
                         <li><a href="#about" class="smoothScroll">Sobre Starcraft 2</a></li>
                         <li><a href="#team" class="smoothScroll">Raças</a></li>
                         <?php @session_start(); if(@$_SESSION['ad'] == 1){?><li><a href="adm.php" class="smoothScroll">Adiministração</a></li> <?php } ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"> <i></i> </a></li>
                         <?php
                         @session_start();
                         
                         if (@$_SESSION['nome'] ==Null) {
                             ?>
                              <button style="border-radius: 5px;" class='section-btn' type='button' data-toggle='modal' data-target='#loginUsuarioModal'>Entrar</button>
                              <button style="border-radius: 5px;" class='section-btn' type='button' data-toggle='modal' data-target='#addUsuarioModal'>Cadastre-se</button>
                              <?php
                         }
                         else{
                              ?>
                              <button style="border-radius: 5px;"  type='button' class='section-btn' data-toggle='modal' data-target='#perfilUsuarioModal'>
                               <?php echo $_SESSION['nome'];?></button>
                              <button style="border-radius: 5px;" class='section-btn' type='button' data-toggle='modal' data-target='#logoutUsuarioModal'>Sair</button>
                              <?php
                             
                         }
                         
                         ?>
                          
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h1>Três raças distintas qual sua escolha?</h1>
                                             <a style="border-radius: 5px;" href="#team" class="section-btn btn btn-default smoothScroll">Zerg, Protoss ou Terrano?</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h1>Um dos melhores RTS da história está de graça!</h1>
                                             
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h1>Enorme cenário de E-sports!</h1>
                                             <a style="border-radius: 5px;" href="https://wcs.starcraft2.com/en-us/" class="section-btn btn btn-default smoothScroll">Saiba mais!</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h2 style="color: #0000ff;">Starcraft 2</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p  style="color: #ffffff;">Starcraft 2 é um jogo do gênero RTS onde você constroi sua base, constroi seu exercito e luta contra seu adversario tudo ao mesmo tempo!<br>
                                   Neste game qualquer erro pode significar derrota certa, então cabe ao jogador melhorar suas habilidades de Micro e Macro para melhorar suas habilidades e vencer! </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/game.png" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 style="color: #0000ff;">Zerg, Protoss ou Terrano?</h2>
                    <?php if(empty($_SESSION['nome'])){?><h4>Você deve estar logado para visualizar as unidades</h4><?php }?>
                         </div>
                    </div>
<?php if(!empty($_SESSION['nome'])){?>
                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/zerg.webp" class="img-responsive"  alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4 style="font-size: 40px;"><a class="raca" href="Zerg_table.php">Zerg</a></h4> 
                                             <ul class="social-icon">
                                                  
                                             </ul>
                                        </div>
                                   </div>
                         </div>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/Protoss.webp" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4 style="font-size: 40px;"><a href="protoss_table.php" class="raca">Protoss</a></h4>
                                             
                                        </div>
                                   </div>
                         </div>
                         
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/Terrano.webp" class="img-responsive" alt="">
                                   <div class="team-hover">
                                        <div class="team-item">
                                             <h4 style="font-size: 40px;"><a href="terrano_table.php" class="raca">Terrano</a></h4>
                                             
                                        </div>
                                   </div>
                         </div>
                         
                    
</div><?php }?>
          </div>
     </section>
<?php include "modais.php";?>

                    
                      
     <!-- SCRIPTS -->
     <script>
           function escondemodal() {
               $('#perfilUsuarioModal').modal('hide');
               $('#deletaUsuarioModal').modal('show');

       }
       function modas(){
            $('#perfilUsuarioModal').modal('show');
       }
     </script>
     <script>
          function reset(){
               var f = document.getElementById("formu");
               document.form.reset();
          }
     </script>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>