<h1>Cadastrar Serviço</h1>

<form action="?page=salvar-servico" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Nome do Serviço -->
    <div class="mb-3">
        <label>Nome do Serviço</label>
        <select name="nome_servico" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="Banho">Banho</option>
            <option value="Tosa">Tosa</option>
            <option value="Banho e Tosa">Banho e Tosa</option>
            <option value="Consulta Veterinária">Consulta Veterinária</option>
            <option value="Vacinação">Vacinação</option>
            <option value="Hidratação">Hidratação</option>
            <option value="Desembolo">Desembolo</option>
        </select>
    </div>

    <!-- Descrição -->
    <div class="mb-3">
        <label>Descrição</label>
        <select name="descricao_servico" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="Serviço simples">Serviço simples</option>
            <option value="Serviço completo">Serviço completo</option>
            <option value="Serviço premium">Serviço premium</option>
            <option value="Atendimento rápido">Atendimento rápido</option>
            <option value="Atendimento especializado">Atendimento especializado</option>
        </select>
    </div>

    <!-- Valor -->
    <div class="mb-3">
        <label>Valor (R$)</label>
        <select name="valor_servico" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="20">20,00</option>
            <option value="30">30,00</option>
            <option value="40">40,00</option>
            <option value="50">50,00</option>
            <option value="60">60,00</option>
            <option value="80">80,00</option>
            <option value="100">100,00</option>
        </select>
    </div>

    <!-- Duração -->
    <div class="mb-3">
        <label>Duração Estimada (minutos)</label>
        <select name="duracao_servico" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="15">15 minutos</option>
            <option value="30">30 minutos</option>
            <option value="45">45 minutos</option>
            <option value="60">60 minutos</option>
            <option value="90">90 minutos</option>
        </select>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Cadastrar Serviço</button>
        <a href="?page=index.php" class="btn btn-secondary">Voltar</a>
    </div>
</form>
