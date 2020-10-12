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
    <title>Elearning Starterpack</title>
  </head>
  <body>
<!-- Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">ElStack</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/categories/index') }}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary tombol1 btn-block" href="{{ __('register') }}">SIGNUP</a>
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
      <a href="{{ __('register') }}" class="btn btn-secondary tombol1"> SIGNUP</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @elseif (session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif
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
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100">
        <!-- <img class="card-img-top" src="http://placehold.it/500x325" alt=""> -->
        <div class="card-body">
          <h4 class="card-title">Edmodo</h4>
          <img src="{{ asset('/img/edmodo.jpg') }}" alt="Zoom">
          <p> Edmodo adalah layanan kelas online asal California, AS. Walaupun belum banyak digunakan di Indonesia, Edmodo merupakan layanan yang cukup populer di Amerika Serikat.Aplikasi online ini sangat populer di kalangan guru karena dapat memudahkan pekerjaan mereka sehari-hari. Layanan seperti Edmodo sendiri dikenal dengan nama Learning Management System (LMS).</p>
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
 <!-- Contact-->
 <!-- Call to action-->
 <section class="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 id="contact">Contact us</h2>
                        <hr class="divider light my-4" />
                        <h4>Email or Phone</h4>
                        <p class="text-white-50 justify-content-center">
                            Email:
                            contact@ElStack.com
                            <br>
                            Phone:
                            (0251) 8329101 <br>
                            Alamat: Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128
                        </p>
                        <a class="btn btn-primary tombol2 btn-xl js-scroll-trigger" data-toggle="modal" data-target="#saran">Send Us!</a>
                    </div>
                </div>
            </div>

            <!--MODALS-->
               <!-- Modal -->
                <div class="modal fade" id="saran" tabindex="-1" aria-labelledby="saran" aria-hidden="true">
                  <div class="modal-dialog color">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="saran">Sends us an improvement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body color">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @elseif (session('danger'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('danger') }}
                            </div>
                        @endif
                        <form method="POST" action="/">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-sm col-form-label">{{ __('Alamat Email') }}</label>

                                <div class="col-sm">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm col-form-label ">{{ __('Nama Lengkap') }}</label>

                                <div class="col-sm">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm col-form-label" for="message">{{ __('Pesan :') }}</label>

                                <div class="col-sm">
                                    <textarea id="message" placeholder="your message" class="form-control @error('message') is-invalid @enderror" name="message"  autocomplete="message"  rows="3" autofocus>{{ old('message') }}</textarea>

                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary tombol2">Submit</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning " data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

        </section>
<!-- footer -->
      <!-- <div class="row footer bg-secondary">
          <div class="col text-center">
            <p>
              2020 All Right Reserved by Staterpack.
            </p>
          </div>
      </div> -->
      <footer class="py-3">
            <div class="container">
              <div class="medium text-center text-muted">2020 All Right Reserved by ElStack.</div>
            </div>
        </footer>
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
