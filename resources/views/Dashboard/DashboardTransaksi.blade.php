<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/dashboardTransaksi.css')}}">

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <title>Daffa kyaa</title>
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
                    <a href="#" class="nav__link active">
                        <i class='bx bxs-credit-card-alt'></i>
                        <span class="nav__name">Pembayaran</span>
                    </a>

                    <a href="" class="nav__link">
                        <i class='bx bxs-credit-card-alt'></i>
                        <span class="nav__name">Selesai</span>
                    </a>
                </div>
            </div>

            <a href="#" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Kembali</span>
            </a>
        </nav>
    </div>
    <br>
    <h1>Pembayaran</h1>
    <!--===== MAIN JS =====-->
    <script src="dashboardTransaksi.js "></script>

    <div class="booking-form-box ">
        <div class="booking-form ">
            <label>Password</label>
            <input type="text " class="form-control " placeholder="Isi Password ">
            <label>Password Ganda</label>
            <input type="text " class="form-control " placeholder="Ulangi Password ">

            <div class="input-grp ">
                <label>Tanggal Tagihan</label>
                <a class="form-control ">mm/dd/yy</a>
            </div>

            <div class="input-grp ">
                <label>Tanggal Pembayaran</label>
                <a class="form-control ">mm/dd/yy</a>
            </div>

            <div class="input-grp ">
                <label>Atas Nama</label>
                <input type=" " class="form-control ">
            </div>

            <div class="input-grp ">
                <label>No. Pembayaran</label>
                <a class="form-control " value="0 ">6666</a>
            </div>

            <div class="input-grp ">
                <label>Travel Class</label>
                <select class="custom-select ">
                    <option value="1 ">Bank</option>
                    <option value="2 ">Link Aja</option>                
                </select>
            </div>

            <div class="input-grp ">
                <button type="button " class="btn btn-danger flight "><b>Bayar</b></button>
            </div>
        </div>
    </div>

</body>

</html>