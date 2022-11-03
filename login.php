<?php
session_start();


if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="usuario.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            

            body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            }
            body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            }

            .form-signin {
            max-width: 330px;
            padding: 15px;
            }

        </style>


    </head>
    <body>
        <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $mail = $_POST["tmail"];
            $senha = $_POST["tsenha"];  
            
            require_once "database.php";
            $conn=connect();
            login($mail,  $senha, $conn);
         }
        ?>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');

            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


<main class="form-signin w-100 m-auto">
            <div class="container ">
            <h1 class="border-bottom pb-3 mb-4">Login</h1>
                <form action="login.php" class="needs-validation" method="post" novalidate>
                    <div class="row mb-3 justify-content-start">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" name="tmail" class="form-control" id="inputEmail" placeholder="Email" required>
                        <div class="invalid-feedback"> please entea valid email address</div>
                    </div>
                    <div class="row mb-3 justify-content-start">
                        <label for="inputSenha" class="col-sm-2 col-form-label">Senha</label>
                        <input type="password" name="tsenha" class="form-control" id="inputSenha" placeholder="Senha" required>
                        <div class="invalid-feedback">Please enter your password to continue.</div>
                    </div>
                    <div class="row  justify-content-start">
                        <button type="submit" class="m-0 btn btn-primary ">Login</button>
                    </div>
                    <p>nao tem conta <a href="cadastro.php" class="my-3 ">Cadastre-se</a></p>
                </form>
                
            </div>

</main>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>      
</html>