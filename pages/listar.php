<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;
?>


<h1>Listar Usuario</h1>

<div>
    <h2>dados do formulário</h2>
    
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
            <td class="tabela"><?php echo $row->senha?></td>
            <td class="tabela"><?php echo $row->dataNasc?></td>
            <td class="tabela">
            
                <button onclick="confirmEditar(<?php echo $row->id; ?>)">
                    EDITAR
                </button>
                
                <button onclick="confirmDelete(<?php echo $row->id; ?>)">
                    DELETE
                </button>
            </td>
        </tr>
           <?php } ?>
        <?php } ?>
    </table>
</div>