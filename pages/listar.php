<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
?>


<h1>Listar Usuario</h1>

<div class="container">
    <div class="mt-5">
        <h2 class="text-center">dados do formulário:</h2>
    </div>
    <div class="d-flex justify-content-center">
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>#ID</th>
                <th class="text-center">NOME</th>
                <th class="text-center">E-MAIL</th>
                <th class="text-center">SENHA</th>
                <th class="text-center">DATA DE NASCIMENTO</th>
                <th class="text-center">AÇÕES</th>
            </tr>
            <?php if ($qtd > 0) { ?>
                <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td class="text-center"><?php echo $row->id ?></td>
                <td><?php echo $row->nome ?></td>
                <td><?php echo $row->email?></td>
                <td><?php echo md5($row->senha);?></td>
                <td class="text-center"><?php echo date_format(date_create_from_format('Y-m-d', $row->dataNasc), 'd/m/Y');?></td>

                <td class="text-center">
                
                    <button class="btn btn-success btn-sm m-1" onclick="confirmEditar(<?php echo $row->id; ?>)">
                        EDITAR
                    </button>
                    
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $row->id; ?>)">
                        DELETE
                    </button>
                </td>
            </tr>
            <?php } ?>
            <?php } ?>
        </table>
    </div>
</div>