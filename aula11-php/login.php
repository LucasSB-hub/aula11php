<?php

// pegar os dados da tela
$email = $_POST["email"];
$senha = $_POST["senha"];

// montar a instrução de verificar se o usuário existe
$sql ="select * from usuario where email = '".$email."' and senha = '".$senha."'";

// abrir a conexao com o banco
include_once 'conexao.php';

// executar a instrução no banco
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
    //echo"ACHEEEI!...";
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
