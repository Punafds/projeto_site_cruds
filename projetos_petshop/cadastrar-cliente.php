<h1>Cadastrar Cliente</h1>

<form action="?page=salvar-cliente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label class="form-label">Nome do Cliente</label>
        <input type="text" name="nome_cliente" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" name="telefone_cliente" class="form-control" placeholder="Telefone">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email_cliente" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Endereço</label>
        <input type="text" name="endereco_cliente" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">CPF (opcional)</label>
        <input type="text" name="cpf_cliente" class="form-control">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
        <a href="?page=listar-cliente" class="btn btn-secondary">Voltar</a>
    </div>
</form>
