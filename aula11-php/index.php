<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 12</title>
</head>
    <body>
        <h3>Faça seu login</h3>
            <fieldset>
            <legend>:::MIZU LUFFY:::</legend>
        <form action="login.php" method="post">
            E-mail:
            <input type="text" name="email" placeholder="Email">
            <br><br>
            Senha:
            <input type="text" name="senha" placeholder="Senha">
            <br><br>

            <input type="submit" value="Entrar no sistema"/>

        </form>

        <?php
        if(isset($_GET["m"]))
        echo $_GET["m"];
          
        ?>


        </fieldset>
    </body>
</html> 