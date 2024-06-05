<?php 
    switch ($_REQUEST['acao']){

        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $dataNasc = $_POST['dataNasc'];
            
            $sql = "INSERT INTO usuarios (
                nome,
                email,
                senha,
                dataNasc
                ) VALUE (
                    '{$nome}',
                    '{$email}',
                    '{$senha}',
                    '{$dataNasc}' 
                )";

            $res = $conn->query($sql);

            if ($res == true ){
                header("Location:?page=listar");
            }

        break;

        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $dataNasc = $_POST['dataNasc'];

            $sql = "UPDATE usuarios SET 
                    nome= '{$nome}', 
                    email= '{$email}', 
                    senha= '{$senha}', 
                    dataNasc = '{$dataNasc}'
                WHERE 
                    id=" . $_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true ){
                header("Location:?page=listar");
            }

        break;

        case 'delete':
           $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];

           $res = $conn->query($sql);

           if($res == true){
            header("location:?page=listar");
           }

        break;
    }

?>


