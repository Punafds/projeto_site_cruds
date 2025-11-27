# Sistema PetShop – CRUD Completo  
Projeto desenvolvido com PHP, MySQL, XAMPP e Sublime Text.  
O sistema contém 4 CRUDs principais: Pets, Clientes, Serviços e Agendamentos.

---

# 🇧🇷 Versão em Português

## 📌 Funcionalidades
- CRUD de Pets  
- CRUD de Clientes  
- CRUD de Serviços  
- CRUD de Agendamentos  
- Estrutura organizada em pastas  
- Banco MySQL incluso  
- Funciona localmente via XAMPP  

---

## 🚀 Como Rodar o Projeto

### 1. Requisitos
- XAMPP (Apache + MySQL)  
- Sublime Text (ou outro editor)

### 2. Iniciar o servidor
1. Abra o XAMPP  
2. Ative:
   - Apache  
   - MySQL  

### 3. Importar o banco de dados
1. Vá ao **phpMyAdmin**  
2. Clique em **Importar**  
3. Selecione o arquivo:
   ```
   banco_petshop.sql
   ```
4. Clique em **Executar**

### 4. Colocar o projeto na pasta correta
Mover o projeto para:

```
C:\xampp\htdocs\petshop\
```

### 5. Acessar o sistema
No navegador:

```
http://localhost/petshop/
```

---

## 📂 Estrutura do Projeto

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

## 🔧 Melhorias Futuras
- Sistema de login  
- Dashboard  
- Upload de fotos dos pets  
- Gerenciamento de usuários  
- Modo escuro  
- Interface responsiva atualizada  

---

# 🇺🇸 English Version

## 📌 Features
- CRUD for Pets  
- CRUD for Clients  
- CRUD for Services  
- CRUD for Appointments  
- Organized folder structure  
- Included MySQL database  
- Runs locally using XAMPP  

---

## 🚀 How to Run the Project

### 1. Requirements
- XAMPP (Apache + MySQL)  
- Sublime Text (or any editor)

### 2. Start the local server
1. Open XAMPP  
2. Enable:
   - Apache  
   - MySQL  

### 3. Import the database
1. Go to **phpMyAdmin**  
2. Click **Import**  
3. Choose:
   ```
   banco_petshop.sql
   ```
4. Press **Execute**

### 4. Move project to the correct folder
Place it inside:

```
C:\xampp\htdocs\petshop\
```

### 5. Run the system
Open your browser and enter:

```
http://localhost/petshop/
```

---

## 📂 Project Structure

```
petshop/
│
├── conexao.php
├── index.php
│
├── pets/
│   ├── create.php
│   ├── edit.php
│   ├── delete.php
│   ├── list.php
│
├── clients/
│   ├── create.php
│   ├── edit.php
│   ├── delete.php
│   ├── list.php
│
├── services/
│   ├── create.php
│   ├── edit.php
│   ├── delete.php
│   ├── list.php
│
└── appointments/
    ├── create.php
    ├── edit.php
    ├── delete.php
    ├── list.php
```

---

## 🔧 Future Improvements
- Login system  
- Dashboard  
- Pet photo upload  
- User management  
- Dark mode  
- Responsive UI redesign  

---
