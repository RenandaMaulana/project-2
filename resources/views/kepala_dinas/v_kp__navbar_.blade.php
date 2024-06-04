<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Profil</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kepala-dinas">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">{{ auth()->user()->name }}</span>
                {{-- <i class="menu-arrow"></i> --}}
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Kelola Data</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('konfirmasi-event') }}">
                <i class="mdi mdi-folder-outline menu-icon"></i>
                <span class="menu-title">Konfirmasi Event</span>

            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Laporan</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kp_dinas_laporanuser') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kp_dinas_laporanevent') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan event</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kp_dinas_laporankasumkm') }}">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan Kas UMKM</span>
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
