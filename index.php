<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Controle de Ordens</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-xxl navbar-dark bg-dark" aria-label="Seventh navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Expand at xxl</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl" aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleXxl">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
    <main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>Ordens Abertas</h1>
  </div>
</main>
<div class="container mt-4">
        <h2 class="mb-3">Lista de Registros</h2>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Produtos / Serviços</th>
                    <th>Responsáveis</th>
                    <th>Cliente</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span class="badge bg-success">Concluído</span></td>
                    <td>29/01/2025</td>
                    <td>Instalação de rede</td>
                    <td>Cabeamento e Switch</td>
                    <td>João Silva</td>
                    <td>Empresa XYZ</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td><span class="badge bg-warning text-dark">Pendente</span></td>
                    <td>30/01/2025</td>
                    <td>Manutenção de servidor</td>
                    <td>Upgrade de memória</td>
                    <td>Maria Souza</td>
                    <td>Tech Solutions</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>