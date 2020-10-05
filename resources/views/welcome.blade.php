<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/landing.css') }}">
    <title>Starterpack</title>
  </head>
  <body>
 <!-- Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">STARTERPACK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catagory
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Google Meet</a>
            <a class="dropdown-item" href="#">Webex</a>
            <a class="dropdown-item" href="#">Zoom</a>
            <a class="dropdown-item" href="#">Google Clasroom</a>
          </div>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary tombol1 btn-block" href="{{ __('register') }}">SINGUP</a>
        </li>
        <li class="nav-item">
          <a class="btn  btn-primary tombol2 btn-block" href="{{ route('login') }}">LOGIN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- akhir Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Stay <span>Safe</span> and Stay  <span>Productive</span><br>
      Work from  <span>Home</span> or Study online.</h1>
      <a href="{{ __('Register') }}" class="btn btn-secondary tombol1"> SINGUP</a>
  </div>
</div>
<!-- akhir jumbotron -->
<!-- container -->
<!-- info panel -->
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
              <div class="col-lg">
                <img src="{{ asset('/img/youtube.png') }}" alt="youtube" class="float-left">
                <h4>Video</h4>
                <p>Belajar via video</p>
              </div>
              <div class="col-lg">
                <img src="{{ asset('/img/free.png') }}" alt="Free" class="float-left">
                <h4>Free</h4>
                <p>Free Access Class</p>
              </div>
              <div class="col-lg">
                <img src="{{ asset('/img/responsive-design.png') }}" alt="multi" class="float-left">
                <h4>Multi Platfrom</h4>
                <p>Access All Device</p>
              </div>
            </div>
        </div>
      </div>
<!-- akhir info panel -->
<!-- WorkingSpace -->
      <div class="row workingspace">
        <div class="col-lg 6">
          <img src="{{ asset('/img/zom.webp') }}" alt="workingSpace" class="img-fluid">
        </div>
        <div class="col-lg 5">
          <h3>YOU <span>WORK</span> AND <span>STUDY</span>
            AT <span>HOME</span></h3>
            <p>
              Belajar menggunakan kurikulum yang 
telah divasilitasi industry IT diera Pandemi
            </p>
            <a href="" class="btn btn-primary tombol2">Check Now!</a>
        </div>
      </div>

<!-- Akhir WorkingSpace -->
<!-- card -->
<section class="card1">
  <div class="row text-center">

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
        <div class="card-body">
          <h4 class="card-title">Google Meet</h4>
         <img src="{{ asset('/img/meet_96dp.png') }}" alt="Zoom"><br>
         <p>Google Meet adalah produk dari Google berupa layanan komunikasi video yang dikembangkan oleh Google.Aplikasi ini adalah salah satu aplikasi yang merupakan versi baru dari versi terdahulunya yaitu Google Hangouts dan Google Chat.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
        <div class="card-body">
          <h4 class="card-title">Webex</h4>
          <img src="{{ asset('/img/webex-logo.png') }}" alt="Zoom">
         <p>Cisco Webex Meeting adalah aplikasi panggilan video yang bisa digunakan untuk pertemuan online perusahaan di masa pandemi seperti sekarang ini.Selain itu, Webex juga memiliki deteksi kebisingan dan saran bisu yang dapat digunakan untuk melakukan panggilan video dengan lebih sedikit gangguan.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
        <div class="card-body">
          <h4 class="card-title">Zoom</h4>
          <img src="{{ asset('/img/Zoom-App-Icon-2.png') }}" alt="Zoom">
         <p>Zoom merupakan salah satu aplikasi komunikasi dengan menggunakan video conference.Aplikasi tersebut dapat digunakan dalam berbagai perangkat seluler dan desktop.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
        <div class="card-body">
          <h4 class="card-title">Google Clasroom</h4>
          <img src="{{ asset('/img/Google-Classroom-Logo1-1.webp') }}" alt="Zoom">
          <p>Google Classroom memungkinkan kegiatan belajar mengajar menjadi lebih produktif dan bermakna dengan menyederhanakan tugas, meningkatkan kolaborasi, dan membina komunikasi. Pengajar dapat membuat kelas, memberikan tugas, mengirim masukan, dan melihat semuanya di satu tempat.</p>
        </div>
      </div>
    </div>
    

  </div>
</section>
<!-- akhir card -->
<!-- Testimonial -->
      
      <section class="testimoni">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h5 id="about">
              "Terima kasih untuk Starterpack karena di sini saya banyak sekali belajar 
cara menggunakan aplikasi video conference dan
 tutorialnya juga mudah dimengerti."
            </h5>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <figure class="figure">
              <img src="{{ asset('/img/dms.jpg') }}" class="figure-img img-fluid rounded-circle" alt="testi2">
            </figure>
            <figure class="figure">
              <img src="{{ asset('/img/q.png') }}" class="figure-img utama img-fluid rounded-circle" alt="testi1">
              <figcaption class="figure-caption">
                <h5>Gifar M Nadiv</h5>
                <p>Siswa SMAN5 Bogor</p>
              </figcaption>
            </figure>
            <figure class="figure">
              <img src="{{ asset('/img/jalu.jpg') }}" class="figure-img img-fluid rounded-circle" alt="testi2">
            </figure>

          </div>
        </div>
      </section>
<!-- akhir testimoni -->
<!-- footer -->
      <div class="row footer">
          <div class="col text-center">
            <p>
              2020 All Right Reserved by Staterpack.
            </p>
          </div>
      </div>

  </div>
<!-- akhir container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html
>