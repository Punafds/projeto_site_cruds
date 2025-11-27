<h1>Editar Pet</h1>

<?php
    $sql = "SELECT * FROM pet WHERE id_pet=" . $_REQUEST['id_pet'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-pet" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_pet" value="<?php echo $row->id_pet; ?>">

    <div class="mb-3">
        <label>Nome do Pet
            <input type="text" name="nome_pet" class="form-control"
                   value="<?php echo $row->nome_pet; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Espécie
            <input type="text" name="especie_pet" class="form-control"
                   value="<?php echo $row->especie_pet; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Raça
            <input type="text" name="raca_pet" class="form-control"
                   value="<?php echo $row->raca_pet; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Idade
            <input type="number" name="idade_pet" class="form-control"
                   value="<?php echo $row->idade_pet; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Dono (Cliente)
            <select name="cliente_id_cliente" class="form-control">
                <option value="">Selecione o dono</option>
                <?php
                    $sql_cli = "SELECT * FROM cliente";
                    $res_cli = $conn->query($sql_cli);

                    while($cli = $res_cli->fetch_object()){
                        $selected = ($cli->id_cliente == $row->cliente_id_cliente) ? "selected" : "";
                        print "<option value='{$cli->id_cliente}' $selected>{$cli->nome_cliente}</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="?page=listar-pet" class="btn btn-secondary">Voltar</a>
    </div>
</form>
