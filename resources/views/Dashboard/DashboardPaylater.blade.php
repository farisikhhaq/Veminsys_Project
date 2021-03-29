<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Dashboard</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="assets/img/perfil.jpg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">NieR Automata</span>
                </a>

                <div class="nav__list">
                    <a href="dashboard.html" class="nav__link">
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

                    <a href="paylater.html" class="nav__link active">
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

    <h1 style="padding-top: 20px;">Paylater</h1>
    <hr>

    <table class="table table-bordered" style="text-align: center;">
        <thead class="thead" style="background-color: #7b59d0">
            <tr style="color: #fff">
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Atas Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" style="color: #7b59d0;">1</th>
                <td>1-12-2020</td>
                <td>Daffa Cahyo Alghifari</td>
                <td>Rp 1.000.000</td>
                <td><a href="dashboardTransaksi.html" class="btn btn-primary">Bayar</a></td>
            </tr>
            <tr>
                <th scope="row" style="color: #7b59d0;">2</th>
                <td>2-12-2020</td>
                <td>Daffa Cahyo Alghifari</td>
                <td>Rp 1.000.000</td>
                <td><a href="dashboardTransaksi.html" class="btn btn-primary">Bayar</a></td>
            </tr>
            <tr>
                <th scope="row" style="color: #7b59d0;">3</th>
                <td>3-12-2020</td>
                <td>Daffa Cahyo Alghifari</td>
                <td>Rp 1.000.000</td>
                <td><a href="dashboardTransaksi.html" class="btn btn-primary">Bayar</a></td>
            </tr>
        </tbody>
    </table>



    <!--===== MAIN JS =====-->
    <script src="dashboard.js"></script>
</body>

</html>