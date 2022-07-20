<?php
require '../conexao.php';
//include 'inserir_produto.html';
//$id = $_POST['id'];

$id_categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$estoque = 100; //$_POST['estoque'];
if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo']['name'];
    $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
    
    if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg")
        die ('Tipo de arquivo não aceito!');
    
    $novo_nome = md5(time()).".".$extensao;
    
    $diretorio = "../upload/";
    
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
    
    $sql = "INSERT INTO produtos(id,id_categoria, foto_produto, descricao, valor, estoque) 
    VALUES('', $id_categoria, '$novo_nome', '$descricao', $valor, $estoque)";
    $mysqli->query($sql);
    // if ($result != $mysqli->error) {
    //     echo     "Erro: " . $sql . "<br><br>" . $mysqli->error;  
    // } else {
    //         echo "enviou"; 
    //         }
            
    $mysqli->close();
}
echo "<h1> Enviou! </h1>";
header('refresh:1;url=inserir_produto.html');  
?>