<h1>Listar Agendamentos</h1>

<?php
// Query corrigida com JOIN para trazer nome do cliente, nome do pet e nome do serviço
$sql = "
SELECT 
    ag.id_agendamento,
    c.nome_cliente,
    p.nome_pet,
    s.nome_servico,
    ag.data_agendamento,
    ag.hora_agendamento,
    ag.status
FROM agendamento ag
INNER JOIN cliente c ON ag.cliente_id_cliente = c.id_cliente
INNER JOIN pet p ON ag.pet_id_pet = p.id_pet
INNER JOIN servico s ON ag.servico_id_servico = s.id_servico
ORDER BY ag.data_agendamento, ag.hora_agendamento
";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

    print "<table class='table table-bordered table-striped table-hover'>";
    print "<thead>
        <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Pet</th>
            <th>Serviço</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>";
    print "<tbody>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>{$row->id_agendamento}</td>";
        print "<td>{$row->nome_cliente}</td>";
        print "<td>{$row->nome_pet}</td>";
        print "<td>{$row->nome_servico}</td>";
        print "<td>{$row->data_agendamento}</td>";
        print "<td>{$row->hora_agendamento}</td>";
        print "<td>{$row->status}</td>";
        print "<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar-agendamento&id_agendamento={$row->id_agendamento}';\">Editar</button>
            <button class='btn btn-danger' onclick=\"
                if(confirm('Tem certeza que deseja excluir?')){
                    location.href='?page=salvar-agendamento&acao=excluir&id_agendamento={$row->id_agendamento}';
                } else { return false; }
            \">Excluir</button>
        </td>";
        print "</tr>";
    }

    print "</tbody>";
    print "</table>";
    print "<a href='?page=index.php' class='btn btn-secondary'>Voltar</a>";
} else {
    print "<div class='alert alert-info' role='alert'>Não encontrou resultados.</div>";
    print "<a href='?page=index.php' class='btn btn-secondary'>Voltar</a>";
}
?>
