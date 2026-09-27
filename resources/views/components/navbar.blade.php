<nav class="navbar navbar-expand-lg sticky-top" style="background: rgba(15, 23, 42, 0.94); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 12px 0;">
    <div class="container" style="max-width: 1200px;">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ url('/user') }}">
            <div style="width: 40px; height: 40px; border-radius: 12px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4); color: #fff;">
                <i class="bi bi-mortarboard-fill" style="font-size: 1.25rem;"></i>
            </div>
            <div class="d-flex flex-column lh-1">
                <span style="font-size: 1.15rem; font-weight: 800; color: #ffffff; letter-spacing: -0.3px;">PWL<span style="color: #60a5fa;">Portal</span></span>
                <span style="font-size: 0.68rem; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">S1 Ilmu Komputer</span>
            </div>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation" style="border: 1px solid rgba(255,255,255,0.2); padding: 6px 10px; border-radius: 10px;">
            <i class="bi bi-list text-white" style="font-size: 1.5rem;"></i>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 text-decoration-none d-flex align-items-center gap-2 {{ request()->is('user') && !request()->is('user/create') ? 'fw-bold' : '' }}" 
                       href="{{ url('/user') }}"
                       style="{{ request()->is('user') && !request()->is('user/create') ? 'background: rgba(59, 130, 246, 0.2); color: #93c5fd; border: 1px solid rgba(59, 130, 246, 0.3);' : 'color: #cbd5e1;' }}">
                        <i class="bi bi-people-fill"></i>
                        <span>Data Pengguna</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 text-decoration-none d-flex align-items-center gap-2 {{ request()->is('user/create') ? 'fw-bold' : '' }}" 
                       href="{{ url('/user/create') }}"
                       style="{{ request()->is('user/create') ? 'background: rgba(59, 130, 246, 0.2); color: #93c5fd; border: 1px solid rgba(59, 130, 246, 0.3);' : 'color: #cbd5e1;' }}">
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Tambah Pengguna</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 text-decoration-none d-flex align-items-center gap-2 {{ request()->is('profile*') ? 'fw-bold' : '' }}" 
                       href="{{ url('/profile') }}"
                       style="{{ request()->is('profile*') ? 'background: rgba(59, 130, 246, 0.2); color: #93c5fd; border: 1px solid rgba(59, 130, 246, 0.3);' : 'color: #cbd5e1;' }}">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Profil Mahasiswa</span>
                    </a>
                </li>
            </ul>

            <!-- Profile Info Pill on Right -->
            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                <a href="{{ url('/profile') }}" class="text-decoration-none d-flex align-items-center gap-2 px-3 py-1 rounded-pill" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.12); transition: all 0.2s ease;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 0.78rem;">
                        DK
                    </div>
                    <div class="d-flex flex-column lh-1 text-start">
                        <span style="font-size: 0.82rem; font-weight: 700; color: #f8fafc;">Dimas Kurnia Chandra</span>
                        <span style="font-size: 0.7rem; color: #94a3b8; font-family: monospace;">2417052018</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</nav>
