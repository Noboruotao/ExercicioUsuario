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
        session_destroy();
        header("location:login.php");
        ?>
    </body>
</html>