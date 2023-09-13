<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/profile.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PROFIL PPLG</title>
</head>
<body>
    <!-- Background Container -->
    <div class="background">
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-light sticky-top navig text-uppercase fw-bolder rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/logo.png')}}" class="rounded-circle nav-img" width="80" height="70"></a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcollapse"
                aria-expanded="false" aria-label="Toggle Navigation">

                </button>
                <div class="collapse navbar-collapse" id="navcollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li>
                            <a class="nav-link" href="/cv">CV</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Header/Banner -->
        <header class="container-xxl border text-center mt-4 bg-light-subtle amogus">

            <h1>PENGEMBANGAN PERANGKAT LUNAK & GIM</h1>
            <!-- Add any banner content here -->
        </header>

        <!-- Intro Text Area -->
        <section class="container-sm border rounded-3 mt-4 text-center bg-primary-subtle mx-auto p-2">
                    <h2>Tentang PPLG</h2>
                    <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Cursus turpis massa tincidunt dui ut ornare lectus sit. Senectus et netus et malesuada fames ac. 
                    Nunc aliquet bibendum enim facilisis gravida. Enim sed faucibus turpis in eu mi bibendum neque. 
                    Scelerisque eleifend donec pretium vulputate. Facilisi etiam dignissim diam quis enim lobortis scelerisque. 
                    Nisi est sit amet facilisis magna. Lectus mauris ultrices eros in cursus turpis. 
                    Vel eros donec ac odio tempor orci dapibus ultrices.
                    </p>
        </section>

        <!-- Main Content -->
        <section class="container mt-4 text-center">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3 rounded-3">
                        <img src="{{asset('assets/box1.jpg')}}" class="card-img-top p-1 rounded-3 g-kartu" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Box 1</h5>
                            <div class="card-text">lorem ipsum dolor sit amet. consectetur adipiscing elit</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3 rounded-3">
                        <img src="{{asset('assets/box2.jpg')}}" class="card-img-top p-1 rounded-3 g-kartu" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Box 2</h5>
                            <div class="card-text">lorem ipsum dolor sit amet. consectetur adipiscing elit</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3 rounded-3">
                        <img src="{{asset('assets/box3.jpg')}}" class="card-img-top p-1 rounded-3 g-kartu" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Box 3</h5>
                            <div class="card-text">lorem ipsum dolor sit amet. consectetur adipiscing elit</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="container-fluid text-light mt-4 text-center bg-dark">
            <p>&copy; 2023 PPLG Company</p>
            <i class="fa fa-address-card" aria-hidden="true">Alamat</i>
        </footer>
    </div>

    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
