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
        <?php include "./layouts/aside.php" ?>
        <!--end sidebbar-->

        <main class="flex-grow-1">
            <!--hedear-->
            <?php include "./layouts/header.php" ?>
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