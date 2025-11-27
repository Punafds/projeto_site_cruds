# projeto_site_cruds
Sistema de Petshop — 4 CRUDs (PHP + MySQL + Bootstrap)

Este projeto é um Sistema de Petshop desenvolvido em PHP, utilizando MySQL como banco de dados e Bootstrap como base de interface.
O objetivo é permitir a gestão simples e eficiente das principais entidades de um petshop.

O sistema possui quatro CRUDs completos:

Clientes

Pets

Serviços

Agendamentos

O projeto inclui conexão com o banco via config.php, telas separadas por módulos e um arquivo SQL pronto para importação.

Tecnologias Utilizadas

PHP 7+ / 8+

MySQL (phpMyAdmin)

Bootstrap

HTML5 / CSS3

XAMPP

Sublime Text

Estrutura do Projeto
projetos_petshop/
 ├── agendamento/
 │     ├── cadastrar-agendamento.php
 │     ├── listar-agendamento.php
 │     └── salvar-agendamento.php
 │
 ├── cliente/
 │     ├── cadastrar-cliente.php
 │     ├── listar-cliente.php
 │     └── salvar-cliente.php
 │
 ├── pet/
 │     ├── cadastrar-pet.php
 │     ├── listar-pet.php
 │     └── salvar-pet.php
 │
 ├── servico/
 │     ├── cadastrar-servico.php
 │     ├── listar-servico.php
 │     └── salvar-servico.php
 │
 ├── config.php
 ├── index.php
 ├── bancodedados.sql
 └── style.css


Cada módulo possui 3 arquivos:

cadastrar-* → formulário

listar-* → tabela com registros

salvar-* → inserção e atualização

O arquivo config.php é responsável pela conexão com o banco.

Configuração do Banco de Dados

Abra o XAMPP Control Panel

Clique em Start no Apache e no MySQL

Acesse o phpMyAdmin:

http://localhost/phpmyadmin


Clique em "Novo" e crie o banco:

petshop


Vá na aba Importar

Envie o arquivo bancodedados.sql

O arquivo SQL contém:

Tabela clientes

Tabela pets

Tabela servicos

Tabela agendamentos

Como Rodar o Projeto
1. Mover para o XAMPP

Coloque a pasta projetos_petshop dentro de:

C:/xampp/htdocs/

2. Iniciar o Servidor

No XAMPP:

Apache → Start

MySQL → Start

3. Acessar no Navegador
http://localhost/projetos_petshop


O sistema abrirá na tela inicial (index.php).

CRUDs Disponíveis
Clientes

Cadastrar

Listar

Editar

Excluir
Campos usados: nome, telefone, email, endereço.

Pets

Pets vinculados a um cliente

Cadastrar

Listar

Atualizar

Excluir
Campos: nome do pet, espécie, raça, idade, cliente responsável.

Serviços

Cadastro de serviços oferecidos pelo petshop
Exemplos: banho, tosa, consulta.

Agendamentos

Envolve: Pet + Serviço + Data + Horário.
Possui CRUD completo.

Edição no Sublime Text

Abra:

Sublime Text → File → Open Folder →

C:/xampp/htdocs/projetos_petshop

Sobre a Interface

O sistema utiliza:

HTML simples

Estilos no arquivo style.css

Organização inspirada no Bootstrap

Tabelas estruturadas para listagens

Formulários básicos por CRUD

Possíveis melhorias:

Navbar moderna

Layout com cards

Tabelas mais estilizadas

Botões com ícones

Melhor responsividade

Autor

Projeto desenvolvido para fins acadêmicos e prática de CRUDs utilizando PHP + MySQL.
Caso queira, posso adicionar o seu nome e seu GitHub aqui.

Possíveis Melhorias Futuras

Login e controle de acesso

Dashboard inicial

Upload de fotos dos pets

Sistema de usuários

Modo escuro

Layout moderno e totalmente responsivo

English Version
PetShop System — 4 CRUDs (PHP + MySQL + Bootstrap)

This project is a PetShop Management System developed in PHP, using MySQL as the database and Bootstrap for interface structure.
Its goal is to provide simple and efficient management of the main entities of a petshop.

The system includes four complete CRUD modules:

Clients

Pets

Services

Appointments

The project also includes database connection via config.php, modular screens and a ready-to-import SQL file.

Technologies Used

PHP 7+ / 8+

MySQL (phpMyAdmin)

Bootstrap

HTML5 / CSS3

XAMPP

Sublime Text

Project Structure
projetos_petshop/
 ├── agendamento/
 ├── cliente/
 ├── pet/
 ├── servico/
 ├── config.php
 ├── index.php
 ├── bancodedados.sql
 └── style.css


Each module contains:

cadastrar-* → form

listar-* → record table

salvar-* → insert/update

Database Setup

Open XAMPP

Start Apache and MySQL

Access phpMyAdmin:

http://localhost/phpmyadmin


Create a database named:

petshop


Import the file bancodedados.sql

How to Run

Move the project to:

C:/xampp/htdocs/projetos_petshop


Start Apache + MySQL

Open:

http://localhost/projetos_petshop

Available CRUDs

Clients

Pets

Services

Appointments

Each module contains create, list, update and delete operations.

Editing the Project

Open in Sublime Text → Open Folder → select:

C:/xampp/htdocs/projetos_petshop

Future Improvements

Login system

Dashboard

Pet photo upload

User management

Dark mode

Responsive UI redesign
