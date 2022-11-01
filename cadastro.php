<!DOCTYPE html>
<html lan="pt-br">
<?php
session_start();

if(isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  unset($_SESSION['message']);

  echo "<script type='text/javascript'>alert('$message');</script>";

  unset($_SESSION['message']);
}





?>
<head>
        <title>Cadastro</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
          .formCadastro{
            max-width: 1000px;
            padding: 15px;          }
        </style>
       
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="jquery.mask.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


    </head>
    <body>
        <?php
          if($_SERVER['REQUEST_METHOD']==='POST'){
          $nome= isset($_POST["tnome"])?$_POST["tnome"]: is_null($nome);
          $email=isset($_POST["tmail"])?$_POST["tmail"]: is_null($email);
          $senha=isset($_POST["tsenha"])?$_POST["tsenha"]: is_null($senha);
          $cpf=isset($_POST["tcpf"])?$_POST["tcpf"]: is_null($cpf);
          $contato=isset($_POST["tcontato"])?$_POST["tcontato"]: is_null($contato); 
            
          require_once "database.php";
          $conn=connect();
          cadastro($nome,$email,$cpf,$senha,$contato,$conn);                
               }
        ?>
        

<div >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">ExercicioUsuario</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="change.php" class="nav-link ">MudarDados</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas</a>
                    <div class="dropdown-menu">
                        <a href="page01.php" class="dropdown-item">Page01</a>
                        <a href="page02.php" class="dropdown-item">Page02</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Account</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="cadastro.php" class="dropdown-item">Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a href="#myModal"class="dropdown-item"data-toggle="modal">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>


    <div class="formCadastro m-auto">
      <form action="cadastro.php" method="post">
        <div class="form-group row">
        <div class="form-group col-sm-12">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" name="tnome" id="cnome" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" name="tmail" id="cmail" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="inputSenha">Senha</label>
          <input type="password" class="form-control" name="tsenha" id="csenha" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="inputCpf">CPF</label>
          <input type="text" class="form-control" name="tcpf" id="ccpf" required>
        </div>
        <div class="form-group col-sm-6">
          <label for="inputContato">Contato</label>
          <input type="text" class="form-control" name="tcontato" id="ccontato" required>
        </div>
        <div >
        <button type="submit" class=" btn btn-primary btn-lg">Cadastrar</button>
            </div>
            </div>
      </form>
    </div>

    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>are you sure want to logout?</p>
                    <p class="text-secondary"><small>the session will be ended.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <a href="logout.php"><button type="button" class="btn btn-primary">LOGOUT</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


        <script>
          $('input[name="tcontato"]').mask('(00) 0000-0000', {placeholder:"(__) ____-____"});
          $('input[name="tcpf"]').mask('000.000.000-00', {placeholder:"___.___.___-__"});
        </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>