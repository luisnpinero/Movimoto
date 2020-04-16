<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="@SusanaNzth">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Movimoto') }}</title>
  <!-- Scripts
  <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Fuentes -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  <!-- Estilos -->
  @yield('css')
  @yield('js')


  <link href="{{  asset('css/sb-admin-2.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{  asset('css/style-admin.css')}}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- MENÚ LATERAL -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Logo -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}"></a>

      <!-- Divisor entre el Logo y el Menú -->
      <hr class="sidebar-divider my-0">

      <!-- Espacio entre menú -->
      <hr class="sidebar-divider">

      <!-- Link al dashboard -->
      <li class="nav-item active store">
        <a class="nav-link" href="{{ url('/oficina') }}">
          <i class="fas fa-fw fa-home store"></i>
          <span class="store">Inicio</span></a>
      </li>

      <!-- Link a la tienda -->
      <li class="nav-item active store">
        <a class="nav-link" href="{{ url('/tienda') }}">
          <i class="fas fa-fw fa-store-alt store"></i>
          <span class="store">Tienda</span></a>
      </li>

      <!-- Espacio entre menú -->
      <hr class="sidebar-divider">

      <!-- Heading de menú
      <div class="sidebar-heading">
        Título del menú
      </div>
      -->

      <!-- Menú de las ordenes -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/oficina') }}">
          <i class="fas fa-fw fa-list"></i>
          <span>Ordenes</span></a>
      </li>

      <!-- Menú del carrito -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/nuevo-articulo') }}">
          <i class="fas fa-fw fa-cash-register"></i>
          <span>Productos</span></a>
      </li>

      <!-- Menú de la red -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/oficina') }}">
          <i class="fas fa-fw fa-network-wired"></i>
          <span>Red de referidos</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Configuración</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Configuración de perfil</a>
            <a class="collapse-item" href="utilities-border.html">Configuración de pago</a>
            <a class="collapse-item" href="utilities-animation.html">Configuración de la cuenta</a>
          </div>
        </div>
      </li>

      <!-- Menú de ayuda -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/oficina') }}">
          <i class="fas fa-fw fa-life-ring"></i>
          <span>Ayuda</span></a>
      </li>

      <!-- Espacio entre menú -->
      <hr class="sidebar-divider">

      <!-- Cerrar sesión -->
      <li class="nav-item">
        <a class="nav-link dropdown-item" data-toggle="modal" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Cerrar sesión</span></a>
      </li>
      <!-- Espacio entre menú -->
      <hr class="sidebar-divider">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

      <!-- Ventana modal de cerrar sesión -->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea cerrar sesión?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Clic en "Cerrar sesión" para salir de la tienda.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Regresar</button>
              <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar sesión</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        </div>
      </div>

    </ul>
    <!-- Fin de MENÚ LATERAL -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- NAV -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Botón de menú móvil -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Notificaciones de campana -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- contador de nuevas alertas -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Lista desplegable de alertas -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Centro de alertas
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">12 Febrero - 2020</div>
                    <span class="font-weight-bold">Tu orden #235 se ha completado!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">7 Febrero - 2020</div>
                    Su orden #538 se está procesando!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">2 Febrero - 2020</div>
                    Se ha creado una nueva orden #135
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todo</a>
              </div>
            </li>

            <!-- Notificaciones de mensajes -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Contador de mensajes -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- lista desplegable de mensajes -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Centro de mensajes
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Leer todos</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Barra de buscar -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>


            <!-- Barra de buscar para móviles -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Fin de NAV -->

        <!-- Contenido de la página -->
        <div class="container-fluid">

          <!-- Título -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>
          <main class="py-4">
              @yield('content')
          </main>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- Fin del contenido -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Movimoto 2020</span>
          </div>
        </div>
      </footer>
      <!-- Fin de Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Botón para ir arriba-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}" defer></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}" defer></script>

</body>

</html>
