<?php 
session_start();
include ('conect.php');
$tipo = @$_POST['tipo'];
$foto =@$_FILES['foto']['name'];// pega o nome do arquivo da  foto
$ident = $_SESSION['nomeexz1'];
$tipod = @$_POST['tipod'];
$descricao = @$_POST['descricao'];
if($tipod == "zerg"){
    @$query = "DELETE  FROM `$tipod` WHERE `nomez` = '$ident'";
    $resortado = mysqli_query($conexao, $query);

    $linhae= @mysqli_fetch_row($resortado);
    if ($linhae == 0) {
	
	echo "<script language='javascript' type='text/javascript'>
        alert('Unidade deletada');window.location
        .href='index.php';</script>";
        die();
}
}
if($tipod == "protoss"){
    @$query = "DELETE  FROM `$tipod` WHERE `nomep` = '$ident'";
    $resortado = mysqli_query($conexao, $query);

    $linhae= @mysqli_fetch_row($resortado);
    if ($linhae == 0) {
	
	echo "<script language='javascript' type='text/javascript'>
        alert('Unidade deletada');window.location
        .href='index.php';</script>";
        die();
}
}
if($tipod == "terrano"){
    @$query = "DELETE  FROM `$tipod` WHERE `nomet` = '$ident'";
    $resortado = mysqli_query($conexao, $query);

    $linhae= @mysqli_fetch_row($resortado);
    if ($linhae == 0) {
	
	echo "<script language='javascript' type='text/javascript'>
        alert('Unidade deletada');window.location
        .href='index.php';</script>";
        die();
}
}

if ($tipo == "zerg"){
    if($foto <> null){
        $ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));// pega a extensão da foto
        $novo_name = md5(time()).".". $ext; // renomeia a foto
        $diretorio = "images/".$tipo."/";
        move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$novo_name);
        $foto_c = $diretorio.$novo_name;
        @$query = "UPDATE $tipo SET fotoz = '$foto_c' WHERE nomez = '$ident'";
        if(mysqli_query($conexao,$query)){
          echo  "<script language='javascript' type='text/javascript'>
        alert('Foto alterada');</script>";}
    }
    if($descricao <> null){
        @$query = "UPDATE $tipo SET descricaoz = '$descricao' WHERE nomez = '$ident'";
        if(mysqli_query($conexao,$query)){
         echo "<script language='javascript' type='text/javascript'>
        alert('descrição alterada');</script>";}
    }
    echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';</script>";

}
if ($tipo == "protoss"){
    if($foto <> null){
        $ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));// pega a extensão da foto
        $novo_name = md5(time()).".". $ext; // renomeia a foto
        $diretorio = "images/".$tipo."/";
        move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$novo_name);
        $foto_c = $diretorio.$novo_name;
        @$query = "UPDATE $tipo SET fotop = '$foto_c' WHERE nomep = '$ident'";
        if(mysqli_query($conexao,$query)){
          echo  "<script language='javascript' type='text/javascript'>
        alert('Foto alterada');</script>";}
    }
    if($descricao <> null){
        @$query = "UPDATE $tipo SET descricaop = '$descricao' WHERE nomep = '$ident'";
        if(mysqli_query($conexao,$query)){
         echo "<script language='javascript' type='text/javascript'>
        alert('descrição alterada');</script>";}
    }
    echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';</script>";

}
if ($tipo == "terrano"){
    if($foto <> null){
        $ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));// pega a extensão da foto
        $novo_name = md5(time()).".". $ext; // renomeia a foto
        $diretorio = "images/".$tipo."/";
        move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$novo_name);
        $foto_c = $diretorio.$novo_name;
        @$query = "UPDATE $tipo SET fotot = '$foto_c' WHERE nomet = '$ident'";
        if(mysqli_query($conexao,$query)){
          echo  "<script language='javascript' type='text/javascript'>
        alert('Foto alterada');</script>";}
    }
    if($descricao <> null){
        @$query = "UPDATE $tipo SET descricaot = '$descricao' WHERE nomet = '$ident'";
        if(mysqli_query($conexao,$query)){
         echo "<script language='javascript' type='text/javascript'>
        alert('descrição alterada');</script>";}
    }
    echo "<script language='javascript' type='text/javascript'>
        window.location.href='index.php';</script>";

}
?>
