<?php

include "conexao.php";

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];

if ( $imagem != "none" ){

    echo "ate aqui a img foi";

};

$sql = "INSERT INTO produtos (foto_produto, valor, descricao)
VALUES ('$imagem','$valor','$descricao' )";
$mysqli->query($sql);

if ($result = $mysqli->query($sql)) {

    ?>
        <script type="text/javascript">
          alert("foi! ");
        </script>
    <?php
    
    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
    
    ?>
?>