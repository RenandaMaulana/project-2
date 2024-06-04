<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Alun-Alun Subang</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('spica') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('spica') }}/vendors/css/vendor.bundle.base.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('spica') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        @include('Admin.v_navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="{{ asset('spica') }}/index.html"></a>
                        <a class="navbar-brand brand-logo-mini" href="{{ asset('spica') }}/index.html"></a>
                    </div>
                    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">
                        Pembayaran Kas Alun-Alun Subang
                    </h4>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <h4 class="mb-0 font-weight-bold d-none d-xl-block">
                                Mar 12, 2019 - Apr 10, 2019
                            </h4>
                        </li>
                        <li class="nav-item dropdown mr-1">
                            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                                id="messageDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-calendar mx-0"></i>
                                <span class="count bg-info">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">
                                    Messages
                                </p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('spica') }}/images/faces/face4.jpg" alt="image"
                                            class="profile-pic" />
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">
                                            David Grey
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            The meeting is cancelled
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('spica') }}/images/faces/face2.jpg" alt="image"
                                            class="profile-pic" />
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">
                                            Tim Cook
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            New product launch
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic" />
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-normal">
                                            Johnson
                                        </h6>
                                        <p class="font-weight-light small-text text-muted mb-0">
                                            Upcoming board meeting
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                                id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-email-open mx-0"></i>
                                <span class="count bg-danger">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">
                                    Notifications
                                </p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi-information mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">
                                            Application Error
                                        </h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">
                                            Settings
                                        </h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi-account-box mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">
                                            New user registration
                                        </h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here..."
                                    aria-label="search" aria-describedby="search" />
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                id="profileDropdown">
                                <img src="../../images/faces/face5.jpg" alt="profile" />
                                <span class="nav-profile-name">{{ auth()->user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="mdi mdi-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link icon-link">
                                <i class="mdi mdi-plus-circle-outline"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link icon-link">
                                <i class="mdi mdi-web"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link icon-link">
                                <i class="mdi mdi-clock-outline"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- row end -->
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pembayaran kas</h4>
                                    <p class="card-description">Pembayaran kas</p>
                                    <form action="{{ route('tambahkas_admin') }}" method='POST'>
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nama</label>
                                            <input name="name" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="username"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email</label>
                                            <input name="email" class="form-control" placeholder="email"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Jumlah Pembayaran</label>
                                            <input name="jumlah_pembayaran" type="number"
                                                class="form-control"></input>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">metode pembayaran</label>
                                            <select name="metode_pembayaran"class="form-control">
                                                <option Value="cash">Cash</option>
                                                <option value="BRI">BRI</option>
                                                <option value="BNI">BNI</option>
                                                <option Value="BCA">BCA</option>
                                            </select>
                                        </div>
                                        <label class="form-control">Anda dapat
                                            melakukan pembayaran dengan cara sebagai berikut:</label>

                                        <ul id="how-to-pay" class="accordion list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="#atm-bni" class="text-decoration-none stretched-link"
                                                    data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="atm-bni">ATM
                                                    BNI</a>
                                            </li>
                                            <div id="atm-bni" class="card-body collapse" aria-labelledby="atm-bni"
                                                data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Masukkan Kartu Anda.</li>
                                                    <li>Pilih Bahasa.</li>
                                                    <li>Masukkan PIN ATM Anda.</li>
                                                    <li>Pilih "Menu Lainnya".</li>
                                                    <li>Pilih "Transfer".</li>
                                                    <li>Pilih Jenis rekening yang akan Anda gunakan (Contoh;
                                                        "Dari Rekening Tabungan").</li>
                                                    <li>Pilih “Virtual Account Billing”.</li>
                                                    <li>Masukkan nomor Virtual Account Anda (contoh:
                                                        8277087781881441).</li>
                                                    <li>Tagihan yang harus dibayarkan akan muncul pada layar
                                                        konfirmasi.</li>
                                                    <li>Konfirmasi, apabila telah sesuai, lanjutkan
                                                        transaksi.</li>
                                                    <li>Transaksi Anda telah selesai</li>
                                                </ol>
                                            </div>

                                            <li class="list-group-item">
                                                <a href="#mobile-banking-bni"
                                                    class="text-decoration-none stretched-link" data-toggle="collapse"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="mobile-banking-bni">Mobile Banking
                                                    BNI</a>
                                            </li>
                                            <div id="mobile-banking-bni" class="card-body collapse"
                                                aria-labelledby="mobile-banking-bni" data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Akses bni mobile banking dari handphone kemudian
                                                        masukkan user id dan password</li>
                                                    <li>Pilih menu “Transfer”.</li>
                                                    <li>Pilih menu “Virtual Account Billing” kemudian pilih
                                                        rekening debet.</li>
                                                    <li>Masukkan nomor Virtual Account Anda (contoh:
                                                        8277087781881441) pada menu “inputbaru”.</li>
                                                    <li>Tagihan yang harus dibayarkan akan muncul pada layar
                                                        konfirmasi.</li>
                                                    <li>Konfirmasi transaksi dan masukkan Password
                                                        Transaksi.</li>
                                                    <li>Pembayaran Anda Telah Berhasil.</li>
                                                </ol>
                                            </div>

                                            <!-- iBank Personal -->
                                            <li class="list-group-item">
                                                <a href="#ibank-personal" class="text-decoration-none stretched-link"
                                                    data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="ibank-personal">iBank
                                                    Personal</a>
                                            </li>
                                            <div id="ibank-personal" class="card-body collapse"
                                                aria-labelledby="ibank-personal" data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Masukkan User ID dan password</li>
                                                    <li>Klik menu Transfer, lalu pilih “Virtual Account
                                                        Billing”.</li>
                                                    <li>Kemudian masukan nomor Virtual Account Anda (contoh:
                                                        8277087781881441) yang hendak dibayarkan. Lalu pilih
                                                        rekening debet yang akan digunakan. Kemudian tekan
                                                        ‘’Lanjut’’</li>
                                                    <li>Kemudin tagihan yang harus dibayarkan akan muncul
                                                        pada layar konfirmasi.</li>
                                                    <li>Masukkan Kode Otentikasi Token.</li>
                                                    <li>Pembayaran Anda telah berhasil</li>
                                                </ol>
                                            </div>

                                            <!-- Cabang atau Teller BNI -->
                                            <li class="list-group-item">
                                                <a href="#cabang-atau-teller-bni"
                                                    class="text-decoration-none stretched-link" data-toggle="collapse"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="cabang-atau-teller-bni">Cabang atau
                                                    Teller BNI</a>
                                            </li>
                                            <div id="cabang-atau-teller-bni" class="card-body collapse"
                                                aria-labelledby="cabang-atau-teller-bni" data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Informasikan kepada Teller, bahwa ingin melakukan
                                                        pembayaran “Virtual Account Billing”.</li>
                                                    <li>Serahkan nomor Virtual Account Anda kepada Teller.
                                                    </li>
                                                    <li>Teller melakukan konfirmasi kepada Anda.</li>
                                                    <li>Teller memproses Transaksi.</li>
                                                    <li>Apabila transaksi Sukses anda akan menerima bukti
                                                        pembayaran dari Teller tersebut.</li>
                                                </ol>
                                            </div>
                                            <!-- Agen46 -->
                                            <li class="list-group-item">
                                                <a href="#agen46" class="text-decoration-none stretched-link"
                                                    data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="agen46">Agen46</a>
                                            </li>
                                            <div id="agen46" class="card-body collapse" aria-labelledby="agen46"
                                                data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Informasikan kepada Agen46, bahwa ingin melakukan
                                                        pembayaran Virtual.</li>
                                                    <li>Serahkan nomor Virtual Account Anda kepada Agen46.
                                                    </li>
                                                    <li>Agen46 melakukan konfirmasi kepada Anda.</li>
                                                    <li>Agen46 Proses Transaksi.</li>
                                                    <li>Apabila transaksi Sukses anda akan menerima bukti
                                                        pembayaran dari Agen46 tersebut.</li>
                                                </ol>
                                            </div>

                                            <!-- ATM Bersama -->
                                            <li class="list-group-item">
                                                <a href="#atm-bersama" class="text-decoration-none stretched-link"
                                                    data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="atm-bersama">ATM
                                                    Bersama</a>
                                            </li>
                                            <div id="atm-bersama" class="card-body collapse"
                                                aria-labelledby="atm-bersama" data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Pilih "Transaksi Lainnya".</li>
                                                    <li>Pilih menu "Transfer".</li>
                                                    <li>Pilih "Transfer ke Bank Lain".</li>
                                                    <li>Masukkan kode bank BNI (009) dan 16 Digit Nomor
                                                        Virtual Account (contoh:8277087781881441).</li>
                                                    <li>Masukkan nominal transfer sesuai tagihan atau
                                                        kewajiban Anda. Nominal yang berbeda tidak dapat
                                                        diproses.</li>
                                                    <li>Konfirmasi rincian Anda akan tampil di layar, cek
                                                        dan tekan 'Ya' untuk melanjutkan.</li>
                                                    <li>Transaksi Berhasil.</li>
                                                </ol>
                                            </div>

                                            <!-- ATM Bank Lain -->
                                            <li class="list-group-item">
                                                <a href="#atm-bank-lain" class="text-decoration-none stretched-link"
                                                    data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="atm-bank-lain">ATM
                                                    Bank Lain</a>
                                            </li>
                                            <div id="atm-bank-lain" class="card-body collapse"
                                                aria-labelledby="atm-bank-lain" data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Masukkan kode bank BNI (009) atau pilih bank yang
                                                        dituju yaitu BNI.</li>
                                                    <li>Masukan 16 Digit Nomor Virtual Account pada kolom
                                                        rekening tujuan, (contoh:8277087781881441).</li>
                                                    <li>Masukkan nominal transfer sesuai tagihan atau
                                                        kewajiban Anda. Nominal yang berbeda tidak dapat
                                                        diproses.</li>
                                                    <li>Masukkan jumlah pembayaran : 44000.</li>
                                                    <li>Konfirmasi rincian Anda akan tampil di layar, cek
                                                        dan apabila sudah sesuai silahkanlanjutkan transaksi
                                                        sampai dengan selesai.</li>
                                                    <li>Transaksi Berhasil.</li>
                                                </ol>
                                            </div>

                                            <!-- OVO -->
                                            <li class="list-group-item">
                                                <a href="#ovo" class="text-decoration-none stretched-link"
                                                    data-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="ovo">OVO</a>
                                            </li>
                                            <div id="ovo" class="card-body collapse" aria-labelledby="ovo"
                                                data-parent="#how-to-pay">
                                                <ol>
                                                    <li>Pilih menu Transfer.</li>
                                                    <li>Pilih “Rekening Bank”.</li>
                                                    <li>Masukkan kode bank BNI (009) atau pilih bank yang
                                                        dituju yaitu BNI.</li>
                                                    <li>Masukan 16 Digit Nomor Virtual Account pada kolom
                                                        rekening tujuan, (contoh:8277087781881441).</li>
                                                    <li>Masukkan nominal transfer sesuai tagihan atau
                                                        kewajiban Anda.</li>
                                                    <li>Pilih “Transfer”.</li>
                                                    <li>Konfirmasi rincian Anda akan tampil di layar.</li>
                                                    <li>Cek dan apabila sudah sesuai silahkan pilih
                                                        “Konfirmasi” untuk lanjutkan transaksi sampai dengan
                                                        selesai.</li>
                                                    <li>Transaksi Berhasil.</li>
                                                </ol>
                                            </div>
                                        </ul>

                                        <button type="submit" class="btn btn-primary mr-2">
                                            Bayar
                                        </button>
                                        <a href="{{ route('umkm') }}"class="btn btn-light">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:./partials/_footer.html -->
            <footer class="footer">

                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright
                                ©
                                bootstrapdash.com 2020</span>
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed
                                By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                                    templates</a> from Bootstrapdash.com</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="{{ asset('spica') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('spica') }}/vendors/chart.js/chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('spica') }}/js/off-canvas.js"></script>
    <script src="{{ asset('spica') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('spica') }}/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('spica') }}/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>


</html>
