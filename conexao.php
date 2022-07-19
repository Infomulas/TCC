<?php 

$mysqli = new mysqli("localhost", "root","","comprebem_db", 3307);
if (mysqli_connect_errno()){
    echo "Erro ao conectar ao banco de dados: ".mysqli_connect_error();
    exit();
} 
// else 
// {
//     echo "Conexão realizada com sucesso!";
// }

?>
