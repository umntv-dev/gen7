

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

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/onair7/style_oprec.css')}}" />

    <!--[if IE]>
      <script type="text/javascript">
        var console = { log: function () {} };
      </script>
    <![endif]-->

    <style>
        @font-face {
        font-family: "Taviraj";
        src: url("{{asset('/fonts/Taviraj/Taviraj-Medium.ttf')}}");
    }

    </style>
</head>

<body style="background-image: url('{{ asset('/img/onair7/bg/asset-13.png')}}'); background-attachment: fixed; background-size: auto;">
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
                    <a class="nav-link font-blue" href="/onair"> Home</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="/onair#activities"> Activities</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="/onair#aboutus"> About Us</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a class="nav-link font-blue" href="/onair#contactus"> Contact Us</a>
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
    <!-- End Navbar -->

    <div class="head bottom-shadow" id="#" style="background-image: url(img/bg.png);">
        <div class="head-content " style="padding-top: 5%">
            <h1>
                Welcome to TV ONAIR 7.0!
            </h1>
            <p>
                Yuk cek nama kamu dibawah!
            </p>
            
        </div>
            
    </div>
    <div class="container">
        <div class="row md-6 mx-auto">
            <div class="col-md-6 sm-6 lg-6">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                        <h5 class="card-title">EVENT</h5>
                        <p class="card-text">
                            Jennifer Abigail - 00000055215.<br>
                            Dani Muhammad Lutfi - 00000058402.<br>
                            Wilcoustine Qhristmas Pniel Wijaya - 00000056960.<br>
                            Gabriel Owen Elisa - 00000053505.<br>
                            Marissa amran - 00000043265.<br>
                            Evelin Videla - 00000058466.<br>
                            Sinta Makdalena - 00000055206.<br>
                        </p>
                    </div>
                </div>    
            </div>
            <div class="col-md sm-4 lg-4">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                        <h5 class="card-title">FRESHMON</h5>
                        <p class="card-text">
                            Casey Tjiptadjaja - 00000045957.<br>
                            Shiva Clarancia - 00000054000.<br>
                            Rheinata Yuvian Tasman - 00000058039.<br>
                            Fitria Andhika - 00000063715.<br>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        
        <div class="row mb-4 mx-auto">
            <div class="col-md-6 sm-6 lg-6">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                        <h5 class="card-title">MEDREL</h5>
                        <p class="card-text">
                            Gabriel Jason Sanjaya - 00000037629.<br>
                            Jocelyn - 00000055418.<br>
                            Elisabeth Dian Kurnia Putri - 00000046200.<br>
                        </p>
                    </div>
                </div>    
            </div>
            <div class="col-md sm-4 lg-4">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                        <h5 class="card-title">SECMIN</h5>
                        <p class="card-text">
                            Audrey Febryanti - 00000045455.<br>
                            Bryan WIjaya Hartono - 00000053476.<br>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        
        <div class="row mb-4 mx-auto">
            <div class="col-md sm-4 lg-4">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                    <h5 class="card-title">SPONSOR</h5>
                        <p class="card-text">Maria Stefany Phileina Fernandita. S - 00000057103.</p>
                    </div>
                </div>    
            </div>
            <div class="col-md sm-4 lg-4">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                        <h5 class="card-title">LOGISTIC</h5>
                        <p class="card-text">
                            Theresia Vania Somawidjaja - 00000055317.<br> 
                            Theona Wesley - 00000055494.<br>
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        
        <div class="row mb-4 mx-auto">
            <div class="col-md sm-4 lg-4">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                        <h5 class="card-title">PR VISUAL</h5>
                        <p class="card-text">Bernadeth Fresya Tanujaya - 00000053626.</p>
                    </div>
                </div>    
            </div>
            <div class="col-md sm-4 lg-4">
                <div class="card text-center" style="width: 18rem; margin: 3%">
                    <div class="card-body">
                      <h5 class="card-title">DOKUM</h5>
                      <p class="card-text">Metta Bong - 00000053902.</p>
                    </div>
                </div>    
            </div>
        </div>
    </div>    

    <!-- Custom JS -->
    <script type="text/javascript" src="{{asset('/js/onair7/script.js')}}"></script>

</body>

</html>