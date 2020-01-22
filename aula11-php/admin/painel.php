<?php
session_start();
include_once 'topo.php'; ?>
<h2> Sistema Administrativo</h2>
<hr>
Bem Vindo! <?php echo $_SESSION["nome"]; ?>
<br>
E-mail : <?php echo $_SESSION["email"]; ?>
<br>
Perfil : <?php echo $_SESSION["perfil"]; ?>
<br>

<?php include_once 'rodape.php'; ?>    