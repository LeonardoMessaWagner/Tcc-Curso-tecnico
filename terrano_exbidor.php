<?php 
include 'conect.php';
$exib = $_POST['exibidor'];
echo $exib;
$query= "SELECT * FROM `terrano` WHERE nomet = '$exib'";
session_start();
$resultado = mysqli_query($conexao,$query);
	$linha = mysqli_num_rows($resultado);
	$logador = $linha;
	

	$linha = mysqli_fetch_row($resultado);

	if ($logador == 1) {
		$_SESSION['tipo']= 'terrano';
		$_SESSION['fotoexz1'] = $linha[0];
		$_SESSION['nomeexz1'] = $linha[1];
                $_SESSION['descricaoexz1'] = $linha[2];
               
                echo "<script language='javascript' type='text/javascript'>
                window.location.href='mostra_unit.php';</script>";
        }


?>