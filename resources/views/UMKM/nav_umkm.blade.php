<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Profil</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/umkm">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">{{ auth()->user()->name }}</span>
                {{-- <i class="menu-arrow"></i> --}}
            </a>
        </li>
        {{-- <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href=""> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href=""> Login 2 </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href=""> Register </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href=""> Register 2
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href=""> Lockscreen
                        </a></li>
                </ul>
            </div> --}}
        <li class="nav-item sidebar-category">
            <p>Payment</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pembayarankas') }}">
                <i class="mdi mdi-folder-outline menu-icon"></i>
                <span class="menu-title">Pembayaran Kas</span>

            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Kelola Data</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('data_diriuser') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Kelola Data Diri</span>
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Log Out</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('log-out') }}">
                <i class="mdi mdi-exit-to-app menu-icon"></i>
                <span class="menu-title">Log out</span>
            </a>
        </li>
    </ul>
</nav>

<script>
    function Logout(id) {
        Swal.fire({
            title: "Apakah Anda Yakin ?",
            text: "Data Akan Dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `{{ config('app.url') }}/kelola-user/hapus/${id}`;
            }
        });
    }
</script>
