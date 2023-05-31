<?php
    require_once('cabecalhoHtml.php');
    require_once('menu.php');
    require_once('_validator/validacao.php');

    if(!isset($_SESSION)){
        session_start();
    }

    // if(!count($_SESSION['nomeUsuario'])) {
    //     $_SESSION['nomeUsuario'] == "rapariga";
    // }
?>

<main class="corpo">
    <section class="corpo-inicio">
        <img class="grupo-logo" src="_assets/magoslogo.png" alt="">
        <p class="bem-vindo">Bem-Vindo(a), <?= $_SESSION['nomeUsuario'];?></p>
        <p class="mensagem">Aqui você pode encontrar muitas informações que deseja e ficar informado o que acontece no nosso mundo dos magos. Aqui você pode ver quem está a frente do conselho, membros da sua guilda e pegar trabalhos disponiveis para sua classificação.</p>
    </section>
</main>

<?php 
    require_once('rodape.php');
?>