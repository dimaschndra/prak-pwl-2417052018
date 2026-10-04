@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-xl-6">
        <div class="mb-3">
            <a href="{{ url('/user') }}" class="pill-tab" style="padding: 8px 18px; font-size: 0.85rem;">
                <i class="bi bi-arrow-left"></i>
                <span>Kembali ke Data Mahasiswa</span>
            </a>
        </div>

        <div class="bento-card overflow-hidden">
            <div style="height: 140px; background: linear-gradient(135deg, #ff7353 0%, #ff5c36 50%, #ff9068 100%); position: relative; overflow: hidden;">
                <svg viewBox="0 0 400 140" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; pointer-events: none;" preserveAspectRatio="none">
                    <path d="M0,80 C120,130 260,30 400,90 L400,140 L0,140 Z" fill="rgba(255, 255, 255, 0.18)"></path>
                    <path d="M0,110 C150,140 280,70 400,110 L400,140 L0,140 Z" fill="#ffffff"></path>
                </svg>
            </div>

            <div class="px-4 pb-5 pt-0 text-center" style="margin-top: -60px; position: relative; z-index: 2;">

                <div class="d-inline-block position-relative mb-3">
                    <img src="{{ $image ?? 'https://i.pinimg.com/736x/24/41/2d/24412d570fcffabe987fd50be1e28cf2.jpg' }}" 
                         alt="Foto Profil" 
                         style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 5px solid #ffffff; box-shadow: 0 10px 25px rgba(255, 115, 83, 0.25);">
                    <div style="position: absolute; bottom: 8px; right: 8px; width: 20px; height: 20px; border-radius: 50%; background: #10b981; border: 3px solid #ffffff;" title="Status Aktif"></div>
                </div>

                <!-- Name & Role -->
                <h2 style="font-size: 1.65rem; font-weight: 800; color: #18181b; margin-bottom: 4px; letter-spacing: -0.3px;">
                    {{ $name ?? 'Dimas Kurnia Chandra' }}
                </h2>
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 mb-4" style="border-radius: var(--radius-pill); background: var(--accent-coral-soft); color: var(--accent-coral); font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>Mahasiswa Aktif</span>
                </div>

                <!-- Bento Info List -->
                <div class="d-flex flex-column gap-2 text-start mb-4" style="max-width: 440px; margin-left: auto; margin-right: auto;">
                    <!-- Item 1: Nama -->
                    <div class="d-flex align-items-center gap-3 p-3 bento-card" style="border-radius: 18px; background: #faf8f5;">
                        <div style="width: 40px; height: 40px; border-radius: 12px; background: #ffffff; border: 1px solid var(--border-card); display: flex; align-items: center; justify-content: center; color: #ff7353; font-size: 1.1rem; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span style="font-size: 0.72rem; font-weight: 700; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px;">Nama Lengkap</span>
                            <span style="font-size: 0.95rem; font-weight: 800; color: #18181b;">{{ $name ?? 'Dimas Kurnia Chandra' }}</span>
                        </div>
                    </div>

                    <!-- Item 2: NPM -->
                    <div class="d-flex align-items-center gap-3 p-3 bento-card" style="border-radius: 18px; background: #faf8f5;">
                        <div style="width: 40px; height: 40px; border-radius: 12px; background: #ffffff; border: 1px solid var(--border-card); display: flex; align-items: center; justify-content: center; color: #ff7353; font-size: 1.1rem; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                            <i class="bi bi-card-text"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span style="font-size: 0.72rem; font-weight: 700; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px;">Nomor Pokok Mahasiswa</span>
                            <span style="font-size: 0.95rem; font-weight: 800; color: #18181b; font-family: monospace;">{{ $npm ?? '2417052018' }}</span>
                        </div>
                    </div>

                    <!-- Item 3: Program Studi / Kelas -->
                    <div class="d-flex align-items-center gap-3 p-3 bento-card" style="border-radius: 18px; background: #faf8f5;">
                        <div style="width: 40px; height: 40px; border-radius: 12px; background: #ffffff; border: 1px solid var(--border-card); display: flex; align-items: center; justify-content: center; color: #ff7353; font-size: 1.1rem; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span style="font-size: 0.72rem; font-weight: 700; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px;">Kelas / Program Studi</span>
                            <span style="font-size: 0.95rem; font-weight: 800; color: #18181b;">{{ $kelas ?? 'Sistem Informasi' }}</span>
                        </div>
                    </div>

                    <!-- Item 4: Universitas -->
                    <div class="d-flex align-items-center gap-3 p-3 bento-card" style="border-radius: 18px; background: #faf8f5;">
                        <div style="width: 40px; height: 40px; border-radius: 12px; background: #ffffff; border: 1px solid var(--border-card); display: flex; align-items: center; justify-content: center; color: #ff7353; font-size: 1.1rem; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <span style="font-size: 0.72rem; font-weight: 700; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px;">Institusi</span>
                            <span style="font-size: 0.95rem; font-weight: 800; color: #18181b;">Universitas Lampung</span>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="d-flex justify-content-center gap-2 pt-2">
                    <a href="{{ url('/user') }}" class="btn-coral">
                        <i class="bi bi-grid-fill"></i>
                        <span>Lihat Data Mahasiswa</span>
                    </a>
                    <a href="{{ url('/user/create') }}" class="btn-pill-secondary">
                        <i class="bi bi-person-plus"></i>
                        <span>Tambah Mahasiswa</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
