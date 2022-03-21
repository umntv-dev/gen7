@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet'>
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('/css/oprecc_style.css')}}">
    <script src="https://kit.fontawesome.com/2d31a0f03c.js" crossorigin="anonymous"></script>
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
    <link rel="icon" href="{{asset('/images/favicon.png')}}" type="image/png" sizes="16x16"/>
    <title>UMN TV Open Recruitment results</title>
</head>
<body style="background-image: url('{{ asset('/img/img_oprec/bg.png')}}') !important;">
    <div class="head bottom-shadow" id="#" style="background-image: url('{{ asset('/img/img_oprec/bg.png')}}');">
        <div class="head-content">
            <h1>
                OPEN RECRUITMENT
            </h1>
            <p>
                Siapkan dirimu menjadi bagian dari crew UMN TV Gen 8!
            </p>
            <a href="#about">Details</a>
        </div>
            
    </div>
    <div class="about" id="about">
        <h3>
            ABOUT UMN TV
        </h3>
        <p>
            UMN TV merupakan lembaga pers yang diresmikan pada 31 Maret 2015. UMN TV melakukan produksi program - program unggulan berbasis streaming. UMN TV menjadi wadah dan pengaplikasian ilmu bagi mahasiswa di bangku perkuliahan. 
        </p>
            
    </div>

    <div class="divisions">
        <h3>
            WE ARE LOOKING FOR
        </h3>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/1.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">News</h3>
                        <p class="cardInfo">
                            Berperan dalam menyajikan berita-berita atau informasi menarik yang dikemas dalam bentuk hard news atau soft news untuk memproduksi liputan yang kreatif, menarik dan informatif.                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/2.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Program</h3>
                        <p class="cardInfo">
                            Berperan dalam memproduksi program yang dikemas secara kreatif dan inovatif dengan crew dimulai dari produser, asisten produksi, campers, scriptwriter, editor dan dsb.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/3.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Content Creative Production</h3>
                        <p class="cardInfo">
                            Berperan dalam memproduksi konten kreatif yang informatif dan edukatif dari mulai pencarian data, visualisasi dan editing.                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/4.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">IT & Web Development</h3>
                        <p class="cardInfo">
                            Berperan secara aktif dalam pembuatan website, melakukan perbaikan, dan update secara berkala yang menjadi sarana penunjang produktivitas UMN TV.                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/5.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Visual</h3>
                        <p class="cardInfo">
                            Berperan secara aktif dalam memproduksi konten visual menarik dan kreatif serta inovatif menggunakan aplikasi pendukung                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/6.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Social Media Handler</h3>
                        <p class="cardInfo">
                            Berperan penting dalam mengatur konten di sosial media UMN TV                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/7.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Media Relation</h3>
                        <p class="cardInfo">
                            Menjalin relasi dengan berbagai event dan televisi kampus lain                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/8.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Marketing Production</h3>
                        <p class="cardInfo">
                            Memproduksi berbagai keperluan promosi seperti video profile, memvisualisasikan live IG, dan sarana penunjang UMN TV                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/9.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Marketing Event</h3>
                        <p class="cardInfo">
                            Berperan dalam membuat event-event yang akan dilaksanakan oleh UMN TV
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top programImg" src="{{ asset('/img/oprec_gen8/10.jpg')}}">
                    <div class="card-detail">
                        <h3 class="cardTitle">Technical Crew</h3>
                        <p class="cardInfo">
                            Mempersiapkan segala kebutuhan teknis untuk menunjang semua kegiatan UMN TV                        </p>
                    </div>
                </div>
            </div>
            
                
        </div>
        <div class="conditions" id="terms">
            <h3>
                TERMS & CONDITIONS
            </h3>
            <div class="concontent">
                <p>1. Terbuka bagi mahasiswa aktif dari seluruh jurusan angkatan 2019, 2020, dan 2021.</p>
                <p>2. Tidak tergabung dalam media, himpunan, dan organisasi kampus pada masa kepengurusan 2021/2022 (BEM, DKBM, Himpunan fakultas, dsb).</p> 
                <p>3. Tidak mengikuti lebih dari DUA kepanitiaan dan/atau UKM/Komunitas kampus selama periode tahun 2021/2022.</p>   
                <p>4. Tertarik dengan dunia yang dipilih (Broadcasting, marketing, IT & Web Development, Design, Social Media, dan Public Relation).</p>
                <p>5. Berkomitmen dan berani bertanggung jawab.</p>
            </div>
                
        </div>
        <div class="apply" id="apply">
                
            <h3>
                WE ARE LOOKING FORWARD TO WORK WITH YOU!
            </h3>
            <a href="http://tiny.cc/OPRECGEN7" target="_blank">APPLY HERE!</a>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script>
        AOS.init();
      </script>

</body>


@stop