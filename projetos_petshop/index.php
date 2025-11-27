<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AuQmia Petshop</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AuQmia Petshop</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>

        <!-- CLIENTE -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-cliente">Lista</a></li>
          </ul>
        </li>

        <!-- PETS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Pets
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-pet">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-pet">Lista</a></li>
          </ul>
        </li>

        <!-- SERVIÇOS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Serviços
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-servico">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-servico">Lista</a></li>
          </ul>
        </li>

        <!-- AGENDAMENTOS -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Agendamentos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-agendamento">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-agendamento">Lista</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container mt-3 flex-grow-1">
	<div class="row">
		<div class="col">

			<?php  
			include('config.php');

			switch (@$_REQUEST['page']) {

				// CLIENTES
				case 'cadastrar-cliente': include("cadastrar-cliente.php"); break;
				case 'listar-cliente': include("listar-cliente.php"); break;
				case 'editar-cliente': include("editar-cliente.php"); break;
				case 'salvar-cliente': include("salvar-cliente.php"); break;

				// PETS
				case 'cadastrar-pet': include("cadastrar-pet.php"); break;
				case 'listar-pet': include("listar-pet.php"); break;
				case 'editar-pet': include("editar-pet.php"); break;
				case 'salvar-pet': include("salvar-pet.php"); break;

				// SERVIÇOS
				case 'cadastrar-servico': include("cadastrar-servico.php"); break;
				case 'listar-servico': include("listar-servico.php"); break;
				case 'editar-servico': include("editar-servico.php"); break;
				case 'salvar-servico': include("salvar-servico.php"); break;

				// AGENDAMENTOS
				case 'cadastrar-agendamento': include("cadastrar-agendamento.php"); break;
				case 'listar-agendamento': include("listar-agendamento.php"); break;
				case 'editar-agendamento': include("editar-agendamento.php"); break;
				case 'salvar-agendamento': include("salvar-agendamento.php"); break;

				default:
					print "<h1>Bem-vindo ao AuQmia Pet 🐾</h1>";
			}
			?>

		</div>
	</div>
</div>

<footer class="bg-dark text-light py-4 mt-5">
	<div class="container text-center">
		<p>&copy; 2025 AuQmia Pet - Todos os direitos reservados</p>
	</div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
