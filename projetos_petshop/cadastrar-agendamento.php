<h1>Cadastrar Agendamento</h1>

<form action="?page=salvar-agendamento" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- CLIENTE -->
    <div class="mb-3">
        <label class="form-label">Cliente</label>
        <select name="cliente_id" id="cliente_id" class="form-control" required>
            <option value="">Selecione o cliente</option>
            <?php
            $sql = "SELECT id_cliente, nome_cliente FROM cliente ORDER BY nome_cliente";
            $res = $conn->query($sql);
            while($row = $res->fetch_object()){
                echo "<option value='".$row->id_cliente."'>".$row->nome_cliente."</option>";
            }
            ?>
        </select>
    </div>

    <!-- PET -->
    <div class="mb-3">
        <label class="form-label">Pet</label>
        <select name="pet_id" id="pet_id" class="form-control" required>
            <option value="">Selecione o cliente primeiro</option>
        </select>
    </div>

    <!-- SERVIÇO -->
    <div class="mb-3">
        <label class="form-label">Serviço</label>
        <select name="servico_id" class="form-control" required>
            <option value="">Selecione o serviço</option>
            <?php
            $sql = "SELECT id_servico, nome_servico FROM servico ORDER BY nome_servico";
            $res = $conn->query($sql);
            while($row = $res->fetch_object()){
                echo "<option value='".$row->id_servico."'>".$row->nome_servico."</option>";
            }
            ?>
        </select>
    </div>

    <!-- DATA -->
    <div class="mb-3">
        <label class="form-label">Data</label>
        <input type="date" name="data_agendamento" class="form-control" required>
    </div>

    <!-- HORA -->
    <div class="mb-3">
        <label class="form-label">Hora</label>
        <input type="time" name="hora_agendamento" class="form-control" required>
    </div>

    <!-- STATUS -->
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-control" required>
            <option value="pendente">Pendente</option>
            <option value="concluido">Concluído</option>
            <option value="cancelado">Cancelado</option>
        </select>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Cadastrar Agendamento</button>
        <a href="?page=listar-agendamento" class="btn btn-secondary">Voltar</a>
    </div>
</form>

<script>
// Array de pets do PHP
const pets = <?php
$sql = "SELECT id_pet, nome_pet, cliente_id_cliente FROM pet";
$res = $conn->query($sql);
$pet_array = [];
while($p = $res->fetch_object()){
    $pet_array[] = [
        'id_pet' => (int)$p->id_pet,
        'nome_pet' => $p->nome_pet,
        'cliente_id' => (int)$p->cliente_id_cliente
    ];
}
echo json_encode($pet_array);
?>;

// Atualiza select de pets ao escolher cliente
document.getElementById('cliente_id').addEventListener('change', function() {
    const cliente_id = parseInt(this.value);
    const petSelect = document.getElementById('pet_id');
    petSelect.innerHTML = '';

    const petsCliente = pets.filter(p => p.cliente_id === cliente_id);

    if(petsCliente.length > 0){
        // Adiciona opção padrão se houver mais de um pet
        if(petsCliente.length > 1){
            const defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.textContent = 'Selecione o pet';
            petSelect.appendChild(defaultOption);
        }

        petsCliente.forEach(pet => {
            const opt = document.createElement('option');
            opt.value = pet.id_pet;
            opt.textContent = pet.nome_pet;
            petSelect.appendChild(opt);
        });

        // Seleciona automaticamente se houver apenas um pet
        if(petsCliente.length === 1){
            petSelect.selectedIndex = 0;
        }

    } else {
        petSelect.innerHTML = '<option value="">Nenhum pet cadastrado para este cliente</option>';
    }
});
</script>
