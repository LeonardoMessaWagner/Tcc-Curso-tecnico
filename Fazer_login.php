<?php
session_start();
include('conect.php');
$email= $_POST['email'];
$senha= $_POST['senha'];
$qe= "SELECT email FROM `usuario` WHERE email= '$email'";
$re = mysqli_query($conexao, $qe);

$linhae= @mysqli_fetch_row($re);

if ($linhae == 0) {
echo "<script language='javascript' type='text/javascript'>
        alert('Este E-mail não esta Cadastrado!');window.location
        .href='index.php';</script>";
        die();
}
else{
	$senha = md5($senha);
	$query= "SELECT * FROM `usuario` WHERE email = '$email' AND senha = '$senha'";
	$resultado = mysqli_query($conexao,$query);
	$linha = mysqli_num_rows($resultado);
	$logador = $linha;
	

	$linha = mysqli_fetch_row($resultado);

	if ($logador == 1) {
		$_SESSION['nome'] = $linha[1];
		$_SESSION['email'] = $linha[0];
		$_SESSION['senha'] = $linha[2];
		$_SESSION['ad'] = $linha[3];
		
		echo "<script language='javascript' type='text/javascript'>
        alert('Bem Vindo ". $_SESSION['nome']."');window.location
        .href='index.php';</script>";
        

	}
	else{
		echo "<script language='javascript' type='text/javascript'>
        alert('Erro algo de errado não está certo!');window.location
        .href='index.php';</script>";
	}
	
}
?>