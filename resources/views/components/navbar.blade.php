<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm py-3" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%) !important; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-white tracking-wide" href="{{ url('/user') }}">
            <div class="d-inline-flex justify-content-center align-items-center rounded-3 text-white" style="width: 38px; height: 38px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);">
                <i class="bi bi-people-fill fs-5"></i>
            </div>
            <span>PWL<span class="text-primary-subtle text-info">Portal</span></span>
        </a>

        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3 gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 {{ request()->is('user') && !request()->is('user/create') ? 'active fw-semibold bg-white bg-opacity-10 text-white' : 'text-light' }}" href="{{ url('/user') }}">
                        <i class="bi bi-person-lines-fill me-1"></i> Data Pengguna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 {{ request()->is('user/create') ? 'active fw-semibold bg-white bg-opacity-10 text-white' : 'text-light' }}" href="{{ url('/user/create') }}">
                        <i class="bi bi-person-plus-fill me-1"></i> Tambah Pengguna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 {{ request()->is('profile*') ? 'active fw-semibold bg-white bg-opacity-10 text-white' : 'text-light' }}" href="{{ url('/profile') }}">
                        <i class="bi bi-person-badge-fill me-1"></i> Profil Mahasiswa
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                <div class="d-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white bg-opacity-10 text-white border border-light border-opacity-10">
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px; font-size: 0.8rem;">
                        DK
                    </div>
                    <div class="d-none d-sm-block text-start lh-sm pe-1">
                        <div class="fw-semibold small text-white">Dimas Kurnia Chandra</div>
                        <div class="text-secondary small" style="font-size: 0.72rem; color: #94a3b8 !important;">2417052018</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
