<?php 
    $sql = "SELECT * FROM usuarios WHERE id=". $_REQUEST["id"];

    $res = $conn->query($sql);

    $value = $res->fetch_object();
?>

<h1>Editar Usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nick" value="<?php echo $value->nome;?>">
    </div>
 
        <div class="mb-3" require>
        <label for="categoria">Categoria</label>
        <select class="form-control" name="categoria" id="" value="<?php echo $value->categoria; ?>">
            <option value="">- Selecione -</option>
            <option value="basico">Bascio</option>
            <option value="intermediario">Intermediário</option>
            <option value="premium">Premium</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email" value="<?php echo $value->email; ?>">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha" value="<?php echo $value->senha; ?>">
    </div>

    <div class="mb-3">
        <label for="dataNasc">Data Nascimento</label>
        <input type="date" class="form-control" name="dataNasc" value="<?php echo $value->dataNasc; ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar Dados
        </button>
    </div>
</form>