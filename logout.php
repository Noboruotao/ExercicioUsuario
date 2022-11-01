<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">
    <head>
        <title>logout</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        
        $_SESSION['message']= "Logout feito com sucesso<br>bye-bye ".$_SESSION['nome'];
        session_unset();
        header("location:login.php");
        ?>
    </body>
</html>