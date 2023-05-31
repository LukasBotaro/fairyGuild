<?php
    require_once('cabecalhoHtml.php');
    require_once('menu.php');
    require_once('_validator/validacao.php');

    // if(!isset($_SESSION)){
    //     session_start();
    // }
?>

<main class="table">
    <table class="conselhoTabela">
        <tr class="cabecalhoTabela">    
            <th>Mestre</th>
            <th>Guilda</th> 
            <th>Sigla Guilda</th>
            <th>Região</th>
        </tr>
        <tbody>
            <tr>
                <td>Mestre</td>
                <td>Guilda</td>
                <td>SG</td>
                <td>Region</td>
            </tr>
        </tbody>
    </table>
</main>

<?php 
    require_once('rodape.php');
?>