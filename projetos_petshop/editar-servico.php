<h1>Editar Serviço</h1>

<?php
    $sql = "SELECT * FROM servico WHERE id_servico=" . $_REQUEST['id_servico'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-servico" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_servico" value="<?php echo $row->id_servico; ?>">

    <div class="mb-3">
        <label>Nome do Serviço
            <input type="text" name="nome_servico" class="form-control" 
                   value="<?php echo $row->nome_servico; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Descrição
            <input type="text" name="descricao_servico" class="form-control" 
                   value="<?php echo $row->descricao_servico; ?>">
        </label>
    </div>

    <div class="mb-3">
        <label>Preço
            <input type="number" step="0.01" name="preco_servico" class="form-control" 
                   value="<?php echo $row->preco_servico; ?>">
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Editar Serviço
        </button>

        <a href="?page=listar-servico" class="btn btn-secondary">
            Voltar
        </a>
    </div>
</form>
