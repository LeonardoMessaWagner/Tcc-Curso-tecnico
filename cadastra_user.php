<?php
include('conect.php');
$nome = strtoupper($_POST['nome']);
$email= $_POST['email'];
$senha= $_POST['senha'];
$csenha=$_POST['confirmas'];
$qe= "SELECT email FROM `usuario` WHERE email= '$email'";
$re = mysqli_query($conexao, $qe);
$linhae= @mysqli_num_rows($qe);
$linhae= @mysqli_fetch_row($re);

if ($linhae <> 0 ) {
echo "<script language='javascript' type='text/javascript'>
        alert('Este E-mail já esta cadastrado!');window.location
        .href='index.php';</script>";
        die();
}


if ($nome == Null or $email == Null) {
	echo "<script language='javascript' type='text/javascript'>
        alert('Estes campos não podem estar vazios!');window.location
        .href='index.php';</script>";
        die();
}
elseif(strlen($senha) < 8 ){

echo "<script language='javascript' type='text/javascript'>
        alert('A senha deve ter no mínimo 8 caracters');window.location
        .href='index.php';</script>";
        die();


}
elseif ($senha <> $csenha) {
	echo "<script language='javascript' type='text/javascript'>
        alert('As senhas não coincidem!');window.location
        .href='index.php';</script>";
        die();
}
else{
	$senha=md5($senha);


	$query = "INSERT INTO usuario (nome, email, senha)
VALUES('$nome', '$email','$senha')";

$result = mysqli_query($conexao, $query);

echo "<script language='javascript' type='text/javascript'>
        alert('Cadastrado com sucesso!');</script>";
 session_start();
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
}


