<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Zonas </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />


  <!--IMPORTAR JQUERY PARA LA VALIDACION -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- IMPORTANDO JQUERY VALIDATION-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!--Importar popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <!-- Importando archico js de boostrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Importando css de boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Importar iconos de Font osone para iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Importando sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Importando datatable-->
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <!-- Importando fileInput -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/js/fileinput.min.js"></script>
    <!-- Importando el css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/css/fileinput.min.css">
    <!-------------------------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/js/locales/es.js"></script>

    <!-- Deber ----------------------------------->

    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.print.min.js"></script>
    
     <!-- Api de GOOGLE MAPS -->
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuXfFTd694L_jf7x67Z5kAuv4IbtHnfFs&callback=initMap"></script>
    
    <!-- Favicon -->
    <link href="{{ asset('backend/assets/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" /> -->
    

    <!-- Template Stylesheet -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
   


    
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>Ecuador</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Lunes - Viernes : 09.00 AM - 09.00 PM</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>0979359012</small>
          </div>

        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-0 px-3 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
      <a href="{{ route('zonasRiesgo.mapa') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3"  src="{{ asset('backend/assets/img/icon/icon-10.png') }}" alt="Icon" />
        <h1 class="m-0 text-primary">Zona</h1>
      </a>
       <a href=" {{route ('zonasRiesgo.index')}}" style="color:blue" class="nav-item nav-link active ">Inicio</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3 py-2 border-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Puntos de encuentro
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('puntos.index') }}" class="dropdown-item">Ver puntos</a></li>
                <li><a href="{{ route('puntos.create') }}" class="dropdown-item">Agregar punto</a></li>
            </ul>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3 py-2 border-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Zonas de riesgo
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('zonasRiesgo.index') }}" class="dropdown-item">Ver lista de zonas de riesgo</a></li>
                <li><a href="{{ route('zonasRiesgo.create') }}" class="dropdown-item">Agregar zona de riesgo</a></li>
            </ul>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3 py-2 border-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Zonas seguras
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('zonasSeguras.index') }}" class="dropdown-item">Lista de Zonas seguras</a></li>
                <li><a href="{{ route('zonasSeguras.create') }}" class="dropdown-item">Nueva zona segura</a></li>
            </ul>
        </div>
      </div class=" px-3 py-2 border-end">
          <a href=" {{ route('zonasRiesgo.mapa') }}" style="color:blue" class="nav-item nav-link active ">Ver Mapa</a>
      </div>
      <div class="nav-link px-3 py-2 border-end" >
          <form method="POST" action="{{ route('logout') }}" >
      </div>
          
   @if(Auth::check())
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center gap-2" data-bs-toggle="dropdown">
                <i class="fas fa-user-circle fa-lg"></i>
                <span>{{ Auth::user()->name }} ({{ Auth::user()->role ?? 'Sin rol' }})</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end rounded-0 rounded-bottom m-0">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt me-2"></i> Cerrar sesión
                    </button>
                </form>
            </div>
        </div>
    @endif



</form>

  <li class="nav-item">   </li>
</nav>
    <!-- Navbar End -->

    @yield('contenido')

       <!-- Footer Start -->
    <div
      class="container-fluid footer bg-dark text-light footer mt-4 pt-5 wow fadeIn"
      data-wow-delay="0.2s"
    >
      <div class="container py-5">
        <div class="row g-10">
          <div class="col-lg-9 col-md-9">
            <h5 class="text-light mb-4">Direccion</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Latacunga-Ecuador
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>0979359012
            </p>


          

          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">

            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Hecho Por
              <a  
                >RLS TEHC</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
<style>
    .error {
        color: red;         
        font-weight: bold;   
        font-size: 14px; 
            
    }
    input.error {
         border: 2px solid red;
            
    }
</style>

 @if(session('mensaje'))
  <script>
      Swal.fire({
          title: "Notificación",
          text: "{{ session('mensaje') }}",
          icon: "{{ session('tipo') ?? 'success' }}"
      });
  </script>
@endif





  </body>
</html>
