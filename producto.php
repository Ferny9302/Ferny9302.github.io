<?php    session_start();
if(isset($_SESSION['userdata'])){
  $user=$_SESSION['userdata'];
} else{
  header("Location: ./login.php");
}
include "./php/conexion.php";
$sql="select * from productos where id =".$_GET['id'];
$res= $conexion->query($sql) or die($conexion->error);
$fila=mysqli_fetch_row($res);
?>

<!DOCTYPE html>
<html lang="es">

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
    
    <?php include "./layouts/aside_user.php" ?>
    
    <main class="flex-grow-1">
      
      <?php include "./layouts/header_user.php" ?>
  
      
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Gamecube</h1>
        <div>
          <a href="./dash_user.php" class="btn btn-dark">Regresar</a>
        </div>
      </div>
      
      <section class="p-6 container">
        <div class="row">
          <div class="col-5 mt-2 p-2">
            <img src="./img2/<?php echo $fila[4]; ?>" height="600px" class="card-img-top" alt="...">
            </div>
            <div class="col-7">
                    <h1 class="card-title p-4"><?php echo $fila[1]; ?></h1>
                    <p class="card-text p-5"><?php echo $fila[3]; ?></p>
                    <h2 class="card-title p-4"><?php echo $fila[2]; ?></h2>
            </div>
        </div>
          
           
            
        
      </section>
    </main>
  </div>
  <div class="modal fade modal-lg" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./php/product-add.php" enctype="multipart/form-data" method="post" class="needs-validation" novalidate id="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Nombre del producto:</label>
                <input name="txtName1" id="" required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Precio:</label>
                <input name="txtPrecio" required min="1" type="number" class="form-control" placeholder="Inserta el precio">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mb-2">
                <label for="">Descripcion:</label>
                <input name="txtDes" required min="1" type="text" class="form-control" placeholder="Descripcion...">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Imagen:</label>
                <input accept="image/*" name="txtFile" required type="file" class="form-control" placeholder="">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Categoria:</label>
                <select name="txtCat" class="form-control" id="">
                </select>
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-dark" id="btnSave2">Guardar</button>
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