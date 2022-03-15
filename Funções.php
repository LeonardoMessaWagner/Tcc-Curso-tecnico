<?php
function troca_nome($nome,$email_pessoa){//Função para trocar Nome;
    include('conect.php');
    @$query = "UPDATE usuario SET nome = '$nome' WHERE email = '$email_pessoa'";
    if(mysqli_query($conexao,$query)){
         $_SESSION['nome'] = $_POST['nome_att'];
     }
}
function troca_email($email,$email_pessoa){//Função para trocar E-mail;
    include('conect.php');
    @$query = "UPDATE usuario SET email = '$email' WHERE email = '$email_pessoa'";
    if(mysqli_query($conexao,$query)){
         $_SESSION['email'] = $_POST['email_att'];
     }
} 
function log_out(){
    session_destroy();
    echo "<script language='javascript' type='text/javascript'>
    window.location.href='index.php';</script>";
}
function deleta_user(){
    include('conect.php');
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];
    
    @$query1 = "SELECT id FROM `usuario`INNER JOIN zerg ON usuario.id = zerg.idcadastrador WHERE id = '$id'";
    @$query = "DELETE  FROM `usuario` WHERE `email` = '$email'";
    $resortado = mysqli_query($conexao, $query);

    $linhae= @mysqli_fetch_row($resortado);
    if ($linhae == 0) {
	session_destroy();
	echo "<script language='javascript' type='text/javascript'>
        alert('Usuario deletado');window.location
        .href='index.php';</script>";
        die();
}
}




?>