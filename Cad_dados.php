<?php 
include 'conect.php';

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$arquivo = $_FILES['foto']['name'];// pega o nome do arquivo da  foto
$ext = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));// pega a extensão da foto
$novo_name = md5(time()).".". $ext; // renomeia a foto
$diretorio = "images/".$tipo."/";
move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$novo_name);
$foto_c = $diretorio.$novo_name;
session_start();
$nomecad = $_SESSION['nome'];
if( $tipo == 'zerg'){
    $query = "INSERT INTO zerg (fotoz, nomez, descricaoz,nomecad)
VALUES('$foto_c','$nome', '$descricao','$nomecad')";

    if(mysqli_query($conexao, $query)){

    echo "<script language='javascript' type='text/javascript'>
            alert('Cadastrado com sucesso!');window.location.href='adm.php';</script>";
    }
}
if( $tipo == 'protoss'){
    $query = "INSERT INTO protoss (fotop, nomep, descricaop,nomecad)
VALUES('$foto_c','$nome', '$descricao','$nomecad')";

    if(mysqli_query($conexao, $query)){

    echo "<script language='javascript' type='text/javascript'>
            alert('Cadastrado com sucesso!');window.location.href='adm.php';</script>";
    }
}
if( $tipo == 'terrano'){
    $query = "INSERT INTO terrano (fotot, nomet, descricaot,nomecad)
VALUES('$foto_c','$nome', '$descricao','$nomecad')";

    if(mysqli_query($conexao, $query)){

    echo "<script language='javascript' type='text/javascript'>
            alert('Cadastrado com sucesso!');window.location.href='adm.php';</script>";
    }
}
?>