<h1>Editar Agendamento</h1>

<?php
    $sql = "SELECT * FROM agendamento WHERE id_agendamento=" . $_REQUEST['id_agendamento'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-agendamento" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_agendamento" value="<?php echo $row->id_agendamento; ?>">

    <div class="mb-3">
        <label>Cliente
            <select name="cliente_id_cliente" class="form-control">
                <?php
                    $sql_cliente = "SELECT * FROM cliente";
                    $res_cliente = $conn->query($sql_cliente);

                    while($cliente = $res_cliente->fetch_object()){
                        $selected = ($cliente->id_cliente == $row->cliente_id_cliente) ? "selected" : "";
                        print "<option value='{$cliente->id_cliente}' $selected>{$cliente->nome_cliente}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Serviço
            <select name="servico_id_servico" class="form-control">
                <?php
                    $sql_servico = "SELECT * FROM servico";
                    $res_servico = $conn->query($sql_servico);

                    while($servico = $res_servico->fetch_object()){
                        $selected = ($servico->id_servico == $row->servico_id_servico) ? "selected" : "";
                        print "<option value='{$servico->id_servico}' $selected>{$servico->nome_servico}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Data
            <input type="date" name="data_agendamento" class="form-control" value="<?php echo $row->data_agendamento; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Hora
            <input type="time" name="hora_agendamento" class="form-control" value="<?php echo $row->hora_agendamento; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="?page=listar-agendamento" class="btn btn-secondary">Voltar</a>
    </div>
</form>
