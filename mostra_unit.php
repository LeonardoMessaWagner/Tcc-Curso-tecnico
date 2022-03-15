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
               <div  class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         
                         <li><a href="zerg_table.php" class="smoothScroll">Zerg</a></li>
                         <li><a href="protoss_table.php" class="smoothScroll">Protoss</a></li>
                         <li><a href="terrano_table.php" class="smoothScroll">Terrano</a></li>
                         <?php @session_start(); if(@$_SESSION['ad'] == 1){?><li><a href="adm.php" class="smoothScroll">Administração</a></li> <?php } ?>
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
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <?php @session_start(); if( @$_SESSION['ad'] == 0){?>
               <div class="row">
<form>
                    <div class="col-md-6 col-sm-12">
                    <img style="width: 550px;height: 350px;" src="<?php echo $_SESSION['fotoexz1'];?>" >
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h1 style="color: white;">Descrição:</h1>
                        <p style="color:white;"><?php echo $_SESSION['descricaoexz1'];?></p>
                    </div>
                    
               </div>
               <div class="row">
                         
                    <div  class="col-md-12 col-sm-12">
                    
                    </div>
               </div>
               <div class="row">
                    <br>
               <div class="col-md-3"></div><?php }else{ ?>
                   <div class="container">
               <?php @session_start(); ?>
               <form method="POST" action="edit_unit.php" enctype="multipart/form-data">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                    <img style="width: 550px;height: 350px;" src="<?php echo $_SESSION['fotoexz1'];?>" >
                    <br><br>
                    <input name="foto" type="file">
                    </div>
                    <div class="col-md-6 col-sm-12">
                    
                        <h1 style="color: white;">Descrição:</h1>
                        <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="<?php echo $_SESSION['descricaoexz1'];?>" ></textarea>
                    </div>
                    
               </div>
               <div class="row">
                         
                    <div  class="col-md-12 col-sm-12">
                    
                    </div>
               </div>
               <div class="row">
                    <br>

               <?php @session_start(); if(@$_SESSION['ad'] == 1){?>
                    <div class="col-md-6">
                    <div  style="text-align: center;" >
                         
                    <button name="tipo" value="<?php echo $_SESSION['tipo']?>" style="border-radius: 5px;" class='section-btn' type='submit' >Editar</button></form>
                    <button name="tipod" value="<?php echo $_SESSION['tipo']?>" style="border-radius: 5px;" class='section-btn' type='submit' >Deletar</button></form></div>
               </div><?php }?>
               </div><?php }?>
     </section>
     <?php include "modais.php";?>




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