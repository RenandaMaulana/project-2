<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Profil</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">{{ auth()->user()->name }}</span>
                {{-- <i class="menu-arrow"></i> --}}
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Kelola Data</p>
            <span></span>
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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kelola-user') }}">
                <i class="mdi mdi-folder-outline menu-icon"></i>
                <span class="menu-title">Kelola User</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kelola-event') }}">
                <i class="mdi mdi-folder-outline menu-icon"></i>
                <span class="menu-title">Kelola Event</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kelola-kas-UMKM">
                <i class="mdi mdi-folder-outline menu-icon"></i>
                <span class="menu-title">Kelola kas UMKM</span>

            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Laporan</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('laporanuser') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('laporanevent') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan event</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('laporankasumkm') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan Kas UMKM</span>
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Log Out</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('log-out') }}" id="Logout">
                <i class="mdi mdi-logout menu-icon"></i>
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
