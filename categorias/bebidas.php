<?php
include "../conexao.php";
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mercadinho</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- header-->

    <header id="logo">

        <a class="headerLogo" href="../index.php">
            <img src="../img/logo.png" alt="logo">

            <h2>Mercado<br>Compre Bem</h2>
        </a>

        <a class="cta" href="../login/login.php">Login</a>

    </header>

    <!-- navegação -->

    <div id="nav">

        <nav>
            <ul class="nav__links"> 
                <li>
                    <a href="Alimentos.php">Alimentos</a>
                </li>

                <li>
                    <a href="bebidas.php">Bebidas</a>
                </li>

                <li>
                    <a href="limpeza.php">Banho e limpeza</a>
                </li>

                <li>
                    <a href="petshop.php">Petshop</a>
                </li>
            </ul>
        </nav>

    </div>

    <!-- Produtos -->

    <div class="teste1301">


        <?php
        $sql = "SELECT * FROM produtos WHERE id_categoria = '2'";
        if ($result = $mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                echo 
                "
                    <div class='card ' style='width: 12rem; border:1px solid rgba(0, 0, 0, 0.4);'>
                        <img src='../upload/" . $row['foto_produto'] . "' class='card-img-top width='210px' height='210px''  >
                        <div class='card-body'>
                            <h4 class='card-title'>R$: " . $row['valor'] . "</h4>
                            <p class='card-text text'>" . $row['descricao'] . "</p>

                        </div>
                    </div>
                ";
            }
            $result->close();
        }
        $mysqli->close();
        ?>


    </div>

    <!-- footer -->

    <footer class="footer-distributed">

        <!-- footer esquerdo -->

        <div class="footer-left">

            <a class="logo" href="/"><img src="../img/logo.png" alt="logo"></a>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>

                <a href="#">Faq</a>

                <a href="#">Contato</a>
            </p>

            <p class="footer-company-name">Mercadinho BigBom © 2000</p>
        </div>

        <!-- footer centro -->

        <div class="footer-center">

            <div>
                <a href="https://www.google.com/maps/place/R.+dos+Tat%C3%BAs+-+Unamar,+Cabo+Frio+-+RJ/@-22.6386283,-42.0082813,17z/data=!3m1!4b1!4m5!3m4!1s0x97aea2d094c8df:0x153ad6f76df0b5f1!8m2!3d-22.6386283!4d-42.0082813"><i class="mapa"></i></a>
                <p><span>Rua dos Tatus, 69 - 11111-111</span> Cabo Frio, Rio de Janeiro</p>
            </div>

            <div>
                <i class="telefone"></i>
                <p>(22) 99999-9999</p>
            </div>

            <div>
                <a href="mailto:suporte@comprebem.com"><i class="email"></i></a>
                <p>suporte@comprebem.com</p>
            </div>

        </div>

        <!-- footer direito -->

        <div class="footer-right">

            <p class="footer-company-about">
                <span>Sobre a companhia</span>
                Mercado Compre Bem, agora no seu computador! Há mais de 20 anos fazendo o melhor para você!
            </p>

            <div class="footer-icons">

                <a href="https://www.facebook.com/"><i class="facebook"></i></a>
                <a href="https://twitter.com/home"><i class="twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="instagram"></i></a>

            </div>

        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
