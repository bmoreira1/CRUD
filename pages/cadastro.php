<h1>Novo Usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="senha">
    </div>

    <div class="mb-3">
        <label for="dataNasc">Data Nascimento</label>
        <input type="date" class="form-control" name="dataNasc">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Enviar Dados
        </button>
    </div>
</form>