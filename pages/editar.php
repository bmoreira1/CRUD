<?php 
    $sql = "SELECT * FROM usuarios WHERE id=". $_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<h1>Editar Usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row->nome;?>">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" value="<?php echo $row->senha; ?>">
    </div>

    <div class="mb-3">
        <label for="dataNasc">Data Nascimento</label>
        <input type="date" class="form-control" name="dataNasc" value="<?php echo $row->dataNasc; ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar Dados
        </button>
    </div>
</form>