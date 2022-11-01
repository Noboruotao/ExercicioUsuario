<?php


if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
    echo "<script type='text/javascript'>alert('$message');</script>";
    unset($_SESSION['message']);
}

function connect(){
    $servername="127.0.0.1";
    $username="root";
    $password="";
        try {
                $conn = new PDO("mysql:host=$servername;dbname=exemplo", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(PDOException $e) {
                 echo "Connection failed: " . $e->getMessage();
            }
}

function login($mail,  $senha, $conn){
    try{

        $stmt=$conn->prepare('select * from usuario where email=?');
        $stmt->bindValue(1,$mail,PDO::PARAM_STR);
        $stmt->execute();
        $arr=$stmt->fetch(PDO::FETCH_OBJ);
        
        if(password_verify($senha,$arr->senha)){
            $_SESSION['id']=$arr->id;
            $_SESSION['nome']=$arr->nome;
            $_SESSION['email']=$arr->email;
            $_SESSION['senha']=$arr->senha;
            $_SESSION['cpf']=$arr->cpf;
            $_SESSION['contato']=$arr->contato;

            $sessPath   = ini_get('session.save_path');
            $sessCookie = ini_get('session.cookie_path');
            $sessName   = ini_get('session.name');
            $sessVar    = 'foo';

            header("location:home.php");
        }else{
            $_SESSION['message']="login failure";
            header("location:login.php");
          }

    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        $_SESSION['message']="login failure";
                    header("location:login.php");
    }
}

function update($nome,$email,$cpf,$contato,$id,$conn){
    try{
        if($nome==null||!filter_var($email, FILTER_VALIDATE_EMAIL)||!validaCPF($cpf)||$contato==null){
            $_SESSION['message']="error";
            header("location:change.php");
        }else{
            
                $sql="update usuario set nome=?, email=?, cpf=?, contato=? where id=?";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$nome,$email,$cpf,$contato,$id]);
        
                $stmt=$conn->prepare('select * from usuario where id=?');
                $stmt->bindValue(1,$id,PDO::PARAM_STR);
                $stmt->execute();
                $arr=$stmt->fetch(PDO::FETCH_OBJ);
        
                $_SESSION['id']=$arr->id;
                $_SESSION['nome']=$arr->nome;
                $_SESSION['email']=$arr->email;
                $_SESSION['senha']=$arr->senha;
                $_SESSION['cpf']=$arr->cpf;
                $_SESSION['contato']=$arr->contato;

                $_SESSION['message']= "mudanca feito com sucesso";
        
                header("location:home.php");
        }
    }catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    $_SESSION['message']="Session overwrite failure";
    header("location:change.php");
    }
}

function validaCPF($cpf) {
    $value = preg_replace( '/[^0-9]/is', '', $cpf );
    if (strlen($value) !== 11 || preg_match('/(\d)\1{10}/', $value)) {
        return false;
    }
  
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $value{$c} * (($t + 1) - $c);
        }
  
        $d = ((10 * $d) % 11) % 10;
  
        if ($value{$c} != $d) {
            return false;
        }
    }
  
    return true;
  }


function cadastro($nome,$email,$cpf,$senha,$contato,$conn){
    if($nome==null||!filter_var($email, FILTER_VALIDATE_EMAIL)||$senha==null||!validaCPF($cpf)||$contato==null){
        $_SESSION['message']="error";
        echo $nome."<br>";
    
        header("location:cadastro.php");
     }else{
    
    try{
        $stmt=$conn->prepare('select * from usuario where email=? or cpf=?');
        $stmt->bindValue(1,$email,PDO::PARAM_STR);
        $stmt->bindValue(2,$cpf,PDO::PARAM_STR);
        $stmt->execute();
        $arr=$stmt->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        $_SESSION['message']="email or CPF invalid";
        header("location:cadastro.php");
    }

    try{
        $senha=password_hash($senha,PASSWORD_DEFAULT);
                $sql="insert into usuario (nome,email,senha,cpf,contato) values (?,?,?,?,?)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$nome,$email,$senha,$cpf,$contato]);
               
                if($conn->errorCode()==0000){
                  $_SESSION['message']="Cadastro feito com sucesso";
                   header("location:login.php");
                }else{
                   echo "cadastro failure";
                   
                }

    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        $_SESSION['message']="email or CPF invalid";
        header("location:cadastro.php");
    }
     }
    }

    

?>