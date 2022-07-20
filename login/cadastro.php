<?php
    session_start();
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro</title>
        <link rel="shortcut icon" href="img/logo.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_cadastro.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#telefone').mask('(00) 00000-0000');
                $('#cpf').mask('000.000.000-00');
                $('#cep').mask('00000-000');
                $('#nascimento').mask('00/00/0000');
            });
        </script>
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

        <!-- login -->

        <div class="login">
            
            <div class="cardlogin">

                <!-- alerta-erro -->

                <?php
                    if(isset($_SESSION['cadErro'])){
                        echo $_SESSION['cadErro'];
                        unset($_SESSION['cadErro']);
                    }
                ?>

                <h1>Cadastro</h1>

                <div class="textfield">

                    <form action="processa_cadastro.php" method="post">

                        <div class="dados">

                            <h1 class="tema">Usuário</h1>

                            <div class="textfield">

                                <label for="nome">Nome completo:</label>
                                <input type="text" name="nome" placeholder="Digite o nome todo">

                            </div>

                            </div>

                            <div class="textfield">

                                <label for="email">E-mail:</label>
                                <input type="email" name="email" placeholder="Digite o e-mail">

                            </div>

                            <div class="textfield">

                                <label for="senha">Senha:</label>
                                <input type="password" name="senha" placeholder="Digite a senha">
                                        
                            </div>

                            <div class="textfield">

                                <label for="senha">CPF:</label>
                                <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00">

                            </div>

                            <div class="textfield">

                                <label for="senha">Data de nascimento:</label>
                                <input type="text" name="nascimento" id="nascimento" placeholder="dd/mm/aaaa">

                            </div>

                            <div class="textfield">

                                <label for="senha">Telefone:</label>
                                <input type="text" name="telefone" id="telefone" placeholder="(00)00000-0000">

                            </div>

                            <h1 class="tema">Endereço</h1>

                            <div class="textfield">

                                <label for="rua">Rua:</label>
                                <input type="text" name="rua" placeholder="Rua">

                            </div>

                            <div class="textfield">

                                <label for="numero">Número:</label>
                                <input type="number" name="numero" placeholder="Número">

                            </div>

                            <div class="textfield">

                                <label for="bairro">Bairro:</label>
                                <input type="text" name="bairro" placeholder="Bairro">

                            </div>

                            <div class="textfield">

                                <label for="cidade">Cidade:</label>
                                <input type="text" name="cidade" placeholder="cidade">

                            </div>

                            <div class="textfield">

                                <label for="cep">CEP:</label>
                                <input type="text" name="cep" placeholder="CEP">

                            </div>
                        
                        </div>

                        <input type="submit" value="Cadastrar" name="sendcadastro" class="btn-cadastro">

                        <div class="cadastro-link">
                            <a href="cadastro.php">Já tenho conta!</a>
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