
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
    
    <aside class="bg-dark text-white vh-100" style="width: 20%;">
      <h2 class="p-4 h4">
        <img width="50px" src="" alt="" class="mx-1">
        Control
      </h2>
      <ul class="nav flex-column">
        <li class="nav-item h5 mx-2"><a href="./control.php" class="nav-link text-white"><i
              class="bi bi-house mx-2"></i>Inicio</a></li>
        <li class="nav-item h5 mx-2"><a href="./dashboard.php" class="nav-link text-white"><i 
          class="bi bi-controller mx-2"></i>Productos</a></li>
        <li class="nav-item h5 mx-2"><a href="./users.php" class="nav-link text-white"><i
              class="bi bi-people mx-2"></i>Usuario</a></li> 
              <li class="nav-item h5 mx-2"><a href="./shopping.php" class="nav-link text-white"><i
                class="bi bi-box mx-2"></i>Pedidos</a></li>
            <li class="nav-item h5 mx-2"><a href="./proveedor.php" class="nav-link text-white"><i 
              class="bi bi-person-lines-fill mx-2"></i>Proveedores</a></li>  
                
              
              
      </ul>
    </aside>
    
    <main class="flex-grow-1">
      
      <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 py-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">PlayCode</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
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
                  </button>
                </li>
                <li class="nav-item">

                  <img src="./img/perfil_dashborad.webp"
                    style="width: 30px;border-radius: 50%;border: 1px solid rgb(13, 106, 13);">
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Bryan Palma
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i>&nbsp;Perfil</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="./login.html"><i class="bi bi-box-arrow-left"></i>&nbsp;Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
  
      
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Productos</h1>
        <div>
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalAdd">Agregar</button>
        </div>
      </div>
      
      <section class="p-4 container">
        <div class="row">
            <div class="col-3 mt-2 p-2">
                <div class="card">
                    <img src="./img2/Control1.svg" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Control original</h5>
                      <p class="card-text">Controles originales de gamecube, aptos para diversas consolas de videojuegos y durables</p>
                      <a href="#" class="btn btn-dark w-100">Ver control</a>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card">
                    <img src="./img2/control6.svg" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Control especial</h5>
                      <p class="card-text">Controles de ediciones especiales, aptos para jugadores profesionales y excelente estado</p>
                      <a href="#" class="btn btn-dark w-100">Ver control</a>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card">
                    <img src="./img2/control9.svg" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Control bluetooth</h5>
                      <p class="card-text">Contoles bluetooth, con cable de carga y optimos para diversas consolas de videojuegos</p>
                      <a href="#" class="btn btn-dark w-100">Ver control</a>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card">
                    <img src="./img2/control16.svg" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Control generico</h5>
                      <p class="card-text">Control generico, mas baratos y funcionales con garantia de 3 meses, funcionan en diferentes consolas</p>
                      <a href="#" class="btn btn-dark w-100">Ver control</a>
                    </div>
                  </div>
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
        <form action="./php/user_insert.php" method="post" class="needs-validation" novalidate id="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Nombre del producto:</label>
                <input name="txtName" id="" required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Precio:</label>
                <input name="txtLast" required min="1" type="number" class="form-control" placeholder="Inserta el precio">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mb-2">
                <label for="">Descripcion:</label>
                <input name="txtAge" required min="1" type="text" class="form-control" placeholder="Descripcion...">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Imagen:</label>
                <input name="txtAge" required min="1" type="file" class="form-control" placeholder="">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col- mb-2">
                <label for="">Categoria:</label>
                <input name="txtPeso" required  type="text" class="form-control" placeholder="Inserta el tipo de control">
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