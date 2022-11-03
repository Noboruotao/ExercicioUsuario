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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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