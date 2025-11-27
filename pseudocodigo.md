# Pseudocódigo – Sistema PetShop CRUD

## Estrutura Geral
INÍCIO
    CARREGAR página inicial do sistema
    EXIBIR menu com opções:
        1 - Gerenciar Pets
        2 - Gerenciar Tutores
        3 - Gerenciar Veterinários
        4 - Gerenciar Serviços
        0 - Sair

    LER opção escolhida

    ENQUANTO opção != 0 FAÇA
        SE opção == 1 ENTÃO
            EXECUTAR menuPets()
        SENÃO SE opção == 2 ENTÃO
            EXECUTAR menuTutores()
        SENÃO SE opção == 3 ENTÃO
            EXECUTAR menuVeterinarios()
        SENÃO SE opção == 4 ENTÃO
            EXECUTAR menuServicos()
        SENÃO
            EXIBIR "Opção inválida."
        FIM SE

        EXIBIR menu novamente
        LER nova opção
    FIM ENQUANTO

FIM
------------------------------------------------------------

## Função menuPets()
INÍCIO
    EXIBIR submenu:
        1 - Cadastrar Pet
        2 - Listar Pets
        3 - Editar Pet
        4 - Excluir Pet
        0 - Voltar

    LER escolha

    SE escolha == 1 ENTÃO
        EXECUTAR cadastrarPet()
    SENÃO SE escolha == 2 ENTÃO
        EXECUTAR listarPets()
    SENÃO SE escolha == 3 ENTÃO
        EXECUTAR editarPet()
    SENÃO SE escolha == 4 ENTÃO
        EXECUTAR excluirPet()
    FIM SE
FIM
------------------------------------------------------------

## Função cadastrarPet()
INÍCIO
    LER nome
    LER espécie
    LER idade
    LER id_tutor

    CONECTAR ao banco
    EXECUTAR INSERT INTO pets (...)
    EXIBIR "Pet cadastrado com sucesso."
FIM
------------------------------------------------------------

## Função listarPets()
INÍCIO
    CONECTAR ao banco
    EXECUTAR SELECT * FROM pets
    EXIBIR tabela de pets
FIM
------------------------------------------------------------

## Função editarPet()
INÍCIO
    LER id_pet
    CONECTAR ao banco
    VERIFICAR se id existe

    LER novos dados
    EXECUTAR UPDATE pets SET (...)
    EXIBIR "Pet atualizado."
FIM
------------------------------------------------------------

## Função excluirPet()
INÍCIO
    LER id_pet
    CONECTAR ao banco
    EXECUTAR DELETE FROM pets WHERE id = id_pet
    EXIBIR "Pet removido."
FIM
------------------------------------------------------------

-- O mesmo fluxo se repete para Tutores, Veterinários e Serviços, mudando apenas os campos.
