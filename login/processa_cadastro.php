<?php

    session_start();
    include("conexao.php");
    
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nascimento']) && isset($_POST['telefone']) && isset($_POST['cpf'])){
        if(strlen($_POST['nome']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0 || strlen($_POST['nascimento']) == 0 || strlen($_POST['telefone']) == 0 || strlen($_POST['cpf']) == 0
        || strlen($_POST['rua']) == 0 || strlen($_POST['numero']) == 0 || strlen($_POST['bairro']) == 0 || strlen($_POST['cidade'] == 0 || strlen($_POST['cep']) == 0)){
            $_SESSION['cadErro'] = "<p class='alerta-erro'>Preencha os campos.</p>";
            header("Location: cadastro.php");
        } else {
            $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
            $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
            $senha = mysqli_real_escape_string($mysqli, trim(($_POST['senha'])));
            $cpf = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
            $nascimento = mysqli_real_escape_string($mysqli, trim($_POST['nascimento']));
            $telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
            $rua = mysqli_real_escape_string($mysqli, trim($_POST['rua']));
            $numero = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
            $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
            $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
            $cep = mysqli_real_escape_string($mysqli, trim($_POST['cep']));
        
            $sql = "select count(*) as total from usuarios where cpf = '$cpf' or email = '$email';";
            $result = mysqli_query($mysqli, $sql);
            $row = mysqli_fetch_assoc($result);
        
            if($row['total'] >= 1) {
                header("Location: cadastro.php");
                $_SESSION['cadErro'] = "<p class='alerta-erro'>Usuário já existente!</p>";
                exit();
            }

            $result_usuario = "INSERT INTO usuarios (id, nome, email, senha, cpf, nascimento, telefone, datacad, rua, num, bairro, cidade, cep) 
            VALUES (NULL, '$nome', '$email', ('$senha'), '$cpf', '$nascimento', '$telefone', CURRENT_TIMESTAMP, '$rua', '$numero', '$bairro', '$cidade', '$cep');";
            $_SESSION['loginErro'] = "<p class='alerta-sucesso'>Cadastro feito com sucesso!</p>";
            $resultado_usuario = mysqli_query($mysqli, $result_usuario);
            header("Location: login.php");
            exit();
        }
    } 
?>