<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
?>


<h1>Listar Usuario</h1>

<div class="panel">
    <div class="mt-2">
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>#ID</th>

                <th class="text-center">NOME</th>
                <th class="text-center">E-MAIL</th>
                <th class="text-center">DATA DE NASCIMENTO</th>
                <th class="text-center">AÇÕES</th>
            </tr>
            <?php if ($qtd > 0) { ?>
                <?php while($value = $res->fetch_object()) { ?>
            <tr>
                <td class="text-center"><?php echo $value->id; ?></td>
                <td><?php echo $value->nome; ?></td>
                <td><?php echo $value->email; ?></td>
                <td class="text-center"><?php echo date_format(date_create_from_format('Y-m-d', $value->dataNasc), 'd/m/Y');?></td>

                <td class="text-center">
                
                    <button class="btn btn-success btn-sm m-1" onclick="confirmEditar(<?php echo $value->id; ?>)">
                        EDITAR
                    </button>
                    
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $value->id; ?>)">
                        DELETE
                    </button>
                </td>
            </tr>
                <?php } ?>
            <?php } ?>
        </table>
    </div>
</div>