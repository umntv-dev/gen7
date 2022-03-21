

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TVONAIR 7.0</title>
    <!-- <meta name="author" content="Alvaro Trigo Lopez" /> -->
    <meta name="description" content="fullPage full-screen navigation and sections control menu." />
    <meta name="keywords" content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots" />
    <meta name="Resource-type" content="Document" />

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/img/onair7/favicon.png')}}" type="image/png" sizes="16x16" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- fullpage.js CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/onair7/fullpage.css')}}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/onair7/style.css')}}" />

    <!--[if IE]>
      <script type="text/javascript">
        var console = { log: function () {} };
      </script>
    <![endif]-->
</head>

<body>
    <!-- Navbar -->
    <!-- <div id="header"> -->
    <nav class="navbar navbar-expand-lg py-1 navbar-light justify-content-between" id="navbar">
        <span class="nav-item" id="logotvoa">
        <a href="#home">
          <img src="{{asset('/img/onair7/Logo_OnAir.png')}}" width="70px;"/>
        </a>
        
      </span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav justify-content-around">
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="/"> UMN TV</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="#home"> Home</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="#activities"> Activities</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="#aboutus"> About Us</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="#contactus"> Contact Us</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="/onair/oprec"> Oprec</a>
                </li>
            </ul>
        </div>

        <span class="nav-item d-none d-md-block" id="logoIG">
        <a href="https://www.instagram.com/tv.onair" target="_blank"
          ><img src="{{asset('/img/onair7/logo-ig.png')}}" width="30px;"
        /></a>
      </span>
    </nav>
    <!-- </div> -->
    <!-- End Navbar -->

    <!-- Start Content -->
    <div id="fullpage">
        <!-- Home -->
        <div class="section" id="section0">
            <div class="slide" id="slide1">
                <div class="row justify-content-center full-height align-content-center m-auto" id="home">

                    <div class="col-10 col-md-5">
                        <img src="{{asset('/img/onair7/Tagline.png')}}" alt="tagline" class="animate__animated animate__zoomInDown logo" style="width: 100%;" />
    
                    </div>
                    <!-- <div id="bg-1">
                        <img src="assets/images/bg/asset-13.png" alt="Background" />
                    </div> -->
                </div>
            </div>
            
            <div class="slide" id="slide2">
                <div class="intro">
                    <div id="bg-16">
                        <img src="{{asset('/img/onair7/Tagline_OnAir.png')}}" alt="Person" />
                    </div>
                    <h1 class="mb-4">ARTI TAGLINE</h1>
                    <p style="text-align: center;">
                        Semua orang bisa menyebarkan informasi di sosial media layak seorang jurnalis.<br>
                        Semua orang dapat menjadi konsumen sekaligus produsen.<br>
                        Dengan ini, diharapkan semya orang dapat menggali potensi yang dimiliki.
                    </p>
                </div>        
            </div>

            <div class="slide" id="slide3">
                <div class="intro">
                    <div id="bg-17">
                        <img src="{{asset('/img/onair7/Logo_OnAir.png')}}" alt="Person" />
                    </div>
                    <h1 class="mb-4">ARTI LOGO</h1>
                    <p style="text-align: center;">
                        Bunga matahari dipercara mampu memberikan energi positif dan optimisme.<br> 
                        Warna kuning yang menyala seakan membangkitkan rasa ceria, dan semangat. <br>
                        Walaupun detik yang terus bergerak jarang diperhatikan, 
                        tetapi setiap pergerakan pasti <br> memiliki makna dan jam yang selalu 
                        berputar ke depan memotivasi diri untuk terus maju
                    </p>
                </div>  
            </div>
        </div>
        <!-- End of Home -->

        <!-- Activities -->
        <div class="section" id="section1">
            <div class="slide" id="slide1">
                <div class="intro">
                    <h1>
                        Activities
                    </h1>
                    <div id="bg-1">
                        <img src="{{asset('/img/onair7/bg/asset-13.png')}}" alt="Background" />
                    </div>
                </div>
            </div>

            <div class="slide" id="slide2">
                <a href="https://ultimagz.com/berita-kampus/think-wisely-act-differently-membuat-konten-yang-menarik-dan-bermanfaat-di-era-digital/" target="_blank">
                    <img class="img-fluid" src="{{asset('/img/onair7/televisionair2019-1.jpg')}}" alt="Think Wisely" />
                </a>
                <p class="mt-3">Think Wisely Act Differently</p>
                <div id="bg-2">
                    <img src="{{asset('/img/onair7/bg/asset-14.png')}}" alt="Background" />
                </div>
                <div id="bg-3">
                    <img src="{{asset('/img/onair7/bg/ASSETS-04.png')}}" alt="Bird" />
                </div>
                <div id="bg-4">
                    <img src="{{asset('/img/onair7/bg/ASSETS-05.png')}}" alt="Circle" />
                </div>
            </div>

            <div class="slide" id="slide3">
                <a href="https://ultimagz.com/berita-kampus/info-kampus/najwa-shihab-ajak-jurnalis-muda-hadapi-revolusi-media-di-era-digital/" target="_blank">
                    <img class="img-fluid" src="{{asset('/img/onair7/televisionair2019-2.jpg')}}" alt="Najwa Shihab" />
                </a>
                <p class="mt-3">Menghadapi Revolusi Media</p>
                <div id="bg-5">
                    <img src="{{asset('/img/onair7/bg/ASSETS-08.png')}}" alt="Background" />
                </div>
                <div id="bg-10">
                    <img src="{{asset('/img/onair7/bg/ASSETS-04.png')}}" alt="Circle" />
                </div>
                <div id="bg-11">
                    <img src="{{asset('/img/onair7/bg/ASSETS-02.png')}}" alt="Bird" />
                </div>
            </div>

            <div class="slide" id="slide4">
                <a href=" https://www.umn.ac.id/umn-tv-hadirkan-najwa-shihab-dalam-acara-pembuka-televisionair-2019/" target="_blank">
                    <img class="img-fluid" src="{{asset('/img/onair7/televisionair2019-3.jpg')}}" alt="Najwa Shihab" />
                </a>
                <p class="mt-3">People and Stories</p>
                <div id="bg-6">
                    <img src="{{asset('/img/onair7/bg/asset-11.png')}}" alt="Background" />
                </div>
            </div>

            <div class="slide" id="slide5">
                <iframe src="https://www.youtube.com/embed/7Ivx2wLSbdU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>The Aftermovie</p>
                <div id="bg-7">
                    <img src="{{asset('/img/onair7/ASSETS-10.png')}}" alt="Background" />
                </div>
                <!-- <div id="bg-12">
                    <img src="assets/images/bg/ASSETS-13.png" alt="Bird" />
                </div> -->
            </div>
        </div>
        <!-- End of Activities -->

        <!-- About Us -->
        <div class="section" id="section2">
            <div class="intro">
                <div class="slide" id="slide6">
                    <div class="intro">
                        <h1 class="mb-4">About Us</h1>
                        <p>
                            TVONAIR merupakan acara tahunan yang diadakan oleh UMN TV. Acara ini pertama kali diadakan Maret 2016 dengan dukungan penuh dari AJI (Aliansi Jurnalis Independen). <br>Awalnya, TVONAIR memiliki tujuan merangkul media-media
                            kampus, terutama TV kampus se-Jabodetabek untuk belajar bersama mengenai pertelevisian dan penyiaran, sekaligus menciptakan sebuah standar yang harus dicapai bagi semua media kampus se-Jabodetabek. <br>TVONAIR akhirnya menjadi
                            tempat terbentuk dan disahkannya organisasi pertama yang menjadi rumah bagi media televisi kampus di Indonesia: ATKI (Asosiasi Televisi Kampus Indonesia).
                        </p>
                        <div id="bg-1">
                            <img src="{{asset('/img/onair7/bg/ASSETS-10.png')}}" alt="Background" />
                        </div>
                        <div id="bg-8">
                            <img src="{{asset('/img/onair7/bg/asset-11.png')}}" alt="Background" />
                        </div>
                        <div id="bg-9">
                            <img src="{{asset('/img/onair7/bg/ASSETS-07.png')}}" alt="Person" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of About Us -->

        <!-- Contact Us -->
        <div class="section" id="section5">
            <div class="slide" id="slide1">
                <div class="intro">
                    <h1>Contact Us</h1>
                </div>
                <div id="bg-contact">
                    <img src="{{asset('/img/onair7/bg/asset-10.png')}}" alt="Image">
                </div>
                <div id="bg-contact1">
                    <img src="{{asset('/img/onair7/bg/asset-10b.png')}}" alt="Image">
                </div>
                <div id="gmail_wrap">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=televisionair7.0@gmail.com" target="_blank">
                        <img src="{{asset('/img/onair7/logo-gmail.png')}}" alt="Gmail" id="gmail-logo">
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=televisionair7.0@gmail.com" target="_blank">
                        <span id="gmail-text">televisionair7.0@gmail.com</span>
                    </a>
                </div>
                <div id="ig_wrap">
                    <a href="https://www.instagram.com/tv.onair/?hl=en" target="_blank">
                        <img src="{{asset('/img/onair7/logo-ig.png')}}" alt="IG" id="ig-logo">
                    </a>
                    <a href="https://www.instagram.com/tv.onair/?hl=en" target="_blank">
                        <span id="ig-text">tv.onair</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Of Contact Us -->
    </div>
    <!-- End Content -->

    <!-- Fullpage JS -->
    <script type="text/javascript" src="{{asset('/js/onair7/fullpage.js')}}"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="{{asset('/js/onair7/script.js')}}"></script>

    <script type="text/javascript">
        var myFullpage = new fullpage("#fullpage", {
            anchors: ["home", "activities", "aboutus", "contactus"],
            sectionsColor: ["#FEF9D3", "#FFD777", "#FFE885", "#FEF9D3"],
            // responsiveWidth: 900,
            continuousVertical: false,
            slidesNavigation: true,
            afterResponsive: function(isResponsive) {},
            afterLoad: function(anchorLink, index) {},
            onLeave: function(index, nextIndex, direction) {},
        });
    </script>
</body>

</html>