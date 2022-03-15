<?php
@session_start();
include('conect.php');
@$att = $_POST['autorizador'];
@$des = $_POST['desauto'];
if(@$att == true){
    include('conect.php');
    @$query = "UPDATE usuario SET adm = '1' WHERE id = '$att'";
    if(mysqli_query($conexao,$query)){
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuario autorizado');window.location
        .href='adm.php';</script>";
    }
}
if(@$des == true){
    include('conect.php');
    @$query = "UPDATE usuario SET adm = '0' WHERE id = '$des'";
    if(mysqli_query($conexao,$query)){
        echo "<script language='javascript' type='text/javascript'>
        alert('autorização removida');window.location
        .href='adm.php';</script>";
    }
}

?>
