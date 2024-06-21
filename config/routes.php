<?php 
    require('./config/conexao.php');

    switch(@$_REQUEST["page"]){
        case "cadastro":
            include("./pages/cadastro.php");
        break;
        case "listar":
            include("./pages/listar.php");
        break;
        case "editar":
            include('./pages/editar.php');
        break;
        case "salvar":
            include('./config/backEnd.php');
        default:
    }
?>