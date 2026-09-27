<header class="d-flex align-items-center justify-content-between flex-wrap gap-3 py-2">
    
    <div class="d-flex align-items-center flex-wrap gap-2 gap-md-3">
        
        <a href="{{ url('/user') }}" class="d-inline-flex align-items-center justify-content-center text-decoration-none" style="width: 48px; height: 48px; border-radius: 50%; background: #ff7353; color: #ffffff; box-shadow: 0 6px 18px rgba(255, 115, 83, 0.4); transition: transform 0.2s ease;">
            <i class="bi bi-mortarboard-fill" style="font-size: 1.35rem;"></i>
        </a>

<nav class="d-flex align-items-center gap-2">
            <a href="{{ url('/user') }}" class="pill-tab {{ request()->is('user') && !request()->is('user/create') ? 'active' : '' }}">
                <span>Data Mahasiswa</span>
            </a>
            <a href="{{ url('/user/create') }}" class="pill-tab {{ request()->is('user/create') ? 'active' : '' }}">
                <span>Tambah Pengguna</span>
            </a>
            <a href="{{ url('/profile') }}" class="pill-tab {{ request()->is('profile*') ? 'active' : '' }}">
                <span>Profil</span>
            </a>
        </nav>
    </div>

<div class="d-flex align-items-center gap-2 gap-md-3 ms-auto">
        
        <div class="d-none d-md-flex align-items-center position-relative" style="width: 220px;">
            <i class="bi bi-search position-absolute" style="left: 16px; color: #9ca3af; font-size: 0.9rem;"></i>
            <input type="text" 
                   class="bento-input-pill w-100" 
                   style="padding-left: 42px; padding-right: 16px; height: 44px;" 
                   placeholder="Cari data..."
                   id="navSearchInput"
                   onkeyup="if(typeof filterTable === 'function') { document.getElementById('tableSearchInput') && (document.getElementById('tableSearchInput').value = this.value); filterTable(); }">
        </div>

<a href="{{ url('/user/create') }}" class="btn-circle text-decoration-none shadow-sm" title="Tambah Mahasiswa Baru">
            <i class="bi bi-plus-lg fw-bold" style="font-size: 1.1rem;"></i>
        </a>

<a href="{{ url('/profile') }}" class="d-flex align-items-center gap-2 text-decoration-none p-1 pe-3 bento-card" style="border-radius: var(--radius-pill); background: #ffffff;">
            <img src="https://i.pinimg.com/736x/24/41/2d/24412d570fcffabe987fd50be1e28cf2.jpg" 
                 alt="Dimas Kurnia Chandra" 
                 style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover; border: 2px solid #ffffff; box-shadow: 0 4px 10px rgba(0,0,0,0.12);">
            <div class="d-flex flex-column lh-1 text-start">
                <span style="font-weight: 700; color: #18181b; font-size: 0.86rem;">Dimas C.</span>
                <span style="font-size: 0.72rem; color: #71717a; font-family: monospace;">2417052018</span>
            </div>
        </a>
    </div>
</header>
