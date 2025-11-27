<h1>Listar Serviços</h1>

<?php
    // Seleciona todos os serviços
    $sql = "SELECT * FROM servico";

    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {

        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

        print "<table class='table table-bordered table-striped table-hover'>";
        print "<thead>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Valor</th>";
        print "<th>Descrição</th>";
        print "<th>Ações</th>";
        print "</tr>";
        print "</thead>";

        print "<tbody>";

        while ($row = $res->fetch_object()) {

            print "<tr>";
            print "<td>{$row->id_servico}</td>";
            print "<td>{$row->nome_servico}</td>";
            print "<td>R$ " . number_format($row->valor_servico, 2, ',', '.') . "</td>";
            print "<td>{$row->descricao_servico}</td>";

            // Botões de ação
            print "<td>
                    <button class='btn btn-success'
                        onclick=\"location.href='?page=editar-servico&id_servico={$row->id_servico}'\">
                        Editar
                    </button>

                    <button class='btn btn-danger'
                        onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                            location.href='?page=salvar-servico&acao=excluir&id_servico={$row->id_servico}';
                        }\">
                        Excluir
                    </button>
                </td>";

            print "</tr>";
        }

        print "</tbody>";
        print "</table>";

        print "<a href='?page=index.php' class='btn btn-secondary'>Voltar</a>";

    } else {
        print "<div class='alert alert-info'>Não encontrou resultado.</div>";
        print "<a href='?page=index.php' class='btn btn-secondary'>Voltar</a>";
    }
?>
