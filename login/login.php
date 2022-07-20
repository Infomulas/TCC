<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="stylesheet" href="css/style_cadastro.css">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_login.css">
    </head>
    <body>

        <!-- header-->

        <header id="logo">

            <a class="headerLogo" href="../index.php">
                <img src="../img/logo.png" alt="logo">

                <h2>Mercado<br>Compre Bem</h2>
            </a>

            <a class="cta" href="#">Login</a>

        </header>

        <!-- login -->

        <div class="login">

            <div class="cardlogin">

                <!-- alerta erro -->

                <?php
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                ?>

                <h1>Login</h1>

                <div class="textfield">

                    <form action="valida_login.php" method="post">

                        <div class="textfield">

                            <label for="email">E-mail:</label>
                            <input type="email" name="email" placeholder="Digite o e-mail">

                        </div>

                        <div class="textfield">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" placeholder="Digite a senha">
                        </div>
    
                        <input type="submit" value="Entrar" name="sendlogin" class="btn-login">

                        <div class="cadastro-link">
                            <a href="cadastro.php">Crie sua conta!</a>
                        </div>
    
                    </form>

                </div>

            </div>

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
    </body>
</html>