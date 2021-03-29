<html>
<head>
    <title>Veminsys</title>
    <meta charset="utf">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/konten.css')}}">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Buat Footer -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Ini bakalan headbar -->
    <script type="text/javascript">
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })
    </script>
</head>

<body>
    <!-- headbar -->
    <nav style="font-family: HKGroteskBold;">
        <div>
            <ul>
                <li><a href="# " class="active ">Beranda</a></li>
                <li><a href="# ">Portofolio</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center ">
        <h1>Sistem Informasi Kendaraan</h1>
        <p>Sistem pengatur kendaraan.</p>
        <form class="form-inline ">
            <div class="input-group ">
                <input type="email " class="form-control " size="50 " placeholder="Cari: " required>
                <div class="input-group-btn ">
                    <button type="button " class="btn btn-primary ">CARI</button>
                </div>
            </div>
        </form>
    </div>

    <!-- kontainer about-->
    <!-- 
    <div id="about " class="container-fluid ">
        <div class="row ">
            <div class="col-sm-8 ">
                <h2>Tentang Sistem Informasi Kendaraan</h2>
                <h4>Sistem Pengatur Kendaraan</h4>
                <p>Sistem Informasi Kendaraan merupakan sistem buatan pemerintah yang mendetail serba-serbi kendaraan masyarakat serta menyediakan fitur-fitur yang berhubungan dengan kendaraan</p>
                <p>Fitur-fiturnya antara lain adalah pembayaran E-toll secara online, pembayaran pajak dan notifikasi pengingatnya disertai daftar history, sistem paylater, juga biodata kendaraan.</p>
                <p>Sistem Informasi ini resmi dan didukung oleh pemerintah, difasilitaskan kepada seluruh elemen negara agar dapat lebih mudah mengurus kendaraan</p>
                <br>
                <button class="btn btn-default btn-lg ">Lebih Detail</button>
            </div>
            <div class="col-sm-4 ">
                <div class="thumbnail ">
                    <br><br><br><br><img src="img/logo.jpg" alt="logo" width="600px">
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid bg-grey ">
        <div class="row ">
            <div class="col-sm-4 ">
                <br><br><br><br>
                <span class="glyphicon glyphicon-globe logo "></span>
            </div>
            <div class="col-sm-8 ">
                <h2>Tentang Sistem Informasi Kendaraan</h2>
                <h4><strong>Sistem Pengatur Kendaraan</strong></h4>
                <p>Sistem Informasi Kendaraan merupakan sistem buatan pemerintah yang mendetail serba-serbi kendaraan masyarakat serta menyediakan fitur-fitur yang berhubungan dengan kendaraan.</p>
                <p>Fitur-fiturnya antara lain adalah pembayaran E-toll secara online, pembayaran pajak dan notifikasi pengingatnya disertai daftar history, sistem paylater, juga biodata kendaraan.</p>
                <p>Sistem Informasi ini resmi dan didukung oleh pemerintah, difasilitaskan kepada seluruh elemen negara agar dapat lebih mudah mengurus kendaraan.</p>
                <br>
            </div>
        </div>
    </div>

    <!-- kontainer service -->

    <div id="services" class="container-fluid text-center">
        <h2>FITUR</h2>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-flag logo-small"></span>
                <h4>Pajak</h4>
                <p>Pajak kendaraan berkala pemerintah akan secara otomatis dimasukkan ke dalam web, dan warga negara diwajibkan membayarnya.</p>
            </div>

            <div class="col-sm-4">
                <span class="glyphicon glyphicon-star logo-small"></span>
                <h4>Paylater</h4>
                <p>Fitur layanan pinjaman online dari pemerintah mengenai transaksi yang berhubungan dengan kendaraan, entah itu pajak, E-toll, atau yang lainnya.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-refresh logo-small"></span>
                <h4>E-toll</h4>
                <p>Membayar toll secara online supaya memudahkan dan mempercepat proses antrian pembayaran, E-toll pun memasukkan opsi paylater</p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-euro logo-small"></span>
                <h4>History Pembayaran</h4>
                <p>Sejarah pembayaran apa pun tentang kendaraan yang diwajibkan pemerintah, seperti pajak, E-toll, dan lainnya tercatat otomatis ke dalam history ini.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>Reminder Pembayaran</h4>
                <p>Fitur notifikasi dari sistem agar para pengguna segera melaksanakan kewajibannya, seperti membayar paylater, pajak, dan pembayaran lain. Sehingga surat resmi kendaraan tidak mendadak dimatikan pemerintah.</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color:#303030;">Biodata Kendaraan</h4>
                <p>Jarak bukan lagi kendala dalam komunikasi dan konsultasi. Menggunakan sarana internet kinerja akan lebih cepat, praktis dan efisien.</p>
            </div>
        </div>
    </div>

    <!-- Kontak -->
    <section>
        <div class="containerKontak">
            <div class="contactInfo">
                <div>
                    <h2>Info Kontak</h2>
                    <ul class="info">
                        <li>
                            <span>
                                <img src="{{asset('img/location.png')}}">
                            </span>
                            <span>
                                666 Jalan Jakarta<br>
                                Jakarta, Indonesia<br>
                                666666
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="img/mail.png">
                            </span>
                            <span>
                                ndap.cahyo@gmail.com
                            </span>
                        </li>
                        <li>
                            <span>
                                <img src="img/call.png">
                            </span>
                            <span>
                                08881717179
                            </span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li>
                        <li>
                            <a href="#"><img src="{{asset('img/1.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('img/2.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('img/3.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('img/4.png')}}"></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{asset('img/5.png')}}"></a>
                        </li>
                    </li>
                </ul>
            </div>
            <div class="contactForm">
                <h2>Kirim Pesan</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Nama Depan</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Nama Belakang</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>Nomor Telepon</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea required></textarea>
                        <span>Tulis pesan Anda di sini ....</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="Kirim">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div style="background-color: rgb(69, 163, 192);;">
        <div class="main-content">
            <div class="left box">
                <h2>Tentang kami</h2>
                <div class="content" style="color: white">
                    <p>Web Sistem Informasi Kendaraan ini dikerjakan oleh empat orang mahasiswa dengan penuh hati serta cinta, dengan harapan selain memenuhi tugas Proyek1, namun juga meningkatkan keahlian kami di bidang IT terkhusus bagian web, terima kasih.</p>
                </div>
            </div>
            <div class="center box" style="color: #fff;">
                <h2>Elemen Pendukung</h2>
                <div class="content">
                    <p>a. Kementerian Perhubungan</p>
                    <p>b. Kementerian Dalam Negeri</p>
                    <p>c. Kepolisian Negara Republik Indonesia</p>
                </div>
            </div>
            <div class="center box" style="color: #fff;">
                <h2>Dasar Hukum</h2>
                <div class="content">
                    <p>1. UUD no 1 tahun 2021</p>
                    <p>2. UUD no 2 tahun 2021</p>
                    <p>3. UUD no 3 tahun 2021</p>
                    <p>4. UUD no 4 tahun 2021</p>
                    <p>5. UUD no 5 tahun 2021</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>