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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js"
        integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
        @include('kepala_dinas.v_kp__navbar_')
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
                        Kelola Event Alun-Alun Subang
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
                                        <img src="spica/images/faces/face4.jpg" alt="image" class="profile-pic" />
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
                                        <img src="spica/images/faces/face2.jpg" alt="image" class="profile-pic" />
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
                        {{-- <li class="nav-item nav-profile dropdown">
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
                        </li> --}}
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
                    <div class="container">
                        <div class="col-md-12">
                            <h4>Kelola Event</h4>
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Event</th>
                                        <th>Tanggal Acara</th>
                                        <th>Selesai Acara</th>
                                        <th>Berkas</th>
                                        <th>status</th>
                                        <th>Detail</th>
                                        <th>Terima</th>
                                        <th>Tolak</th>
                                    </thead>
                                    @foreach ($Event as $key => $event)
                                        <!--$user pertama terdapat pada models, dan user kedua variabel-->
                                        <tbody>
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $event->name }}</td>
                                                <td>{{ $event->email }}</td>
                                                <td>{{ $event->event }}</td>
                                                <td>{{ $event->tanggalacara }}</td>
                                                <td>{{ $event->selesaiacara }}</td>
                                                <td><a href="{{ asset($event->berkas) }}">{{ $event->berkas }}</td>
                                                <td>
                                                    @if ($event->status == 'diterima')
                                                        {!! '<span class="badge badge-success">Diterima</span>' !!}
                                                    @elseif ($event->status == 'ditolak')
                                                        {!! '<span class="badge badge-danger">Ditolak</span>' !!}
                                                    @else
                                                        {!! '<span class="badge badge-warning">Belum diproses</span>' !!}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="detailevent-kepala-dinas/{{ $event->resi_id }}"
                                                        type="button" class="btn btn-info"><i
                                                            class="mdi mdi-file-find"></i></a>
                                                </td>
                                                <td>
                                                    <a onclick="handleTerima('{{ $event->resi_id }}', 'diterima')"
                                                        class="btn btn-success" type="button"><i
                                                            class="mdi mdi-check"></i></a>
                                                </td>
                                                <td>
                                                    <a onclick="handleDitolak('{{ $event->resi_id }}', 'ditolak')"
                                                        class="btn btn-danger" type="button"><i
                                                            class="mdi mdi-close"></i></a>
                                                </td>
                                                {{-- <td>
                                                    <button
                                                        onclick="handleTerima('{{ $event->resi_id }}', 'diterima')"
                                                        type="button" class="btn btn-success"><i
                                                            class="mdi mdi-check"></i>
                                                    </button>
                                                </td> --}}
                                                {{-- <td>
                                                    <form onclick="StatusDiterima" id="btn_diterima"
                                                        action="{{ route('event.updateStatus', ['resi_id' => $event->resi_id, 'status' => 'diterima']) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button onclick="StatusDiterima" id="btn_diterima"
                                                            type="submit" class="btn btn-success"><i
                                                                class="mdi mdi-check"></i></button>
                                                    </form>
                                                </td> --}}
                                                <td>
                                                    {{-- <form
                                                        action="{{ route('event.updateStatus', ['resi_id' => $event->resi_id, 'status' => 'ditolak']) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="mdi mdi-close"></i></button>
                                                    </form> --}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>

                                <div class="clearfix"></div>
                                <ul class="pagination pull-right">
                                    <li class="disabled"><a href="#"><span
                                                class="glyphicon glyphicon-chevron-left"></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </li>
                                </ul>

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
                                    templates</a> from Bootstrapdash.com
                            </span>
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


    <script src="spica/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="spica/vendors/chart.js/chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="spica/js/off-canvas.js"></script>
    <script src="spica/js/hoverable-collapse.js"></script>
    <script src="spica/js/template.js"></script>
    <!-- endinject -->
    <script src="spica/js/dashboard.js"></script>
    <script src="spica/js/dashboard.js"></script>
    <script src="spica/js/template.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="spica/js/dashboard.js"></script>
    <!-- End custom js for this page-->

    <script>
        function handleTerima(resi_id, status) {
            Swal.fire({
                title: "Apakah Anda Yakin ?",
                text: "Terima konfirmasi event",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Event Terima!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('event.updateStatus', ['resi_id' => ':resi_id', 'status' => 'diterima']) }}"
                            .replace(':resi_id', resi_id),
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            status: status // Menambahkan status ke data permintaan
                            // Tambahkan data tambahan di sini jika diperlukan
                        },
                        success: function(response) {
                            // Handle respons dari server jika sukses
                            console.log('Permintaan berhasil');
                            // Munculkan alert bahwa permintaan berhasil
                            Swal.fire("Berhasil!", "Event Diterima!", "success");
                            // Lakukan apapun yang perlu dilakukan setelah permintaan berhasil
                        },
                        error: function(xhr, status, error) {
                            // Handle kesalahan jika permintaan gagal
                            console.error('Permintaan gagal:', error);
                            // Munculkan alert bahwa permintaan gagal
                            Swal.fire("Gagal!", "Permintaan gagal!", "error");
                        }
                    });
                }
            });
        }
    </script>
    <script>
        function handleDitolak(resi_id, status) {
            Swal.fire({
                title: "Apakah Anda Yakin ?",
                text: "Tolak konfirmasi Event !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Tolak!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('event.updateStatus', ['resi_id' => ':resi_id', 'status' => 'ditolak']) }}"
                            .replace(':resi_id', resi_id),
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            status: status // Menambahkan status ke data permintaan
                            // Tambahkan data tambahan di sini jika diperlukan
                        },
                        success: function(response) {
                            // Handle respons dari server jika sukses
                            console.log('Permintaan berhasil');
                            // Munculkan alert bahwa permintaan berhasil
                            Swal.fire("Berhasil!", "Event ditolak!", "success");
                            // Lakukan apapun yang perlu dilakukan setelah permintaan berhasil
                        },
                        error: function(xhr, status, error) {
                            // Handle kesalahan jika permintaan gagal
                            console.error('Permintaan gagal:', error);
                            // Munculkan alert bahwa permintaan gagal
                            Swal.fire("Gagal!", "Permintaan gagal!", "error");
                        }
                    });
                }
            });
        }
    </script>

    {{-- <script>
        function handleTerima(resi_id, status) {
            $.ajax({
                url: "{{ route('event.updateStatus', ['resi_id' => ':resi_id', 'status' => 'diterima']) }}"
                    .replace(':resi_id', resi_id),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    // Tambahkan data tambahan di sini jika diperlukan
                },
                success: function(response) {
                    // Handle respons dari server jika sukses
                    console.log('Permintaan berhasil');
                    // Lakukan apapun yang perlu dilakukan setelah permintaan berhasil
                },
                error: function(xhr, status, error) {
                    // Handle kesalahan jika permintaan gagal
                    console.error('Permintaan gagal:', error);
                }
            });
        };
    </script> --}}
</body>


</html>
