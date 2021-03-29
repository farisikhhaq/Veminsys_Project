<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script href="{{asset('js/dashboard.js')}}"></script>
    <title>USER</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="{{asset('assets/img/perfil.jpg')}}" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        {{-- @include('template.navbar') --}}
        <nav class="nav">
            <div>
                <a href="konten.html" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">NieR Automata</span>
                </a>

                <div class="nav__list">
                    <a href="dashboard.html" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="transaksi.html" class="nav__link">
                        <i class='bx bxs-credit-card-alt'></i>
                        <span class="nav__name">Transaksi</span>
                    </a>

                    <a href="pajak.html" class="nav__link">
                        <i class='bx bx-money'></i>
                        <span class="nav__name">Pajak</span>
                    </a>

                    <a href="paylater.html" class="nav__link">
                        <i class='bx bxs-credit-card'></i>
                        <span class="nav__name">Paylater</span>
                    </a>

                    <a href="reminder.html" class="nav__link">
                        <i class='bx bxs-watch'></i>
                        <span class="nav__name">Reminder</span>
                    </a>
                    <a href="biodataKendaraan.html" class="nav__link">
                        <i class='bx bx-car'></i>
                        <span class="nav__name">Biodata Kendaraan</span>
                    </a>
                    <a href="historyKendaraan.html" class="nav__link">
                        <i class='bx bx-car'></i>
                        <span class="nav__name">History Kendaraan</span>
                    </a>
                </div>
            </div>

            <a href="Login.html" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <h1 style="padding-top: 20px;">Dashboard</h1>
    <hr>

    <div class="cardUtama">
        <div class="card mb-3 bg-info" style="width: 450px; padding-top: 3px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class='bx bxs-credit-card-alt'></i>
                        </div>
                        <h5 class="tema mb-4" style="font-size: 30px;">Transaksi</h5>
                        <a href="transaksi.html" class="btn btn-light">
                            <p class="card-text">Lihat Detail</p>
                        </a>
                        <p class="card-text mt-3"><small style="color: white;">Pembayaran terakhir satu bulan lalu</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-danger" style="width: 450px; padding-top: 3px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class='bx bx-money'></i>
                        </div>
                        <h5 class="tema mb-4" style="font-size: 30px;">Pajak</h5>
                        <a href="pajak.html" class="btn btn-light">
                            <p class="card-text">Lihat Detail</p>
                        </a>
                        <p class="card-text mt-3"><small style="color: white;">Pembayaran terakhir satu bulan lalu</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-success" style="width: 450px; padding-top: 3px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class='bx bxs-credit-card'></i>
                        </div>
                        <h5 class="tema mb-4" style="font-size: 30px;">Paylater</h5>
                        <a href="paylater.html" class="btn btn-light">
                            <p class="card-text">Lihat Detail</p>
                        </a>
                        <p class="card-text mt-3"><small style="color: white;">Pembayaran terakhir satu bulan lalu</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-warning" style="width: 450px; padding-top: 3px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class='bx bxs-watch'></i>
                        </div>
                        <h5 class="tema mb-4" style="font-size: 30px;">Reminder</h5>
                        <a href="reminder.html" class="btn btn-light">
                            <p class="card-text">Lihat Detail</p>
                        </a>
                        <p class="card-text mt-3"><small style="color: white;">Pembayaran terakhir satu bulan lalu</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-primary" style="width: 450px; padding-top: 3px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class='bx bx-car'></i>
                        </div>
                        <h5 class="tema mb-4" style="font-size: 30px;">Biodata Kendaraan</h5>
                        <a href="#" class="btn btn-light">
                            <p class="card-text">Lihat Detail</p>
                        </a>
                        <p class="card-text mt-3"><small style="color: white;">Pembayaran terakhir satu bulan lalu</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 bg-dark" style="width: 450px; padding-top: 3px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class='bx bx-car'></i>
                        </div>
                        <h5 class="tema mb-4" style="font-size: 30px;">History Kendaraan</h5>
                        <a href="#" class="btn btn-light">
                            <p class="card-text">Lihat Detail</p>
                        </a>
                        <!-- <i class='bx bx-right-arrow-circle' style="font-size: 30px;"></i> -->
                        <p class="card-text mt-3"><small style="color: white;">Pembayaran terakhir satu bulan lalu</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--===== MAIN JS =====-->
    <script src="dashboard.js"></script>
</body>

</html>