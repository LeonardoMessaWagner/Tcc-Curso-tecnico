<?php
    session_start();
    $email_pessoa = $_SESSION['email'];
    include_once 'Funções.php';
    $nome = strtoupper(@$_POST['nome_att']);
    $email = @$_POST['email_att'];
    $log_out =@$_POST['sair'];
    $deletador = @$_POST['deleta'];
    if($nome <>NULL){// decisão de alterar o nome ou não;
    troca_nome($nome,$email_pessoa);
    echo "<script language='javascript' type='text/javascript'>
    alert('Nome Alterado');</script>";
        if($email == NULL){// se trocar o nome, decisão de ficar ou não na pagina;
        echo "<script language='javascript' type='text/javascript'>window.location
        .href='index.php';</script>";
        die();
        }   
    }
    if ($email <> NULL) {
    troca_email($email,$email_pessoa);
    echo "<script language='javascript' type='text/javascript'>
    alert('E-mail Alterado');window.location.href='index.php';</script>";
    }
    if($log_out ==1){
    log_out();
    }
    if($deletador == 1){
        deleta_user();
    }

?>
