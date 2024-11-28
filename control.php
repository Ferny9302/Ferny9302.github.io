<?php session_start();
if(isset($_SESSION['userdata'])){
  $user=$_SESSION['userdata'];
} else{
  header("Location: ./login.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex"> 
        <!--sidebbar-->
        <aside class="bg-dark text-white vh-100" style="width: 20%;">
            <h2 class="p-4 h4">
                <img width="50px" src="./img/nogordas-removebg-preview.png" alt="" class="mx-1">
                Control
            </h2>
            <ul class="nav flex-column">
              <li class="nav-item h5 mx-2"><a href="./control.php" class="nav-link text-white"><i class="bi bi-house mx-2"></i>Inicio</a></li>
              <li class="nav-item h5 mx-2"><a href="./dashboard.php" class="nav-link text-white"><i class="bi bi-controller mx-2"></i>Productos</a></li>
              <li class="nav-item h5 mx-2"><a href="./users.php" class="nav-link text-white"><i class="bi bi-people mx-2"></i>Usuario</a></li>
              <li class="nav-item h5 mx-2"><a href="./shopping.php" class="nav-link text-white"><i class="bi bi-box mx-2"></i>Pedidos</a></li>
              <li class="nav-item h5 mx-2"><a href="./proveedor.php" class="nav-link text-white"><i class="bi bi-person-lines-fill mx-2"></i>Proveedores</a></li>
              
              
            </ul>
        </aside>
        <!--end sidebbar-->

        <main class="flex-grow-1">
            <!--hedear-->
            <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 py-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PlayCode</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item mx-4">
                <button type="button" class="btn btn-light position-relative">
                  <i class="bi bi-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  40
                  <span class="visually-hidden">unread messages</span>
                </span>
              </button></li>
              <li class="nav-item">
                
                <img src="./img/perfil_dashborad.webp" style="width: 30px;border-radius: 50%;border: 1px solid rgb(13, 106, 13);">
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $user['nombre'] ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i>&nbsp;Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./login.php"><i class="bi bi-box-arrow-left"></i>&nbsp;Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
            </header>
            <!--end hedear-->
            <!--Row stats-->
            <div class="row mx-4 px-4 my-4">
              <div class="col-3">
                <div class="card">
                  <div class="card-body">
                    <h6><i class="bi bi-wallet"></i>&nbsp;Ingresos Mensuales</h6>
                    <h6 class="h3 text-center">$30,000.00</h6>
                  </div>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="card">
                  <div class="card-body">
                    <h6><i class="bi bi-people-fill"></i>&nbsp;Total de clientes</h6>
                    <h6 class="h3 text-center">20</h6>
                  </div>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="card">
                  <div class="card-body">
                    <h6><i class="bi bi-controller"></i>&nbsp;Venta de controles</h6>
                    <h6 class="h3 text-center">40</h6>
                  </div>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="card">
                  <div class="card-body">
                    <h6><i class="bi bi-cash-stack"></i>&nbsp;Deudores</h6>
                    <h6 class="h3 text-center">$00.00</h6>
                  </div>
                  
                </div>
              </div>
            </div>
            <!--end Row stats-->
            <!--charts-->
            <div class="row mx-4 px-4 my-4">
              <div class="col-6">
                <div class="card">
                  <div class="card-header">Ingresos mensuales</div>
                  <div class="card-body">
                    <canvas id="chartIngresos"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card">
                  <div class="card-header">controles por categorias</div>
                  <div class="card-body">
                    <canvas id="chartCategorias"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!--end charts-->
        </main>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>