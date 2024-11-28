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
    <aside class="bg-dark text-white vh-100" style="width: 20%;">
      <h2 class="p-4 h4">
        <img width="50px" src="./img/nogordas-removebg-preview.png" alt="" class="mx-1">
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
    <!--end sidebbar-->

    <main class="flex-grow-1">
      <!--hedear-->
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
                    <li><a class="dropdown-item" href="./login.php"><i class="bi bi-box-arrow-left"></i>&nbsp;Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!--end hedear-->
      <!--Title section-->
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Pedidos</h1>
        <div>
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalAdd">Agregar</button>
        </div>
      </div>
      <!--end Title section-->
      <section class="mt-4 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID_PEDIDOS</th>
              <th scope="col">ID_USUARIOS</th>
              <th scope="col">CANTIDAD</th>
              <th scope="col">TOTAL</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1</td>
              <td>5</td>
              <td>$1000.00</td>
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar ususario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./php/user_insert.php" method="post" class="needs-validation" novalidate id="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Nombre:</label>
                <input name="txtName" id="" required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Apellido:</label>
                <input name="txtLast" required type="text" class="form-control" placeholder="Inserta el Apellido">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-4 mb-2">
                <label for="">Edad:</label>
                <input name="txtAge" required min="1" type="number" class="form-control" placeholder="Inserta la edad">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-4 mb-2">
                <label for="">Peso:</label>
                <input name="txtPeso" required min="1" type="number" class="form-control" placeholder="Inserta el peso">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-4 mb-2">
                <label for="">Estatura(cm):</label>
                <input name="txtEs" required min="1" type="number" class="form-control" placeholder="Inserta la estatura">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mb-2">
                <label for="">Email</label>
                <input name="txtEmail" required type="email" class="form-control" placeholder="Inserte email">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Password</label>
                <input name="txtPassword" required type="password" class="form-control" placeholder="Ingrese su password">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Confirmar password</label>
                <input name="txtPass2" required type="password" class="form-control" placeholder="Ingrese su password">
                <div class="valid-feedback">Correcto</div>
                <div class="invalid-feedback">Datos no validos</div>
              </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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