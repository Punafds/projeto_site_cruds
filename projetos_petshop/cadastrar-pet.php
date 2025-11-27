<h1>Cadastrar Pet</h1>

<?php
// Buscar clientes para o SELECT
$sql = "SELECT id_cliente, nome_cliente FROM cliente ORDER BY nome_cliente";
$res = $conn->query($sql);
?>

<form action="?page=salvar-pet" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome do Pet
            <input type="text" name="nome_pet" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label>Espécie</label>
        <select name="especie_pet" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
            <option value="Pássaro">Pássaro</option>
            <option value="Coelho">Coelho</option>
            <option value="Hamster">Hamster</option>
            <option value="Outro">Outro</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Raça</label>
        <select name="raca_pet" class="form-control" required>
            <option value="">Selecione...</option>
            <option value="Vira-lata">Vira-lata</option>
            <option value="Pinscher">Pinscher</option>
            <option value="Poodle">Poodle</option>
            <option value="Shih-tzu">Shih-tzu</option>
            <option value="Labrador">Labrador</option>
            <option value="Bulldog">Bulldog</option>
            <option value="SRD (Sem Raça Definida)">SRD (Sem Raça Definida)</option>
            <option value="Persa">Persa</option>
            <option value="Siamês">Siamês</option>
            <option value="Maine Coon">Maine Coon</option>
            <option value="Não se aplica">Não se aplica</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Idade
            <input type="number" name="idade_pet" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Sexo
            <select name="sexo_pet" class="form-control">
                <option value="">Selecione</option>
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Cliente Responsável</label>
        <select name="id_cliente" class="form-control" required>
            <option value="">Selecione o Cliente</option>
            <?php while($cli = $res->fetch_object()){ ?>
                <option value="<?= $cli->id_cliente ?>">
                    <?= $cli->nome_cliente ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Cadastrar Pet</button>
        <a href="?page=index.php" class="btn btn-secondary">Voltar</a>
    </div>
</form>
