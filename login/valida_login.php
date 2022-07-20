<?php
    session_start();
    require '../conexao.php';

    if(isset($_POST['email']) && isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0 || isset($_POST['senha']) == 0){
            $_SESSION['loginErro'] = "<p class='alerta-erro'>Preencha os campos.</p>";
            header("Location: login.php");
        } else {
            $email = mysqli_real_escape_string($mysqli, $_POST['email']);
            $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
            $query = "select email from usuarios where email = '{$email}' and senha = '{$senha}'";
            $result = mysqli_query($mysqli, $query);
            $row = mysqli_num_rows($result);


            if($email == 'admin@comprebem.com' && $row == 1) {
                $usuarios = mysqli_fetch_assoc($result);
                if(!isset($_SESSION)){
                    session_start();
                }
                
                header("Location: ../perfil/perfil_empresa.php");               
                exit();
            } else if($row == 1) {
                $usuarios = mysqli_fetch_assoc($result);
                if(!isset($_SESSION)){
                    session_start();
                }
                
                header("Location: ../perfil/perfil_cliente.php");
                exit();
            } else {
                $_SESSION['loginErro'] = "<p class='alerta-erro'>E-mail ou senha invalido!</p>";
            
                header("Location: login.php");
                exit();
            }
        }
    }    
?>