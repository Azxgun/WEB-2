<!doctype html>
<style lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"

    <style>
        .campus-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .campus-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .campus-card .card-img-overlay {
            background: rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .campus-card:hover .card-img-overlay {
            background: rgba(0,0,0,0.3);
        }

        .btn-campus {
            background-color:  #2c3e50;
            color: white;
            border: none;
            padding: 10px 25px;
        }
        
        .btn-campus:hover {
            background-color:  #0041C2;
        }

        footer {
            background-color: #2c3e50;
            color: white;
        }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/kampus_a.webp" class="d-block w-100" style="height:500px;" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/kampus_a.webp" class="d-block w-100" style="height:500px;" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/kampus_a.webp" class="d-block w-100" style="height:500px;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
         </div>

        <!-- Campuses Section -->
    <section id="campuses" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Area parkir</h2>
                <p class="lead text-muted">pilih kampus mana</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card campus-card text-white h-100">
                        <img src="img/kampus_a.webp" class="card-img" alt="Campus A">
                        <div class="card-img-overlay">
                            <div class="text-center">
                                <h3 class="card-title display-6 fw-bold">Campus A</h3>
                                <p class="card-text">Main Campus - Downtown Location</p>
                                <a href="form.php" class="btn btn-campus mt-3">
                                    <i class="fas fa-car me-2"></i>
                                    <i class="fa-solid fa-motorcycle"></i>
                                     View Parking
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card campus-card text-white h-100">
                        <img src="img/kampus_b.jpg" class="card-img" alt="Campus B">
                        <div class="card-img-overlay">
                            <div class="text-center">
                                <h3 class="card-title display-6 fw-bold">Campus B</h3>
                                <p class="card-text">Science & Technology Campus</p>
                                <a href="#" class="btn btn-campus mt-3">
                                    <i class="fas fa-car me-2"></i> 
                                    <i class="fa-solid fa-motorcycle"></i>
                                    View Parking
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <footer class="py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-0 text-white">© 2023 University Parking Services. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="https://www.facebook.com/share/1DjyUkbqyM/" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/sttnf_official?igsh=MTh2a3FycGVobTE0cg==" class="text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
    </style>
</html>