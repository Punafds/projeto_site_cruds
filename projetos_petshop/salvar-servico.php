<?php
    switch ($_REQUEST["acao"]) {

        case "cadastrar":
            $nome = $_POST["nome_servico"];
            $descricao = $_POST["descricao_servico"];
            $valor = $_POST["valor_servico"];
            $duracao = $_POST["duracao_servico"];

            $sql = "INSERT INTO servico (nome_servico, descricao_servico, valor_servico, duracao_servico)
                    VALUES ('{$nome}', '{$descricao}', '{$valor}', '{$duracao}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Serviço cadastrado com sucesso!')</script>";
                print "<script>location.href='?page=listar-servico';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar serviço!')</script>";
            }
        break;

        case "editar":
            $nome = $_POST["nome_servico"];
            $descricao = $_POST["descricao_servico"];
            $valor = $_POST["valor_servico"];
            $duracao = $_POST["duracao_servico"];

            $sql = "UPDATE servico SET
                    nome_servico='{$nome}',
                    descricao_servico='{$descricao}',
                    valor_servico='{$valor}',
                    duracao_servico='{$duracao}'
                    WHERE id_servico=".$_POST["id_servico"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Serviço editado com sucesso!')</script>";
                print "<script>location.href='?page=listar-servico';</script>";
            } else {
                print "<script>alert('Erro ao editar serviço!')</script>";
            }
        break;

        case "excluir":
            $sql = "DELETE FROM servico WHERE id_servico=".$_REQUEST["id_servico"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script>alert('Serviço excluído com sucesso!')</script>";
                print "<script>location.href='?page=listar-servico';</script>";
            } else {
                print "<script>alert('Erro ao excluir serviço!')</script>";
            }
        break;
    }
?>
