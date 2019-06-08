<nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>

            <?php if($this->session->userdata('usuario_id') == 1) : ?>
              
            <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-plus"></span>
                    Registrar proyecto de ley
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Proyectos de ley
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="user-check"></span>
                    Perfil político
                </a>
                </li>
                <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reportes
              </a>
            </li>
            <?php else : ?>
            <li class="nav-item">
                  <a class="nav-link" href="crearPL">
                    <span data-feather="file-plus"></span>
                    Crear proyecto de ley
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="check-circle"></span>
                    Registrar idea
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Proyectos de ley
                </a>
                </li>
            <?php endif; ?>

            
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Usuario</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="user"></span>
                Perfil
              </a>
            </li>
          </ul>
        </div>
      </nav>