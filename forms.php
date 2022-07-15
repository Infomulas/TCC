<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

</head>
<body>
<form action="forms.php" method="POST" enctype="multipart/form-data">

    <label>Id:</label>
    <input type="text" name="Id" placeholder="auto_increment" disabled>
    <br>

    <label for="">Id fornecedor:</label>
    <input type="number" name="Id_Fornecedor" placeholder="Digite o Id">
    <br>

    <label for="">Id categoria: </label>
    <input type="radio" name="categoria" value="1"> Alimentos
    <input type="radio" name="categoria" value="2"> Bebidas
    <input type="radio" name="categoria" value="3"> Banho
    <input type="radio" name="categoria" value="4"> Petshop

    <br><br>

    <label for="">Produto: </label>
    <input type="text" name="Produto" placeholder="Insira o produto">
    <br><br>

    <label for="">Foto produto: </label>
    <input name="arquivo" type="file" placeholder="Foto do produto">
    <br><br>

    <label for="">Descrição: </label>
    <input type="text" name="Descrição" placeholder="Insira a descrição">
    <br><br>

    <label for="">Valor: </label>
    <input type="number" name="Valor" placeholder="Insira o Valor">
    <br><br>

    <label for="">Estoque: </label>
    <input type="number" name="Estoque" placeholder="Insira o Estoque">
    <br><br>

    <label for="">Estoque Min.: </label>
    <input type="number" name="Estoque Min." placeholder="Insira o Estoque Min.">
    <br><br>
    
    <input type="submit" value="Inserir">
    <input type="reset" value="apagar">


    </form>
</body>
</html>








<?php

require './conexao.php';

$msg = false;
if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo']['name'];
    $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
    
    if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg")
        die ('Tipo de arquivo não aceito!');
    
    $novo_nome = md5(time()).".".$extensao;
    
    $diretorio = "upload/";
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
    
    $sql = "INSERT INTO produtos(id, arquivo, data) VALUES('','$novo_nome', NOW())";
    $mysqli->query($sql);
    if ($result = $mysqli->query($sql)) {
        echo "enviou";
        
    } else {
            echo "Erro: " . $sql . "<br>" . $mysqli->error;
            }
        $mysqli->close();

}





?>