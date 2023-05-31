<?php
    function validarSessao(){
        session_start();
        if(!isset($_SESSION['nomeUsuario'])){
            return false;
        } else{
            return true;
        }
    }
?>