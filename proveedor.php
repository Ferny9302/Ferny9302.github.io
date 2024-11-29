<?php session_start();
if(isset($_SESSION['userdata'])){
  $user=$_SESSION['userdata'];
} else{
  header("Location: ./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
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
      <!--Title section-->
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Proveedores</h1>
        <div>
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalAdd">Agregar</button>
        </div>
      </div>
      <!--end Title section-->
      <section class="mt-4 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID_proveedor</th>
              <th scope="col">Nombre</th>
              <th scope="col">Telefono</th>
              <th scope="col">Producto</th>
              <th scope="col">Fecha del pedido</th>
              <th scope="col">Pago</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>bryan</td>
              <td>636-128-4704</td>
              <td>Gamcube controler</td>
              <td>22/11/2024</td>
              <td>$5000.00</td>
              <td class="text-end">
                <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash2"></i>
                </button>
                <button class="btn btn-outline-warning btn-sm mx-2">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-outline-dark btn-sm">
                  <i class="bi bi-eye"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>

  <!-- Modal -->
  <div class="modal fade modal-lg" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar inventario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./php/user_insert.php" method="post" class="needs-validation" novalidate id="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Nombre del proveedor:</label>
                <input name="txtName" id="" required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            
              <div class="col-6 mb-2">
                <label for="">Telefono:</label>
                <input name="txtName" id="" required type="text" class="form-control" placeholder="Inserta el telefono">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              </div>
            <div class="row">
              <div class="col-12 mb-2">
                <label for="">Producto:</label>
                <input name="txtEmail" required type="text" class="form-control" placeholder="Inserte el producto">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Fecha del pedido:</label>
                <input name="txtEmail" required type="date" class="form-control" placeholder="Inserte la fecha">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Pago:</label>
                <input name="txtEmail" required min="1" type="number" class="form-control" placeholder="Inserte el pago">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-dark" id="btnSave">Guardar</button>
            </div>
        </form>
        
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="./js/users.js"></script>


</body>
</body>

</html>