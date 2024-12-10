<header>
    <nav class="navbar navbar-expand-lg px-4 py-4" style="background-color: #90b2f5;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Usuario</a>
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
                  <?php $user=$_SESSION['userdata']; 
                  echo $user['nombre'] ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i>&nbsp;Perfil</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./php/logout.php"><i class="bi bi-box-arrow-left"></i>&nbsp;Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>