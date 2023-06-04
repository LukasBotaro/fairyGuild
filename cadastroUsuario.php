<?php
    require_once('cabecalhoHtml.php');
?>

<section class="area-login">
    <div class="login">
        <form class="form-cadastro" method="post">
            <input type="text" name="name" placeholder="Nome de usuário" autofocus>
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Defina sua senha">
            <input type="password" name="password" placeholder="Insira a senha novamente">
            <input type="text" name="ranking" placeholder="Qual seu ranking?">
            <input type="text" name="guilda" placeholder="Qual a guilda aplicada?">

            <input type="submit" value="CADASTRAR">
        </form>

        <p><a class="link-voltar" href="index.php">Voltar</a></p>
    </div>
</section>
</body>
</html>