<?php 

include("conexao.php");
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Login</title>
</head>
<body>

<div class="container" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="container-fluid d-flex align-items-center">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Faça Seu Login</h1>
                </div>
                <div class="d-flex modal-body justify-content-center"">
                    <form action="">
                        <div class="form-group">
                            <label for="loginEmail">E-mail:</label>
                            <input type="email" class="form-control" id="loginEmail" name="loginEmail">
                        </div>
                        <div class="form-group">
                            <label for="loginSenha">Senha:</label>
                            <input type="password" class="form-control" id="loginSenha" name="loginSenha">
                        </div>

                        <button type="submit" class="d-block btn btn-primary mt-3">Entrar na Conta</button>
                        <small class="d-block form-text text-muted d-block">Esqueceu sua senha? <a href="">Clique aqui</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./javaScript/scripts.js"></script>
</body>

</html>