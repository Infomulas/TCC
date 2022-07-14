<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action="index.php" method= "POST" enctype ="multipart/form-data" action="">
        <p><label for="">Selecione o arquivo</label>
    <input name="arquivo" type="file"></p>
    <button name= "upload" type="submit">Enviar arquivo</button>
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
    
    $sql_code = "INSERT INTO arquivo(id, arquivo, data) VALUES('','$novo_nome', NOW())";
    
    if(mysqli_query($conn, $sql_code))
        $msg = "Arquivo enviado com sucesso!";
    else
        $msg = "Falha ao enviar arquivo!";
}
?>