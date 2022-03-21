@extends('layouts.app')

@section('content')

<div>
    <br><br>
</div>   
<div data-aos="fade-up" class="container titleContent" id="program">
    <h1 class="mainTitle">Programs</h1>
    <p class="titleInfo">
        <span id="title1">New Season</span> with Brand New Episodes
    </p>
</div>

<!-- Modal Mersi -->
<div class="modal fade " id="modalMersi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMersiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content " >
            <div class="modal-header d-flex justify-content-end mersi-header">
                <p class="modaltitle">Meja Redaksi</p>
                {{-- <img class ="modaltitle" src="{{asset('/img/modal/header/mersi.jpg')}}"> --}}
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <h2>Season 1</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s1/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>UMN Animation and Film Festival (UCIFEST) kembali menyapa para pegiat film. Mengusung tema luar angkasa, UCIFEST 12 berharap pembuat film dapat terus berkreasi di tengah pandemi. Tahun ini, UCIFEST 12 menghadirkan pegiat
                                film seperti Robby Ertanto, Gaga Nugraha, hingga Hanung Bramantyo.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=EGAD30uAlds&list=PLXVjTfiTsb6O5EKjCFai1GBbv8VCTOQPV&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s1/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Hari Kartini menjadi momentum pengingat sejarah emansipasi wanita di Indonesia. Sosok kartini yang menginspirasi patut dijadikan cerminan perempuan masa kini. Salah satunya, Menteri Keuangan Sri Mulyani sebagai Wanita Paling
                                berpengaruh di Dunia ke-78.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=VFmRZyAQV4g&list=PLXVjTfiTsb6O5EKjCFai1GBbv8VCTOQPV&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s1/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Kapal Perang Republik Indonesia (KRI) Nanggala 402 hilang kontak saat melakukan latihan rudal dan torpedo. Kapal yang dibuat pada 1979 ini, dinyatakan hilang pada Rabu, 21 April 2021. Pasukan TNI Angkatan Laut memutuskan
                                menerbangkan helikopter untuk memastikan keberadaan kapal dan memulai proses pencarian. Saat ini, tim fokus melakukan pencarian puing kapal dan pengangkatan bangkai KRI Nanggala 402.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=b6x9DcNpKfk&list=PLXVjTfiTsb6O5EKjCFai1GBbv8VCTOQPV&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <br>
                    <hr>
                    <h2>Season 2</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s2/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Merdeka Belajar Kampus Merdeka (MBKM) menjadi sebuah program yang komprehensif mempersiapkan generasi lebih unggul. Merupakan bagian dari kebijakan pemerintah, UMN menjadi salah satu kampus yang resmi menerapkan Kurikulum
                                MBKM. Kampus berharap program ini membantu mahasiswa lebih menguasai berbagai keilmuan yang berguna di dunia kerja.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=EEnvXNG4n2g&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s2/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Firma riset dunia Verisk Maplecroft merilis laporan yang memprediksikan Jakarta akan tenggelam pada 2050. Penyedotan air tanah berlebih dan perubahan iklim menjadi alasan utama terjadinya penurunan permukaan tanah, sehingga
                                tanah menjadi ambles dan adanya kenaikan permukaan air laut.</p>
                            <p>Tak hanya itu, Presiden Amerika Serikat Joe Biden menyebutkan bahwa Indonesia harus memindahkan ibu kotanya karena Jakarta berpotensi akan tenggelam dalam 10 tahun mendatang. Pernyataan tersebut disampaikan Biden dalam
                                pidato penyambutannya di Kantor Direktur Intelijen Nasional AS pada 27 Juli lalu.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=y5i9HnZQkE4&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s2/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>UMN Companion atau UNION resmi diluncurkan pada Mei 2021 lalu. Aplikasi ini dapat digunakan oleh seluruh civitas kampus. Dibantu robot chat bernama VARA, UNION membantu mahasiswa untuk mengakses informasi perkuliahan.</p>
                            <p>Ke depannya, UNION akan terus dikembangkan oleh pihak IT UMN agar dapat lebih bermanfaat bagi civitas UMN, khususnya mahasiswa.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=Ga2lElk9a-k&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s2/ep4.jpg')}}">
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>Atlet Merah Putih membawa pulang 9 medali dari Paralimpiade Tokyo 2020. Pencapaian tersebut membuat Indonesia berada di urutan ke-43 dari 78 negara yang ada pada klasemen akhir. Selain itu, pada penyelenggaraan kali ini,
                                Indonesia telah pecah rekor untuk raih medali emas setelah perolehan terakhir di 1980.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=RENB0B1ng1s&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=4"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s2/ep5.jpg')}}">
                        <div class="title">
                            <h4>Episode 5</h4>
                            <p>KRL resmi mewajibkan seluruh penumpangnya untuk menunjukkan sertifikat vaksin minimal dosis pertama sejak 11 September lalu.</p>
                            <p>Persyaratan baru untuk naik KRL ini juga bisa dipenuhi dengan melakukan scan kode QR di aplikasi PeduliLindungi. Hal ini diterapkan KAI Commuter selaku penyedia transportasi umum untuk mendukung program vaksinasi pemerintah.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=fOvPJJ3ebKs&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=5"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/mersi/s2/ep6.jpg')}}">
                        <div class="title">
                            <h4>Episode 6</h4>
                            <p>Kegiatan tahunan yang diselenggarakan untuk mengatasi isu global, Global Citizen Live digelar pada 25 September 2021. Sejumlah aktivis, pemimpin dunia, hingga artis ternama ikut berpartisipasi dalam acara yang disiarkan
                                selama 24 jam ini.</p>
                            <p>Salah satu band terbesar di dunia, Coldplay turut mengajak Presiden Republik Indonesia Joko Widodo untuk berkomitmen menyelamatkan bumi dengan bergabung dalam koalisi advokasi untuk krisis iklim di Indonesia pada acara
                                ini.
                            </p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=ZZxjnNDwDXs&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=6"><i class="fa fa-play-circle"></i></a>
                    </div>

                    
                </div>
            </div>
            {{-- <div class="modal-footer mersi-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal Mersi -->


<!-- Modal Sanantara -->
<div class="modal fade" id="modalSanantara" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalSanantaraLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header sanantara-header d-flex justify-content-end">
                <p class="modaltitle">Sanantara</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <h2>Season 1</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s1/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Kalian percaya sama mitos gak? Tau gak sih kalo mitos masih sering dipercaya oleh kebanyakan orang Indonesia lho! Nah, itulah mengapa Indonesia sangat kaya akan cerita dari berbagai budaya, suku, dan agama!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=hWgtXYyqDvY&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s1/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Tahu ga sih? Banyak sekali loh tarian tradisional di Indonesia! Salah satunya adalah tarian kreasi khas Tangerang khusus untuk menyambut bulan Ramadhan. Di episode kedua ini, Chelsea akan berkunjung ke sebuah sanggar tari
                                yang membuat tari kreasi tersebut, Chelsea akan berbagi kepada Taruna sekalian, bagaimana sih asal mula dan makna dari tarian kreasi ini. Pada penasaran kan?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=zYh7HLfRdm4&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s1/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Percaya ga percaya, penduduk Indonesia sudah tidak asing lagi mendengar kata sambal, bahkan hampir sebagian besar masyarakat justru mencintai makanan tambahan ini loh Taruna. Cara membuatnya pun tergolong mudah. Bagaimana
                                sih caranya?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=dDCZ4UfJ-d4&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>

                    <br>
                    <hr>
                    <h2>Season 2</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s2/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Pada episode pertama di season 2 ini, Chelsea mengajak Taruna untuk menjelajahi wilayah Nusantara melalui jajanan tradisional yang bisa taruna temukan di pasar.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=Hqq3uLjMOEE"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s2/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Indonesia memiliki banyak kekayaan budaya, salah satunya kain. Akhir-akhir ini, kain khas Indonesia sempat menjadi trend dikalangan anak muda untuk dijadikan sebagai salah satu komponen outfit untuk berpergian.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=sfcAl7vz4Ng&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=4"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s2/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Perubahan pelaksanaan kuliah tatap muka menjadi daring kerap membatasi kita melakukan kegiatan. Banyak kegiatan ataupun acara yang saat ini tertunda atau dibatalkan.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=xmOyWmFLGBg&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=5"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s2/ep4.jpg')}}">
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>Indonesia itu kaya dengan bahasa daerah! Sobat Taruna tau gak sih, ada banyak bahasa di Indonesia yang mungkin jarang kita dengarkan di lingkungan kita.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=3HGfqxA4xCY&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=6"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s2/ep5.jpg')}}">
                        <div class="title">
                            <h4>Episode 5</h4>
                            <p>Setelah pada beberapa episode sebelumnya, Chelsea sudah makan jajanan tradisional yang biasa dijual di pasar. Di episode ini, Chelsea mau memberikan rekomendasi dan ngajak kalian mencoba minum minuman tradisional dari Indonesia
                                yang bisa membantu menghangatkan badan dikala kedinginan, penasaran?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=Q0IYAapKing&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=7"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/sanantara/s2/ep6.jpg')}}">
                        <div class="title">
                            <h4>Episode 6</h4>
                            <p>Di episode yang terakhir ini, Chelsea akan berbincang bersama bintang tamu yang cukup spesial bagi komunitas Teater, Venytha Yoshianthini.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=ZgLA4i2jp80&list=PLXVjTfiTsb6O89ohD9EhI9NMt071Q0xRy&index=8"><i class="fa fa-play-circle"></i></a>
                    </div>

                    
                </div>
            </div>
            {{-- <div class="modal-footer sanantara-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal Sanantara -->


<!-- Modal Pepox -->
<div class="modal fade" id="modalPepox" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalPepoxLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pepox-header d-flex justify-content-end">
                <p class="modaltitle">Pepox</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <h2>Season 1</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s1/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Karena tidak ada manusia yang sempurna, apalagi dalam hal percintaan, perselingkuhan dalam hubungan percintaan sering dijumpai. Pepox akan mengundang kalian untuk menanyakan dan menyilangkan persepsi mengenai pilihan kalian
                                sebagai orang yang menyelingkuhi atau diselingkuhi.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=7pJ_Ois5xls&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s1/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Di episode kali ini, PEPOX mengundang beberapa narasumber untuk menyuarakan pendapat mereka mengenai hal ini. Kami juga menantang mereka untuk memecahkan stigma yang ada dengan menyatakan kenyataan yang jujur tentang gender
                                mereka.
                            </p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=G_jHKhUtRFM&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s1/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>"Kalo nyontek mah ga boleh, kan mencuri jawaban orang, tapi kalo kerja sama boleh dong. Kan sudah izin sama orangnya."</p>
                            <p>Itulah kata-kata dari pemuda-pemuda bijak jaman sekarang, tapi ... hmm ... sungguhan bijak ngga ya??</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=XErBa53j51s&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>

                    <br>
                    <hr>
                    <h2>Season 2</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s2/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Sudah 2 tahun pandemi berlangsung, berbagai macam upaya telah dilakukan oleh pemerintah untuk menahan lonjakan kasus COVID-19. Namun sampai saat ini Indonesia malah mengalami lonjakan kasus pasien COVID-19, yang mengharuskan
                                masyarakat kembali membatasi kegiatannya. Sampai kapan pandemi ini akan berlangsung?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=I6ZBIcNZLMM&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=4"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s2/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Kalian aktif main media sosial, nggak? Menurut kalian penting gak sih, untuk kita menggunakan sosial media saat ini? Atau lebih banyak dampak negatifnya ke kalian?</p>
                            <p>Walau banyak yang menggunakan media sosial untuk hiburan, media sosial juga banyak memberikan dampak positif ke beberapa orang, lho!</p>
                            <p>Jadi, menurutmu media sosial itu mendekatkan yang jauh atau menjauhkan yang dekat sih? Yuk kita berdiskusi!</p>

                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=e_ipx1pcFeM&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=5"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s2/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Sering banget ga sih denger teman kita ngomel “Duh, yuk, buruan nikah aja”? Atau malah lebih akrab dengan teman yang memandang serius banget soal pernikahan?</p>
                            <p>Pernikahan seringkali menjadi isu bagi masyarakat. Nikah muda, dibilang ga bertanggung jawab. Kalau pilih nikah telat, malah disuruh cepetan nikah sama keluarga. Sebenarnya, yang benar harus gimana sih?</p>
                            <p>Di episode kali ini, PEPOX mengundang beberapa narasumber yang akan menyuarakan pendapat mereka mengenai hal ini. Kalau kalian sendiri gimana nih people?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=laAUn_fT37Y&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=6"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s2/ep4.jpg')}}">
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>Kalian kangen nggak sih kuliah tatap muka? atau kalian lebih nyaman kuliah online? Walaupun semua itu ada plus dan minusnya. Nah, tapi kalian udah siapa belum kalau nanti kuliah tatap muka lagi?</p>
                            <p>Hmm.... atau kalian lebih prefer untuk kuliah online aja? Yuk, kita diskusi! Kira-kira apa aja sih struggle kalian selama di perkuliahan ini dan gimana sih cara kalian untuk ngelewatin semua struggle selama perkuliahan.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=8Rtn68duBkI&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=7"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s2/ep5.jpg')}}">
                        <div class="title">
                            <h4>Episode 5</h4>
                            <p>Percaya gak sih orang bertalenta sekali pun gak bisa mengalahkan orang yang punya privilege atau justru sebaliknya, ya? Memang sih gak semua privilege itu buruk, tapi gak punya privilege juga bukan berarti kamu gak bisa
                                meraih mimpi.</p>
                            <p>Setiap orang yang memiliki talenta pasti punya jalannya sendiri untuk meraih mimpinya, dengan ataupun tanpa privilege. Nah, kalau Ultimates disuruh memilih antara talenta dan privilege, pilih yang mana nih?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=L4EN2g1u_uc&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=8"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/pepox/s2/ep6.jpg')}}">
                        <div class="title">
                            <h4>Episode 6</h4>
                            <p>Ultimates, percaya gak sih dengan adanya makhluk halus? Atau Ultimates udah sering ngeliat makhluk halus, nih?</p>
                            <p>Apa jangan-jangan, Ultimates udah ada yang temenan nih sama "mereka" ? Hmm... Ultimates percaya kalau makhluk halus itu cuma sugesti orang-orang aja yang sengaja bikin kita takut?</p>
                            <p>Yuk, kita diskusi sekarang!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=GNnDSWNOC9Y&list=PLXVjTfiTsb6OTCnqchT-hz3MldNFjQz3n&index=9"><i class="fa fa-play-circle"></i></a>
                    </div>

                    
                </div>
            </div>
            {{-- <div class="modal-footer pepox-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal Pepox -->


<!-- Modal Karena -->
<div class="modal fade" id="modalKarena" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKarenaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header karena-header d-flex justify-content-end">
                <p class="modaltitle">K-Arena</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <h2>Season 1</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s1/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Halo CHINGU-DEUL! Kenalin program baru kita K-ARENA.</p>
                            <p>Siapa yang suka drama korea? Kali ini, kita bakal Cuil-Cuil film drakor Vicenzo, lho! Pastinya hits dan asik banget!! Enjoy CHINGU-DEUL!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=AzkSp6_grKw&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s1/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Halo Chingu-deul! K-Arena kembali lagi dengan episode yang gak kalah seru dari sebelumnya, kali ini kita bakal bikin kalian semua ngiler nih. Siapa hayooo yang suka makan Tteok Kkochi? Nah kali ini kita bakal bikin Tteok
                                Kkochi yang enaaaak banget! Pastiin nonton sampe abis yaa Chingu-deul!!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=gK0Y7q35qUk&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s1/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Anyeonghaseyo Chingu-deul! Kali ini K-Arena akan bahas salah satu topik yang banyak banget disukai sama orang-orang, apa lagi kalau bukan K-POP!</p>
                            <p>Di sini kita bakal bahas hal-hal menarik dan unik seputar K-POP, Hmm... Kira-kira kalian paham gak nih istilah-istilah yang ada di KPOP? Atau apa sih Big 3 yang sering disebut di KPOP?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=K1WVyOZqpbE&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>

                    <br>
                    <hr>
                    <h2>Season 2</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s2/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>HALO CHINGU-DEUL, ketemu lagi nih sama Eca dan Rava. Gimana nih perayaan 17-an temen-temen? Udah pada dapet hadiah apa aja nih?</p>
                            <p>Kalian ada keinginan untuk tinggal di Korea gak sih? Karena K-Arena akan membantu kalian dalam mengetahui lebih dalam lagi tentang budaya-budaya dan hari-hari besar di Korea Selatan. Penasaran kan? Yuk langsung aja tonton
                                di YouTube UMN TV!?</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=XBfvOkHshp8&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=4"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s2/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>JANGAN DITONTON SENDIRIAN! Hai Chingu-deul! Gimana episode K-Arena kali ini? Beda dan yang pasti menguji mental, bukan> Hiiihh~ Hati-hati, ya, Chingu-deul intinya peringatan keras tidak dianjurkan menonton sendirian!</p>
                            <p>Gimana? Makin penasaran bukan dengan pembahasan seputar Korea? Tenang aja karena Echa dan Rava akan menemani kalian terus menggali lebih dalam tentang lika-liku Korea nih. Jadi tetap menonton sampai habis ya Chingu-deul!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=k5cVWV9YTOg"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s2/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Anyeong Chingu-deul!</p>
                            <p>Kalian tau gak sih lagu-lagu hits dan trending yang jadi top chart di berbagai acara musik di Korea? Ternyata pemilihan top chart di acara musik Korea beda, lho, dari biasanya! Penasaran kan apa yang bikin beda? Yuk langsung
                                aja tonton!</p>
                            <p>Eits, tapi kalau ngomongin lagu Korea pasti kepikiran dong sama dancenya! Nah pas banget kita kedatengan mahasiswa keren dan bertalenta, Wesley dari Qorie yang bakal ajarin kita dance cover lagu Korea!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=0ErDBxndAUQ&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=5"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s2/ep4.jpg')}}">
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>Hai Chingu-deul! Ketemu lagi di K-Arena bersama Rava dan Echa. Kali ini Rava dan Echa ngebawain gossip di Korea yang masih HOT dan gerrrraaahhh banget untuk dibahas. Hmm siapa nih yang gak suka ngegosip? Hidup kita tanpa
                                gosip berasa gak ada bumbu percikan kenikmatan gitu Chingu-deul!</p>
                            <p>Makanya nih pantengin terus K-Arena karena setiap minggunya Rava dan Echa akan ngebawain pembahasan yang semakin menarik untuk dibahas. Jadi tetap menonton sampai habis ya Chingu-deul!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=NEdb3U1FGrA&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=6"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s2/ep5.jpg')}}">
                        <div class="title">
                            <h4>Episode 5</h4>
                            <p>Anyeong Chingu-deul! Rava dan Eca balik lagi nih dengan topik yang gak kalah seru dari sebelumnya!</p>
                            <p>Kalian pasti tau dong Lisa BlackPink baru aja debut solo? Nah, kali ini kita bakal kupas tuntas tentang debut solo si maknae berbakat dari BlackPink, nih!</p>
                            <p>Gak cuman itu aja, lho, kita juga bakal seru-seruan bareng main games di episode ini! Penasaran dong pastinyaa~~</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=3g6tNIwgS18&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=7"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/karena/s2/ep6.jpg')}}">
                        <div class="title">
                            <h4>Episode 6</h4>
                            <p>Anyeong Chingu-deul</p>
                            <p>Gak terasa ya K-Arena udah sampe last episode? Sedih banget gak sih kalian udah ga ketemu Echa dan Rava? Di episode kali ini crew K-Arena akan sharing gimana produksi tiap episode nya dan gimana sih perasaan mereka selama
                                produksi K-Arena?</p>
                            <p>Episode kali ini kita akan mengulik, seperti apa K-Arena di balik layar. Langsung aja ditonton sampai habis yaa!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=QVlzFLSFKnk&list=PLXVjTfiTsb6PAYc_fsYpF3hCWp0JVq6k3&index=8"><i class="fa fa-play-circle"></i></a>
                    </div>

                    
                </div>
            </div>
            {{-- <div class="modal-footer karena-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal Karena -->


<!-- Modal Kulik -->
<div class="modal fade" id="modalKulik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalKulikLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header kulik-header d-flex justify-content-end">
                <p class="modaltitle">Kulik-kulik</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <h2>Season 1</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s1/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Pada episode pertama ini, Jessy berbagi informasi tentang bagaimana cara memulai beralih untuk memakai produk ramah lingkungan. Bersama demibumi.id yang memberikan perspektif baru mengenai sampah di Indonesia.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=zZ48bkRtg6c&t=1s"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s1/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Pada episode kedua, Jessy mau mengulik gaya hidup minimalis bersama lyfewithless nih! Kulikers tau gak sih? Gaya hidup minimalis itu ternyata banyak manfaatnya loh!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=tMW6qK5wPDI"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s1/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Katanya, buku adalah jendela dunia. Pada episode terakhir season ini, Jessy mau ngobrol sama salah satu platform yang membuka peminjaman buku dan taman baca nih Kulikers! Lekaspinjam.id berbagi cerita tentang bagaimana
                                keseruan pengalaman mereka mengedepankan literasi membaca.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=_mfdQBZZDLA"><i class="fa fa-play-circle"></i></a>
                    </div>

                    <br>
                    <hr>
                    <h2>Season 2</h2>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s2/ep1.jpg')}}">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Selama ini kain tradisional seringkali diidentikkan dengan pakaian formal. Padahal, kita juga bisa, loh, pakaian sehari-hari dengan warisan budaya Indonesia! Di episode kali ini, Jessy ngobrol bareng Remaja Nusantara mengenai
                                keseruan berkain.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=MY9FU6HNH9E&list=PLXVjTfiTsb6MZPcEFPDVAUOgWbW2G8FHK&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s2/ep2.jpg')}}">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Saat ini internet menjadi prioritas masyarakat dalam kesehariannya, tapi Kulikers tau gak sih kalau literasi digital itu sangat penting untuk memperlancar Kulikers dalam menggunakan internet?</p>
                            <p>Di episode kali ini, Jessy bakal ngobrol nih bareng ICT Watch tentang literasi digital dalam keseharian! Penasaran gimana ceritanya? Yuk, saksikan liputannya!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=YsUNHjgnKeU&list=PLXVjTfiTsb6MZPcEFPDVAUOgWbW2G8FHK&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s2/ep3.jpg')}}">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>Pernah dengar perempuan gak perlu pendidikan tinggi karena ujung-ujungnya jadi ibu rumah tangga? Baik disadari maupun tidak, nyatanya kesetaraan gender masih sangat jauh dari kehidupan kita sehari-hari.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=fT5t1mqzODA"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s2/ep4.jpg')}}">
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>Menurut penelitian, angka Kekerasan Berbasis Gender Online (KBGO) mengalami peningkatan hingga 3x lipat selama masa pandemi Covid-19. Namun, apa itu sebenarnya KBGO? Yuk, simak obrolan Jessy bersama SAFEnet!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=-L_0AZIHd6o&list=PLXVjTfiTsb6MZPcEFPDVAUOgWbW2G8FHK&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s2/ep5.jpg')}}">
                        <div class="title">
                            <h4>Episode 5</h4>
                            <p>Membuat konten itu tidak hanya sekadar mencari ide dan eksekusi lho, tetapi Kulikers juga harus membangun personal branding! Kali ini Kulik-Kulik kedatangan tamu spesial yaitu Urrofi! Seorang konten kreator yang telah memiliki
                                personal branding di usia muda. Penasaran kan keseruan Jessy dan @urrofi ? Yuk, saksikan liputannya!</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=4Oq3UDAJAa0&list=PLXVjTfiTsb6MZPcEFPDVAUOgWbW2G8FHK&index=4"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/kulik/s2/ep6.jpg')}}">
                        <div class="title">
                            <h4>Episode 6</h4>
                            <p>Siapa sih yang gak kenal Stanley Hao? Pasti kulikers pernah liat nih di fyp tiktok kalian! Konten Stanley yang relate dengan kehidupan sekarang bikin Kulikers suka senyum-senyum sendiri.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=fChxnl75gPs&list=PLXVjTfiTsb6MZPcEFPDVAUOgWbW2G8FHK&index=5"><i class="fa fa-play-circle"></i></a>
                    </div>

                </div>
            </div>
            {{-- <div class="modal-footer kulik-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal Kulik -->


<!-- Modal Aad -->
<div class="modal fade" id="modalAad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header aad-header d-flex justify-content-end">
                <p class="modaltitle">Ada apa dengan</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <!-- <h2>Season 1</h2> -->
                    <div class="vid">
                        <img src="img/web-landing.png">
                        <div class="title">
                            <p>Short Story Netizen A #WIIWY (What If It Was You?)</p>
                            <p>Dibalik media sosial yang sering kita gunakan, banyak cerita yang perlu Tweeples ketahui. Tagar #WIIWY yang tren belakangan ini artinya “bagaimana jika itu adalah kamu”.</p>
                            <p>Kita memang hidup di negara demokrasi, hidup di negara yang bisa berpendapat secara bebas.</p>
                        </div>
                        <a class="btn play-button" href="https://www.instagram.com/tv/CS_yDCZBuyF/"><i class="fa fa-play-circle"></i></a>
                    </div>
                </div>

                
            </div>
        </div>
        {{-- <div class="modal-footer aad-footer">

        </div> --}}
    </div>
</div>
<!-- End Modal Aad -->


<!-- Modal Lbs -->
<div class="modal fade" id="modalLbs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLbsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header lbs-header d-flex justify-content-end">
                <p class="modaltitle">Let's be smart</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <!-- <h2>Season 1</h2> -->
                    <div class="vid">
                        {{-- <img src="img/web-landing.png"> --}}
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>[Kenapa Makan Nasi Padang Harus Pake Tangan]</p>
                            <p>Hello Smart People! Pada tau gak sih kenapa makan nasi padang pake tangan? Hayoooo.. yukk nonton Let’s Be Smart biar kalian tau kenapa sih makan nasi padang pakai tangan...</p>
                        </div>
                        <a class="btn play-button" href="https://www.instagram.com/tv/COWu7HXBdT6/"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        {{-- <img src="img/web-landing.png"> --}}
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>[LET'S BE SMART: ASAL USUL NAMA GOOGLE!]</p>
                            <p>Tanggal 4 September 2021 yang merupakan tanggal pertama kali perusahaan Google berdiri.</p>
                            <p>Hmm, kira-kira Ultimates tahu gak, asal nama Google itu dari mana?</p>
                        </div>
                        <a class="btn play-button" href="https://www.instagram.com/tv/CTZkFRxhfFj/"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        {{-- <img src="img/web-landing.png"> --}}
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>[LET'S BE SMART: MENGAPA BANYAK TEMPAT BERAWALAN CI?]</p>
                            <p>Ke mana, ke mana, ke mana?'Ku harus mencari ke mana?</p>
                            <p>Kok, banyak banget tempat berawalan Ci, ya?</p>
                            <p>Hmm, kira-kira makna kata Ci itu apa ya?</p>
                        </div>
                        <a class="btn play-button" href="https://www.instagram.com/tv/CT9lMzXhWSE/"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        {{-- <img src="img/web-landing.png"> --}}
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>[LET'S BE SMART: HARI BATIK NASIONAL]</p>
                            <p>Pada tau gak sih kenapa hari batik ditentukan pada tanggal 1 Oktober?</p>
                        </div>
                        <a class="btn play-button" href="https://www.instagram.com/tv/CUhoVNJBeZQ/"><i class="fa fa-play-circle"></i></a>
                    </div>

                    
                </div>
            </div>
            {{-- <div class="modal-footer lbs-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal Lbs -->

<!-- Modal spesial -->
<div class="modal fade" id="modalSpesial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLbsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header lbs-header d-flex justify-content-end">
                <p class="modaltitle">Special Episode</p>
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <!-- <h2>Season 1</h2> -->
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/spesial/1.jpg')}}">
                        <div class="title">
                            <h4>Box of People - TIM KREATIF NGAPAIN SIH?</h4>
                            <p>Halo Ultimates!! Berbeda dari sebelumnya kali ini kita hadir dengan special episode nih! Kalian tau gak sih sama lalu lalang tim kreatif di balik proses produksi? Kira-kira jadi tim kreatif tuh capek gak ya? Atau justru seru? Buat kalian yang pengen jadi tim kreatif pasti penasaran dong! Yuk Ultimates langsung aja tonton special episode kali ini karena kita akan menjawab semua rasa penasaran kalian! </p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=G4-q9wxMtIA&ab_channel=UMNTV"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/spesial/2.jpg')}}">
                        <div class="title">
                            <h4>Film Pendek - Bandwagon (2021)</h4>
                            <p>Bagaimana kehidupan seorang bandwagon?</p>

                            <p>Hidup Fiona terdikte oleh media sosial. Ia selalu mengikuti trend dan semakin jauh dari kebenaran. Fiona menjadi sosok yang terbentuk dari orang lain. Short movie ini kami buat untuk memberikan insight kepada penonton untuk menjadi lebih percaya diri.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=vuQOGpP0hms&ab_channel=UMNTV"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="{{asset('/img/modal/thumbnails/spesial/3.jpg')}}">
                        <div class="title">
                            <h4>Find The Story</h4>
                            <p>Yuk kita lihat keseruan apa aja sih yang ada di balik layar UMN TV?! selama ini apa saja sih yang mereka lakukan untuk memberikan tayangan yang menarik untuk kalian?! Jangan lewatkan Special Episode: Find The Story.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=30Yxngb7-ok&ab_channel=UMNTV"><i class="fa fa-play-circle"></i></a>
                    </div>

                    
                </div>
            </div>
            {{-- <div class="modal-footer lbs-footer">

            </div> --}}
        </div>
    </div>
</div>
<!-- End Modal spesial -->

<!-- Program Card -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-1">
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up" style="background: linear-gradient(120deg, #58158f, #6b2272, #9b4293, #ce36a0);">
                {{-- <img src="{{asset('/img/modal/thumbnails/spesial/1.jpg')}}" class="card-img-top programImg" > --}}
                <img src="{{asset('/img/modal/thumbnails/spesial/3.jpg')}}">

                <div class="card-detail">
                    {{-- <h3 class="cardTitle">Special Episode</h3> --}}
                    <p class="cardInfo">
                    
                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalSpesial"><i class="fa fa-play-circle"></i> Episodes
                        </button>
                </div>
            </div>
        </div>
    </div>


    <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/mersi.jpg')}}" class="card-img-top programImg" >
                <div class="card-detail">
                    <h3 class="cardTitle">Meja Redaksi</h3>
                    <p class="cardInfo">
                    Meja Redaksi adalah program berita dengan beragam informasi aktual, 
                    faktual, 
                    dan ter-update yang dikemas secara menarik dan santai. Meja Redaksi kembali hadir dengan beragam informasi untuk Anda! 
                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalMersi"><i class="fa fa-play-circle"></i> Episodes
                        </button>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/sanantara.jpg')}}" class="card-img-top programImg">
                <div class="card-detail">
                    <h3 class="cardTitle">Sanantara</h3>
                    <p class="cardInfo">Chelsea akan menemani kalian di Sanantara dengan memberikan informasi dan fakta menarik seputar budaya Indonesia, tentunya dengan sajian yang menarik dan inovatif, lho! Sanantara, Pahami Nusantara!
                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalSanantara"><i class="fa fa-play-circle"></i> Episodes
                    </button>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/pepox.jpg')}}" class="card-img-top programImg" alt="meja-redaksi">
                <div class="card-detail">
                    <!--<h3 class="cardTitle hide">Pepox</h3>-->
                    <p class="cardInfo">Halo, mari berdiskusi. Apakah timun adalah buah atau  sayur? Mungkinkah bumi benar-benar bulat? Apakah kamu tim bubur diaduk? Kalau iya kenapa? <br>
Pepox menjadi wadah untuk kalian berdiskusi tentang apa pun. Kami mengundang  banyak orang dari berbagai latar belakang untuk berpendapat tentang opini yang kalian punya tentang berbagai topik. Jadi, mari berdiskusi!

                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalPepox"><i class="fa fa-play-circle"></i> Episodes
                    </button>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/karena.jpg')}}" class="card-img-top programImg" alt="westyle">
                <div class="card-detail">
                    <h3 class="cardTitle">K-Arena</h3>
                    <p class="cardInfo">Annyeong, chingu-deul! Sesuai dengan nama dan tagline-nya, K-Arena adalah program UMN TV yang membahas tentang Korea Selatan. Bukan hanya K-Pop atau K-Drama saja, K-Arena juga akan membicarakan tentang budaya, fashion and make up, hot place, hingga makanan khas Korea Selatan!
                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalKarena"><i class="fa fa-play-circle"></i> Episodes
                    </button>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/kulik.jpg')}}" class="card-img-top programImg" alt="westyle">
                <div class="card-detail">
                    <h3 class="cardTitle">Kulik kulik</h3>
                    <p class="cardInfo">Halo, Kulikers! Kali ini, Kulik-Kulik kembali hadir untuk menyajikan konten inspiratif dan juga mengedukasi tentang literasi sosial. Ditemani Ratujesya Akira, Kulik-Kulik akan membuat Jumat malam kalian penuh makna, lho! 

                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalKulik"><i class="fa fa-play-circle"></i> Episodes
                    </button>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/aad.png')}}" class="card-img-top programImg" alt="westyle">
                <div class="card-detail">
                    <h3 class="cardTitle">Ada apa dengan</h3>
                    <p class="cardInfo">CCP kembali hadir dengan konten yang pasti menjawab rasa penasaran kalian, loh! Kali ini, CCP akan menyajikan konten seputar trending topic dari Twitter yang dikemas dengan aktual dan kreatif. Jangan sampai kelewatan, Tweeples! 

                    </p>
                </div>
                <div class="text-center">
                    <a class="btn watch-btn" href="https://www.instagram.com/tv/CS_yDCZBuyF/"><i class="fa fa-play-circle"></i> Play
                    </a>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="program-card" data-aos="fade-up">
                <img src="{{asset('/img/programgen7/lbs.png')}}" class="card-img-top programImg" alt="westyle">
                <div class="card-detail">
                    <h3 class="cardTitle">Let's be Smart</h3>
                    <p class="cardInfo">CCP datang membawakan program yang lebih menarik lagi dengan konten informatif dan edukatif seputar hal-hal yang jarang diketahui banyak orang, loh! Yuk tambah pengetahuanmu dengan memantau terus konten CCP!  
                    </p>
                </div>
                <div class="text-center">
                    <button type="button" class="btn watch-btn" data-bs-toggle="modal" data-bs-target="#modalLbs"><i class="fa fa-play-circle"></i> Episodes
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="text-center" style="padding: 10px;">
        <a class="btn watch-btn" style="padding: 10px;" href="https://www.youtube.com/channel/UC2I_6GJyyXHzVzuXvp9IsfA"> <i class="fa fa-youtube"></i> More On YouTube
        </a>
    </div>
</div>
@stop