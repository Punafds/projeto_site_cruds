# Especificação em Linguagem Algorítmica – Sistema PetShop CRUD

ALGORITMO SistemaPetShop
VAR
    opcao : INTEIRO

INÍCIO
    REPITA
        ESCREVA "1 - Pets"
        ESCREVA "2 - Tutores"
        ESCREVA "3 - Veterinários"
        ESCREVA "4 - Serviços"
        ESCREVA "0 - Sair"
        LEIA opcao

        CASO opcao
            1:
                CHAME MenuPets()
            2:
                CHAME MenuTutores()
            3:
                CHAME MenuVeterinarios()
            4:
                CHAME MenuServicos()
            OUTRO:
                ESCREVA "Opção inválida"
        FIMCASO

    ATÉ opcao = 0
FIM
------------------------------------------------------------

PROCEDIMENTO MenuPets()
VAR escolha : INTEIRO
INÍCIO
    ESCREVA "1 - Cadastrar"
    ESCREVA "2 - Listar"
    ESCREVA "3 - Editar"
    ESCREVA "4 - Excluir"
    ESCREVA "0 - Voltar"

    LEIA escolha

    CASO escolha
        1:
            CHAME CadastrarPet()
        2:
            CHAME ListarPets()
        3:
            CHAME EditarPet()
        4:
            CHAME ExcluirPet()
    FIMCASO
FIM
------------------------------------------------------------

PROCEDIMENTO CadastrarPet()
VAR
    nome, especie : CARACTERE
    idade, tutor : INTEIRO

INÍCIO
    LEIA nome
    LEIA especie
    LEIA idade
    LEIA tutor

    EXECUTE "INSERT INTO pets ..."
    ESCREVA "Pet cadastrado."
FIM
------------------------------------------------------------

PROCEDIMENTO ListarPets()
INÍCIO
    EXECUTE "SELECT * FROM pets"
    EXIBA tabela
FIM
------------------------------------------------------------

PROCEDIMENTO EditarPet()
VAR id : INTEIRO
INÍCIO
    LEIA id
    EXECUTE "UPDATE pets ..."
    ESCREVA "Pet atualizado."
FIM
------------------------------------------------------------

PROCEDIMENTO ExcluirPet()
VAR id : INTEIRO
INÍCIO
    LEIA id
    EXECUTE "DELETE FROM pets WHERE id = id"
    ESCREVA "Pet removido."
FIM

------------------------------------------------------------
-- As demais entidades (Tutores, Serviços, Veterinários)
-- seguem o mesmo padrão estrutural.
