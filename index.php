<?php
    require_once('cabecalhoHtml.php');
    require_once __DIR__ . '/config.php';
    $erro = "";
    if (isset($_POST['acao'])) {

        $usuario = $_POST['email'];
        $senha   = $_POST['password'];

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sql->execute([$usuario]);

        if ($sql->rowCount() == 1) {
            $info = $sql->fetchObject();
            if ($senha == $info->senha) {
                $_SESSION['login']   = true;
                $_SESSION['id']      = $info->id;
                $_SESSION['nomeUsuario'] = $info->nomeUsuario;
                header("Location: paginaInicial.php");
                die();
            } else {
                $erro = "Usuário/senha inválidos";
            }
        } else {
            //Erro
            $erro = "Usuário não encontrado";
        }
    }
?>

<section class="area-login">
    <div class="login">
        <div>
            <img src="_assets/logo2.png" alt="">
        </div>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Seu e-mail" autofocus>
            <input type="password" name="password" placeholder="Sua senha">
            <input type="submit" value="ENTRAR" name="acao">
            <p class="erro">
                <?php
                if (strlen($erro) > 0)
                    echo "<span>$erro<span>";
                ?>
            </p>
            <p>Ainda não possui uma conta? <a href="cadastroUsuario.php">Cadastre-se</a></p>
        </form>
    </div>
</section>
</body>

</html>