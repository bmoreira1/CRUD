function confirmEditar(id) {
        location.href='?page=editar&id=' + id;
}

function confirmDelete(id) {
    if(confirm('Tem certeza que deseja excluir?')){
        location.href='?page=salvar&acao=delete&id=' + id;
    } 
}