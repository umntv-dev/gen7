@extends('layouts.app')

@section('content')

<div class="modal fade" id="modalMersi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMersiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mersi-header d-flex justify-content-end">
                <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>
            </div>
            <div class="modal-body">
                <div class="video-list">
                    <h2>Season 1</h2>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s1/ep1.jpg">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>UMN Animation and Film Festival (UCIFEST) kembali menyapa para pegiat film. Mengusung tema luar angkasa, UCIFEST 12 berharap pembuat film dapat terus berkreasi di tengah pandemi. Tahun ini, UCIFEST 12 menghadirkan pegiat
                                film seperti Robby Ertanto, Gaga Nugraha, hingga Hanung Bramantyo.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=EGAD30uAlds&list=PLXVjTfiTsb6O5EKjCFai1GBbv8VCTOQPV&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s1/ep2.jpg">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Hari Kartini menjadi momentum pengingat sejarah emansipasi wanita di Indonesia. Sosok kartini yang menginspirasi patut dijadikan cerminan perempuan masa kini. Salah satunya, Menteri Keuangan Sri Mulyani sebagai Wanita Paling
                                berpengaruh di Dunia ke-78.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=VFmRZyAQV4g&list=PLXVjTfiTsb6O5EKjCFai1GBbv8VCTOQPV&index=2"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s1/ep3.jpg">
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
                        <img src="img/thumbnail/mersi/s2/ep1.jpg">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Merdeka Belajar Kampus Merdeka (MBKM) menjadi sebuah program yang komprehensif mempersiapkan generasi lebih unggul. Merupakan bagian dari kebijakan pemerintah, UMN menjadi salah satu kampus yang resmi menerapkan Kurikulum
                                MBKM. Kampus berharap program ini membantu mahasiswa lebih menguasai berbagai keilmuan yang berguna di dunia kerja.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=EEnvXNG4n2g&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=1"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s2/ep2.jpg">
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
                        <img src="img/thumbnail/mersi/s2/ep3.jpg">
                        <div class="title">
                            <h4>Episode 3</h4>
                            <p>UMN Companion atau UNION resmi diluncurkan pada Mei 2021 lalu. Aplikasi ini dapat digunakan oleh seluruh civitas kampus. Dibantu robot chat bernama VARA, UNION membantu mahasiswa untuk mengakses informasi perkuliahan.</p>
                            <p>Ke depannya, UNION akan terus dikembangkan oleh pihak IT UMN agar dapat lebih bermanfaat bagi civitas UMN, khususnya mahasiswa.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=Ga2lElk9a-k&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=3"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s2/ep4.jpg">
                        <div class="title">
                            <h4>Episode 4</h4>
                            <p>Atlet Merah Putih membawa pulang 9 medali dari Paralimpiade Tokyo 2020. Pencapaian tersebut membuat Indonesia berada di urutan ke-43 dari 78 negara yang ada pada klasemen akhir. Selain itu, pada penyelenggaraan kali ini,
                                Indonesia telah pecah rekor untuk raih medali emas setelah perolehan terakhir di 1980.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=RENB0B1ng1s&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=4"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s2/ep5.jpg">
                        <div class="title">
                            <h4>Episode 5</h4>
                            <p>KRL resmi mewajibkan seluruh penumpangnya untuk menunjukkan sertifikat vaksin minimal dosis pertama sejak 11 September lalu.</p>
                            <p>Persyaratan baru untuk naik KRL ini juga bisa dipenuhi dengan melakukan scan kode QR di aplikasi PeduliLindungi. Hal ini diterapkan KAI Commuter selaku penyedia transportasi umum untuk mendukung program vaksinasi pemerintah.</p>
                        </div>
                        <a class="btn play-button" href="https://www.youtube.com/watch?v=fOvPJJ3ebKs&list=PLXVjTfiTsb6PmybL_ou71nRFYWSI37O8D&index=5"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/thumbnail/mersi/s2/ep6.jpg">
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

                    <!-- <br>
                    <hr>
                    <h2>Special Episode</h2>
                    <div class="vid">
                        <img src="img/web-landing.png">
                        <div class="title">
                            <h4>Episode 1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt molestias reprehenderit nam. Dolore facilis corrupti delectus assumenda, non perferendis cum quidem, tempore omnis quia iure esse placeat ipsam ratione iusto?</p>
                        </div>
                        <a class="btn play-button" href="#"><i class="fa fa-play-circle"></i></a>
                    </div>
                    <div class="vid">
                        <img src="img/web-landing.png">
                        <div class="title">
                            <h4>Episode 2</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt molestias reprehenderit nam. Dolore facilis corrupti delectus assumenda, non perferendis cum quidem, tempore omnis quia iure esse placeat ipsam ratione iusto?</p>
                        </div>
                        <a class="btn play-button" href="#"><i class="fa fa-play-circle"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="modal-footer mersi-footer">

            </div>
        </div>
    </div>
</div>

@stop