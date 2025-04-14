<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Loca dos veículos</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- bootstrap icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ce ese ese -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuário (adm) -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de locadora de veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size:25px"></i>
                        </span>
                        <!-- Bem vindom [usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>User</strong>!
                        </span>
                        <!-- bomtão di logaut -->
                        <a href="login.php" class="btn btn-outline-danger d-flex align-items-center gap-1"><i class="bi bi-box-arrow-right"></i> Sair</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row same-height-row">
            <!-- Calculadora de aluguel -->
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Calcular a previsão de aluguel</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">Tipo:</label>
                                <select name="tipo" id="tipo" class="form-select" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="caminhao">Caminhão</option>
                                    <option value="maritimo">Barco</option>
                                    <option value="subaquatico">Submarino</option>
                                    <option value="aereo">Aeronave</option>
                                    <option value="animal">Animal</option>
                                    <option value="nave">Nave Espacial</option>
                                    <option value="mistico">Criatura Mística</option>
                                    <option value="tecnologico">Dispositivo Portátil de Deslocamento</option>
                                    <option value="null" selected hidden></option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dias" class="input-label">Tempo em dias: </label>
                                <input type="number" name="dias" id="tempo" class="form-control" value="1" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- tabela de veículos -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Veículos cadastrados</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Críatura Mística</td>
                                        <td>Bisão voador</td>
                                        <td>Appa</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                Alugado
                                            </span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Aeronave</td>
                                        <td>A-10 Warthog</td>
                                        <td>SPEU5A32</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Gol</td>
                                        <td>MFHG2A23</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nave Espacial</td>
                                        <td>20XX INTRASTELLAR</td>
                                        <td>18553-EA-BR</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível
                                            </span>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>