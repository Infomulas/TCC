<?php
require './conexao.php';
//include 'inserir_produto.html';
//$id = $_POST['id'];

$id_categoria = $_POST['categoria'];
$produto = $_POST['produto'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];
$estoque_min = $_POST['estoque_min'];
$msg = false;
if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo']['name'];
    $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
    
    if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg")
        die ('Tipo de arquivo não aceito!');
    
    $novo_nome = md5(time()).".".$extensao;
    
    $diretorio = "upload/";
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
    
    $sql = "INSERT INTO produtos(id,id_categoria, produto, foto_produto, descricao, valor, estoque, estoque_min) 
    VALUES('', $id_categoria, '$produto', '$novo_nome', '$descricao', $valor, $estoque, $estoque_min)";
    $mysqli->query($sql);
    // if ($result = $mysqli->query($sql)) {
    //     echo "enviou";
        
    // } else {
    //         echo "Erro: " . $sql . "<br>" . $mysqli->error;
    //         }
    //     $mysqli->close();

}
echo "<h1> Enviou! </h1>";
header('refresh:1;url=inserir_produto.html');  
?>