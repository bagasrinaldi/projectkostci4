<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/about');?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/room');?>">Room</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/contact');?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/login');?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- end navbar -->

    <!-- carousel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?= base_url('/assets/room_1.jpg');?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?= base_url('/assets/room_1.jpg');?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('/assets/room_1.jpg');?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end carousel -->

<!-- about -->
<section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="heading">
                     About Us
                    </h4>    
                    <div class="underline mb-2"></div>
                    <p>       
                        Kami menawarkan pengalaman hunian yang eksklusif dan nyaman melalui layanan penyewaan kamar kost kami. Setiap kamar dirancang dengan teliti untuk memenuhi kebutuhan hidup modern dan memberikan suasana yang nyaman serta santai bagi para penyewa. Dengan fasilitas lengkap seperti kamar mandi pribadi, akses Wi-Fi cepat, dan ruang bersama yang bersih dan terawat, kami menjamin tingkat kenyamanan dan keamanan yang tinggi bagi para penghuni. Selain itu, lokasi kost kami strategis, dekat dengan fasilitas umum dan transportasi, sehingga memudahkan akses ke berbagai tempat. Jadi, jangan ragu untuk bergabung dengan kami dan rasakan kenyamanannya sendiri!
                    </p>
                    <p>
                        Kami menawarkan pengalaman hunian yang eksklusif dan nyaman melalui layanan penyewaan kamar kost kami. Setiap kamar dirancang dengan teliti untuk memenuhi kebutuhan hidup modern dan memberikan suasana yang nyaman serta santai bagi para penyewa. Dengan fasilitas lengkap seperti kamar mandi pribadi, akses Wi-Fi cepat, dan ruang bersama yang bersih dan terawat, kami menjamin tingkat kenyamanan dan keamanan yang tinggi bagi para penghuni. Selain itu, lokasi kost kami strategis, dekat dengan fasilitas umum dan transportasi, sehingga memudahkan akses ke berbagai tempat. Jadi, jangan ragu untuk bergabung dengan kami dan rasakan kenyamanannya sendiri!
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url('/assets/room_1.jpg');?>" alt="" width="200" height="200">
                 </div>
            </div>
        </div>
</section>
<!-- end about -->

<!-- room -->
<div class="container">
    <div class="row justify-content-center gap-2">
        <div class="col-md-3">
            <div class="card mt-5">
                <img src="<?= base_url('assets/detail1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="text-center mt-2">
                        <a href="#" class="btn btn-primary">Go somewhere</a>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-5">
                <img src="<?= base_url('assets/detail1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="text-center mt-1">
                        <a href="#" class="btn btn-primary">Go somewhere</a>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-5">
                <img src="<?= base_url('assets/detail1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="text-center mt-1">
                        <a href="#" class="btn btn-primary">Go somewhere</a>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-5">
                <img src="<?= base_url('assets/detail1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="text-center mt-1">
                        <a href="#" class="btn btn-primary">Go somewhere</a>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-5">
                <img src="<?= base_url('assets/detail1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="text-center mt-1">
                        <a href="#" class="btn btn-primary">Go somewhere</a>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-5">
                <img src="<?= base_url('assets/detail1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="text-center mt-1">
                        <a href="#" class="btn btn-primary">Go somewhere</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end room -->

<!-- contact -->
<h1>ini list Kontak</h1>
<!-- contact -->

<!-- footer -->
<footer>
      <div class="flex-container-column">
        <div class="flex-container-row"></div>
      </div>
    </footer>
<!-- end footer -->
</body>
</html>