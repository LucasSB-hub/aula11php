<?php
// abrir a sessao
// pegar os dados da tela
session_start();
$email = $_POST["email"];
$senha = $_POST["senha"];

// montar a instrução de verificar se o usuário existe
$sql ="select * from usuario where email = '".$email."' and senha = '".$senha."'";

// abrir a conexao com o banco
include_once 'conexao.php';

// executar a instrução no banco
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
    
    $row = mysqli_fetch_array($rs);

    // $row["nome"].$row[["email"]

    $_SESSION["email"] = $row["email"]; 
    $_SESSION["nome"] = $row["nome"]; 
    $_SESSION["perfil"] = $row["perfil"]; 
    $_SESSION["id"] = $row["idusuario"]; 
    $_SESSION["data"] = time();
     


    
    
    //echo"Conta encontrada";
    // redirecionar
    echo"<script>";
    echo"location.href='admin/painel.php'";
    echo"</script>";
} else{
    echo"Nenhum registro encontrado";
}
// e=fechar a conexao com o banco
mysqli_close($con);

?>
