<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    UTS Laravel
  </title>

  <link id="pagestyle" href="{{ asset('style/css/style.css') }}" rel="stylesheet" />
  

</head>

<body class="index-page bg-gray-200">

  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="/">
              Home
            </a>
           
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">

                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center {{ Request::is('/teman*') ? 'active' : '' }} " href="/teman">
                    <i class="material-icons opacity-6 me-2 text-md">
                       Teman 
                    </i>
                  </a>
                  </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center {{ Request::is('/group*') ? 'active' : '' }}" href="/group">
                    <i class="material-icons opacity-6 me-2 text-md">
                       Group
                    </i>
                  </a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <header class="header-2">
    <div class="page-header min-vh-75 relative indexbg " style="">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">@yield('jumbotron')</h1>
            <p class="lead text-white mt-3">@yield('subtext')</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  
<div class="container">
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

      @yield('content')

    {{-- Footer --}}

    <footer>
        <div class="col-12">
          <div class="text-center">
            <p>
              Desain ©
              <script>document.write(new Date().getFullYear())</script> By Eko Prasatya.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>



</body>

</html>