<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>E-Rektrutmen - PT. GINTING JAYA ENERGI</title>
        <link rel="icon" type="image/x-icon" href="{{asset('dist/img/logo-ginting jaya energi.png')}}">
    
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    </head>
<body>
    <section class="vh-100" style="background-color: #bcac3c">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="{{asset('/image/Alur Loker.png')}}"
                      alt="Rekrutmen" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <img src="{{asset('dist/img/logo-ginting jaya energi.png')}}" alt="LOGO Ginting Jaya Energi" class="img-fluid" width="100" height="100">
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-1">  
                          <span class="h1 fw-bold mb-0">E-Rekrutmen PT.Ginting Jaya Energi</span>
                        </div>
                        @if (Route::has('login'))
                                @auth
                                <div class="pt-1 mb-4">
                                    <a href="{{ url('/dashboard') }}">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Masuk Website</button>
                                    </a>
                                </div>
                                @else
                                <div class="pt-1 mb-4">
                                    <a href="{{ route('login') }}">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                                    </a>
                                </div>
                                    @if (Route::has('register'))
                                    <div class="pt-1 mb-4">
                                        <a href="{{ route('register') }}">
                                            <button class="btn btn-dark btn-lg btn-block" type="button">Register</button>
                                        </a>
                                    </div>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        {{-- <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                        </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
  
</html>