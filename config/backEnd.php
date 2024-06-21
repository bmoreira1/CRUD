<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $nickname = $_POST['nick'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $dataNasc = $_POST['dataNasc'];
        $categoria = $_POST['categoria'];

        switch ($_POST['acao']){
            case 'cadastro':       
                $sql = "INSERT INTO usuarios (nome, email, senha, dataNasc) VALUE (
                    '{$nickname}', '{$email}', '{$senha}', '{$dataNasc}'
                )";
        
                $res = $conn->query($sql);
        
                if($res)
                {
                    header("location:?page=listar");
                } else {
                    echo "Erro ao cadastrar: " . $conn->error;
                }

            break;

            case 'editar':
                $sql = "UPDATE usuarios SET 
                        nome= '{$nickname}', 
                        email= '{$email}', 
                        senha= '{$senha}', 
                        dataNasc = '{$dataNasc}',
                        categoria = '{$categoria}'
                    WHERE 
                        id=" . $_REQUEST["id"];

                $res = $conn->query($sql);

                if ($res == true )
                {
                    header("Location:?page=listar");
                }

            break;
        }
    }

    $id = $_POST['id'];

    switch ($_REQUEST['acao']){ //Ainda não está funcionando com metod POST, ainda vou alterar
        case 'delete':

            $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST['id'];

            $res = $conn->query($sql);

            if ($res) {
                header("Location: ?page=listar");
            } else {
                echo "Erro ao deletar: " . $conn->error;
            }
        break;    
    }
?>