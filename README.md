# PetShop CRUD System

A simple CRUD-based project developed using **PHP**, **MySQL**, **XAMPP**, and **Sublime Text**.  
This system contains **4 CRUD modules**:  
- Pets  
- Clients  
- Services  
- Appointments  

It was created as an academic exercise to learn backend, database operations, and system organization.

---

## 📌 Features (English)

- CRUD for Pets
- CRUD for Clients
- CRUD for Services
- CRUD for Appointments
- Organized file structure
- MySQL database included
- Works locally on XAMPP

---

## 📌 Funcionalidades (Português)

- CRUD de Pets  
- CRUD de Clientes  
- CRUD de Serviços  
- CRUD de Agendamentos  
- Estrutura organizada em pastas  
- Banco MySQL incluso  
- Funciona localmente no XAMPP  

---

# How to Run the Project (English)

### 1. Install the required tools
You need:

- XAMPP (for Apache + MySQL)
- Sublime Text (or any editor)

### 2. Start the local server
1. Open XAMPP  
2. Enable:
   - Apache
   - MySQL

### 3. Import the database
1. Open **phpMyAdmin**  
2. Click **Import**  
3. Select the file:
   ```
   banco_petshop.sql
   ```
4. Click **Execute**

### 4. Place the project in the correct folder
Move the project folder to:

```
C:\xampp\htdocs\petshop\
```

### 5. Run the system
Open in your browser:

```
http://localhost/petshop/
```

Done! The system is ready.

---

# Como Rodar o Projeto (Português)

### 1. Baixar as ferramentas necessárias
Você precisa de:

- XAMPP (Apache + MySQL)
- Sublime Text (ou outro editor)

### 2. Iniciar o servidor local
1. Abra o XAMPP  
2. Ative:
   - Apache  
   - MySQL  

### 3. Importar o banco de dados
1. Abra o **phpMyAdmin**  
2. Clique em **Importar**  
3. Selecione o arquivo:
   ```
   banco_petshop.sql
   ```
4. Clique em **Executar**

### 4. Colocar o projeto na pasta correta
Coloque o projeto em:

```
C:\xampp\htdocs\petshop\
```

### 5. Abrir o sistema
No navegador digite:

```
http://localhost/petshop/
```

Pronto! O sistema estará funcionando.

---

# Project Structure

```
petshop/
│
├── conexao.php
├── index.php
│
├── pets/
│   ├── cadastrar.php
│   ├── editar.php
│   ├── excluir.php
│   ├── listar.php
│
├── clientes/
│   ├── cadastrar.php
│   ├── editar.php
│   ├── excluir.php
│   ├── listar.php
│
├── servicos/
│   ├── cadastrar.php
│   ├── editar.php
│   ├── excluir.php
│   ├── listar.php
│
└── agendamentos/
    ├── cadastrar.php
    ├── editar.php
    ├── excluir.php
    ├── listar.php
```

---

# Future Improvements (English)

- Login system  
- Dashboard  
- Photo upload for pets  
- User management  
- Dark mode  
- Responsive UI redesign  

---

# Melhorias Futuras (Português)

- Sistema de login  
- Dashboard  
- Upload de foto dos pets  
- Gerenciamento de usuários  
- Modo escuro  
- Interface mais responsiva  

---
