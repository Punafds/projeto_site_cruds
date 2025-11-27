<h1>Salvar Pet</h1>
<?php
    switch ($_REQUEST['acao']) {

        // CADASTRAR PET
        case 'cadastrar':
            $nome = $_POST['nome_pet'];
            $especie = $_POST['especie_pet'];
            $raca = $_POST['raca_pet'];
            $idade = $_POST['idade_pet'];
            $cliente = $_POST['id_cliente'];

            $sql = "INSERT INTO pet (nome_pet, especie_pet, raca_pet, idade_pet, cliente_id_cliente)
                    VALUES ('{$nome}', '{$especie}', '{$raca}', '{$idade}', '{$cliente}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Pet cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-pet';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar pet!');</script>";
                print "<script>location.href='?page=listar-pet';</script>";
            }
        break;


        // EDITAR PET
        case 'editar':
            $nome = $_POST['nome_pet'];
            $especie = $_POST['especie_pet'];
            $raca = $_POST['raca_pet'];
            $idade = $_POST['idade_pet'];
            $cliente = $_POST['cliente_id_cliente'];

            $sql = "UPDATE pet SET 
                        nome_pet='{$nome}', 
                        especie_pet='{$especie}', 
                        raca_pet='{$raca}', 
                        idade_pet='{$idade}',
                        cliente_id_cliente='{$cliente}'
                    WHERE id_pet=".$_REQUEST['id_pet'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Pet editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-pet';</script>";
            } else {
                print "<script>alert('Erro ao editar pet!');</script>";
                print "<script>location.href='?page=listar-pet';</script>";
            }
        break;


        // EXCLUIR PET
        case 'excluir':
            $sql = "DELETE FROM pet WHERE id_pet=".$_REQUEST['id_pet'];
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Pet excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-pet';</script>";
            } else {
                print "<script>alert('Erro ao excluir pet!');</script>";
                print "<script>location.href='?page=listar-pet';</script>";
            }
        break;
    }
?>
<a href="?page=index.php" class="btn btn-secondary">Voltar</a>
