<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
?>


<h1>Listar Usuario</h1>

<div>
    <div class=" mt-5">
        <h2 class="text-center">dados do formulário:</h2>
    </div>
    <div class="d-flex justify-content-center">
        <table class="tabela">
            <tr>
                <th class="cabecalho">NOME</th>
                <th class="cabecalho">E-MAIL</th>
                <th class="cabecalho">SENHA</th>
                <th class="cabecalho">DATA DE NASCIMENTO</th>
            </tr>
            <?php if ($qtd > 0) { ?>
                <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td class="tabela"><?php echo $row->nome ?></td>
                <td class="tabela"><?php echo $row->email?></td>
                <td class="tabela"><?php echo md5($row->senha);?></td>
                <td class="tabela"><?php echo date_format(date_create_from_format('Y-m-d', $row->dataNasc), 'd/m/Y');?></td>

                <td class="tabela">
                
                    <button class="btn btn-success btn-sm" onclick="confirmEditar(<?php echo $row->id; ?>)">
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