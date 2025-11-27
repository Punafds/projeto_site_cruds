<h1>Listar Pets</h1>

<?php
// Consulta com JOIN para mostrar o nome do dono
$sql = "SELECT 
            pet.id_pet,
            pet.nome_pet,
            pet.raca_pet,
            pet.especie_pet,
            pet.idade_pet,
            cliente.nome_cliente
        FROM pet
        LEFT JOIN cliente 
            ON pet.cliente_id_cliente = cliente.id_cliente";

$res = $conn->query($sql);

// Se a query deu erro (tabela não existe, nome errado, etc.)
if (!$res) {
    echo "<div class='alert alert-danger'>
            Erro na consulta SQL: " . $conn->error . "
          </div>";
    exit;
}

$qtd = $res->num_rows;

if ($qtd > 0) {

    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

    print "<table class='table table-bordered table-striped table-hover'>";
    print "<thead>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Raça</th>";
    print "<th>Espécie</th>";
    print "<th>Idade</th>";
    print "<th>Dono</th>";
    print "<th>Ações</th>";
    print "</tr>";
    print "</thead>";

    print "<tbody>";
    
    while ($row = $res->fetch_object()) {

        $dono = $row->nome_cliente ?? "Sem dono";

        print "<tr>";
        print "<td>{$row->id_pet}</td>";
        print "<td>{$row->nome_pet}</td>";
        print "<td>{$row->raca_pet}</td>";
        print "<td>{$row->especie_pet}</td>";
        print "<td>{$row->idade_pet}</td>";
        print "<td>{$dono}</td>";

        print "<td>
            <button class='btn btn-success'
                onclick=\"location.href='?page=editar-pet&id_pet={$row->id_pet}'\">
                Editar
            </button>

            <button class='btn btn-danger'
                onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvar-pet&acao=excluir&id_pet={$row->id_pet}';
                }\">
                Excluir
            </button>
        </td>";

        print "</tr>";
    }

    print "</tbody>";
    print "</table>";

    print "<a href='index.php' class='btn btn-secondary'>Voltar</a>";

} else {
    print "<div class='alert alert-info'>Não encontrou resultado.</div>";
    print "<a href='index.php' class='btn btn-secondary'>Voltar</a>";
}
?>
