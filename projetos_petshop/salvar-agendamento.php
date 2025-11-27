<?php 
switch ($_REQUEST['acao']) {

    case 'cadastrar':

        $cliente   = $_POST['cliente_id'];
        $pet       = $_POST['pet_id'];
        $servico   = $_POST['servico_id'];
        $data      = $_POST['data_agendamento'];
        $hora      = $_POST['hora_agendamento'];
        $status    = $_POST['status'];

        $sql = "INSERT INTO agendamento 
               (cliente_id_cliente, pet_id_pet, servico_id_servico, data_agendamento, hora_agendamento, status)
                VALUES 
               ('{$cliente}', '{$pet}', '{$servico}', '{$data}', '{$hora}', '{$status}')";

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Agendamento cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar agendamento!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
        }

    break;

    case 'editar':

        $cliente   = $_POST['cliente_id'];
        $pet       = $_POST['pet_id'];
        $servico   = $_POST['servico_id'];
        $data      = $_POST['data_agendamento'];
        $hora      = $_POST['hora_agendamento'];
        $status    = $_POST['status'];

        $sql = "UPDATE agendamento SET 
                    cliente_id_cliente='{$cliente}',
                    pet_id_pet='{$pet}',
                    servico_id_servico='{$servico}',
                    data_agendamento='{$data}',
                    hora_agendamento='{$hora}',
                    status='{$status}'
                WHERE id_agendamento=".$_REQUEST["id_agendamento"];

        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Agendamento editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
        } else {
            print "<script>alert('Erro ao editar agendamento!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
        }

    break;

    case 'excluir':

        $sql = "DELETE FROM agendamento WHERE id_agendamento=".$_REQUEST["id_agendamento"];
        $res = $conn->query($sql);

        if($res){
            print "<script>alert('Agendamento excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
        } else {
            print "<script>alert('Erro ao excluir agendamento!');</script>";
            print "<script>location.href='?page=listar-agendamento';</script>";
        }

    break;
}
?>
