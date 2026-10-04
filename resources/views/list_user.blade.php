@extends('layouts.app') 

@section('content')
<div class="d-flex flex-column gap-4">

<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 pt-2">
        <div>
            <div style="font-size: 0.85rem; font-weight: 700; color: #71717a; margin-bottom: 2px; text-transform: uppercase; letter-spacing: 0.8px;">
                Dashboard Admin
            </div>
            <h1 style="font-size: 2.2rem; font-weight: 800; color: #18181b; letter-spacing: -0.5px; margin: 0;">
                Hello, Dimas C.
            </h1>
        </div>

        <div class="d-flex align-items-center gap-3">
            
            <div class="d-flex align-items-center gap-2">
                <div style="width: 44px; height: 44px; border-radius: 50%; background: #ffffff; border: 1px solid var(--border-card); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.15rem; color: #18181b; box-shadow: var(--shadow-bento);">
                    {{ date('d') }}
                </div>
                <div class="d-flex flex-column lh-sm" style="font-size: 0.82rem;">
                    <span style="font-weight: 700; color: #18181b;">{{ date('D') }},</span>
                    <span style="color: #71717a;">{{ date('F') }}</span>
                </div>
            </div>

            <div style="height: 32px; width: 1px; background: #ded8cd;"></div>

<a href="{{ route('user.create') }}" class="btn-coral">
                <i class="bi bi-person-plus-fill"></i>
                <span>Tambah Pengguna</span>
            </a>

<a href="{{ url('/profile') }}" class="btn-circle shadow-sm" title="Lihat Profil">
                <i class="bi bi-person-badge" style="font-size: 1.1rem;"></i>
            </a>
        </div>
    </div>

<div class="row g-3">
        
        <div class="col-sm-6 col-lg-3">
            <div class="bento-card p-4 metric-card position-relative overflow-hidden d-flex flex-column justify-content-between" style="min-height: 140px; cursor: pointer;">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="metric-title" style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Total Mahasiswa</span>
                    <div class="metric-icon-circle" style="width: 28px; height: 28px; border-radius: 50%; background: #f4efe6; display: flex; align-items: center; justify-content: center; color: #18181b;">
                        <i class="bi bi-people-fill" style="font-size: 0.8rem;"></i>
                    </div>
                </div>
                <div class="d-flex align-items-baseline gap-2 mb-2">
                    <h2 class="metric-number" style="font-size: 2.2rem; font-weight: 800; color: #18181b; margin: 0; line-height: 1;">{{ count($users) }}</h2>
                    <span class="metric-unit" style="font-size: 0.88rem; font-weight: 600; color: #71717a;">Orang</span>
                </div>
                
                <svg viewBox="0 0 100 25" class="metric-svg" style="width: 100%; height: 26px; stroke: #ff7353; stroke-width: 2.5; fill: none; stroke-linecap: round; transition: stroke 0.2s ease;">
                    <path d="M0,15 Q25,2 50,16 T100,8" />
                </svg>
            </div>
        </div>

<div class="col-sm-6 col-lg-3">
            <div class="bento-card p-4 metric-card position-relative overflow-hidden d-flex flex-column justify-content-between" style="min-height: 140px; cursor: pointer;">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="metric-title" style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Kelas Aktif</span>
                    <div class="metric-icon-circle" style="width: 28px; height: 28px; border-radius: 50%; background: #f4efe6; display: flex; align-items: center; justify-content: center; color: #18181b;">
                        <i class="bi bi-building" style="font-size: 0.8rem;"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div class="d-flex align-items-baseline gap-2">
                        <h2 class="metric-number" style="font-size: 2.2rem; font-weight: 800; color: #18181b; margin: 0; line-height: 1;">3</h2>
                        <span class="metric-unit" style="font-size: 0.82rem; font-weight: 600; color: #71717a;">Prodi</span>
                    </div>
                    
                    <div class="d-flex align-items-end gap-1 metric-bars" style="height: 32px;">
                        <div style="width: 7px; height: 18px; border-radius: 4px; background: #e5e0d5;"></div>
                        <div style="width: 7px; height: 24px; border-radius: 4px; background: #e5e0d5;"></div>
                        <div style="width: 7px; height: 32px; border-radius: 4px; background: #ff7353;"></div>
                        <div style="width: 7px; height: 22px; border-radius: 4px; background: #ff9068;"></div>
                        <div style="width: 7px; height: 16px; border-radius: 4px; background: #e5e0d5;"></div>
                    </div>
                </div>
            </div>
        </div>

<div class="col-sm-6 col-lg-3">
            <div class="bento-card p-4 metric-card position-relative overflow-hidden d-flex flex-column justify-content-between" 
                 id="dbCard" 
                 style="min-height: 140px; cursor: pointer;" 
                 title="Klik untuk ping ulang status koneksi database">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="metric-title" style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Database</span>
                    <div class="metric-icon-circle" id="dbIconCircle" style="width: 28px; height: 28px; border-radius: 50%; background: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                        <i class="bi bi-database-check" id="dbStatusIcon" style="font-size: 0.8rem;"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3 class="metric-number" style="font-size: 1.4rem; font-weight: 800; color: #18181b; margin: 0; line-height: 1.1;">PostgreSQL</h3>
                        <div class="d-flex align-items-center gap-2 mt-1" style="font-size: 0.75rem; font-weight: 600;">
                            <span class="live-pulse-container">
                                <span class="live-pulse-ring" id="dbPulseRing"></span>
                                <span class="live-pulse-dot" id="dbPulseDot"></span>
                            </span>
                            <span id="dbStatusText" style="color: #059669; transition: color 0.2s ease;">
                                Terhubung &bull; <span id="dbLatencyVal">--</span>ms
                            </span>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-end gap-1 db-equalizer" id="dbEqualizer" style="height: 28px;">
                        <div class="db-bar db-bar-1"></div>
                        <div class="db-bar db-bar-2"></div>
                        <div class="db-bar db-bar-3"></div>
                        <div class="db-bar db-bar-4"></div>
                        <div class="db-bar db-bar-5"></div>
                    </div>
                </div>
            </div>
        </div>

<div class="col-sm-6 col-lg-3">
            <div class="bento-card p-4 metric-card position-relative overflow-hidden d-flex flex-column justify-content-between" style="min-height: 140px; cursor: pointer;">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="metric-title" style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Periode Semester</span>
                    <div class="metric-icon-circle" style="width: 28px; height: 28px; border-radius: 50%; background: #f4efe6; display: flex; align-items: center; justify-content: center; color: #18181b;">
                        <i class="bi bi-calendar-event" style="font-size: 0.8rem;"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3 class="metric-number" style="font-size: 1.4rem; font-weight: 800; color: #18181b; margin: 0; line-height: 1.1;">Semester 4</h3>
                        <span class="metric-sub" style="font-size: 0.75rem; font-weight: 600; color: #71717a;">Tahun 2026/2027</span>
                    </div>
                    <div class="metric-badge" style="padding: 4px 10px; border-radius: var(--radius-pill); background: var(--accent-coral-soft); color: var(--accent-coral); font-size: 0.75rem; font-weight: 700;">
                        Ganjil
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="bento-card p-4 p-md-5">
        
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div>
                <h3 style="font-size: 1.35rem; font-weight: 800; color: #18181b; margin: 0;">
                    Daftar Mahasiswa Terdaftar
                </h3>
            </div>

<div class="d-flex align-items-center flex-wrap gap-2">
                
                <div class="d-flex align-items-center gap-1 p-1" style="background: #f4efe6; border-radius: var(--radius-pill);">
                    <button type="button" class="btn btn-sm filter-pill active" onclick="filterByClass('all', this)" style="border-radius: var(--radius-pill); font-weight: 700; font-size: 0.8rem; padding: 6px 14px; border: none;">
                        Semua
                    </button>
                    <button type="button" class="btn btn-sm filter-pill" onclick="filterByClass('Ilmu Komputer', this)" style="border-radius: var(--radius-pill); font-weight: 700; font-size: 0.8rem; padding: 6px 14px; border: none; color: #71717a;">
                        Ilmu Komputer
                    </button>
                    <button type="button" class="btn btn-sm filter-pill" onclick="filterByClass('Sistem Informasi', this)" style="border-radius: var(--radius-pill); font-weight: 700; font-size: 0.8rem; padding: 6px 14px; border: none; color: #71717a;">
                        Sistem Informasi
                    </button>
                    <button type="button" class="btn btn-sm filter-pill" onclick="filterByClass('Manajemen Informatika', this)" style="border-radius: var(--radius-pill); font-weight: 700; font-size: 0.8rem; padding: 6px 14px; border: none; color: #71717a;">
                        Manajemen Informatika
                    </button>
                </div>

<div class="position-relative" style="min-width: 200px;">
                    <i class="bi bi-search position-absolute" style="left: 14px; top: 11px; color: #9ca3af; font-size: 0.85rem;"></i>
                    <input type="text" 
                           id="tableSearchInput" 
                           class="bento-input-pill w-100" 
                           style="padding-left: 38px; height: 38px; font-size: 0.84rem;" 
                           placeholder="Filter nama/NPM..."
                           onkeyup="filterTable()">
                </div>
            </div>
        </div>

<div id="dynamicTableContainer">
            <x-user-table :users="$users" />
        </div>
    </div>
</div>

<style>
    .metric-card {
        background: #ffffff;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid var(--border-card);
    }

    .metric-card:hover {
        background: linear-gradient(135deg, #ff7353 0%, #ff5c36 100%) !important;
        border-color: #ff6844 !important;
        box-shadow: 0 14px 28px -6px rgba(255, 115, 83, 0.45) !important;
        transform: translateY(-3px);
    }

    .metric-card:hover .metric-title {
        color: rgba(255, 255, 255, 0.95) !important;
    }

    .metric-card:hover .metric-number {
        color: #ffffff !important;
    }

    .metric-card:hover .metric-unit,
    .metric-card:hover .metric-sub {
        color: rgba(255, 255, 255, 0.9) !important;
    }

    .metric-card:hover .metric-icon-circle {
        background: rgba(255, 255, 255, 0.25) !important;
        color: #ffffff !important;
    }

    .metric-card:hover .metric-svg {
        stroke: #ffffff !important;
    }

    .metric-card:hover .metric-bars div {
        background: rgba(255, 255, 255, 0.8) !important;
    }

    .metric-card:hover .metric-dots div {
        background: rgba(255, 255, 255, 0.85) !important;
    }

    .metric-card:hover .metric-badge {
        background: rgba(255, 255, 255, 0.25) !important;
        color: #ffffff !important;
    }

    .filter-pill.active {
        background: #ffffff !important;
        color: #18181b !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    /* Live Pulse Indicator */
    .live-pulse-container {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 10px;
        height: 10px;
    }
    .live-pulse-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #10b981;
        opacity: 0.75;
        animation: pulse-ring 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
    }
    .live-pulse-dot {
        position: relative;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #059669;
        transition: background-color 0.2s ease;
    }

    @keyframes pulse-ring {
        0% { transform: scale(0.95); opacity: 0.8; }
        70% { transform: scale(2.2); opacity: 0; }
        100% { transform: scale(2.2); opacity: 0; }
    }

    /* DB Equalizer Animation */
    .db-equalizer .db-bar {
        width: 4px;
        border-radius: 2px;
        background: #10b981;
        animation: eq-wave 1.2s ease-in-out infinite alternate;
        transform-origin: bottom;
    }
    .db-bar-1 { height: 16px; animation-delay: 0.1s; background: #059669 !important; }
    .db-bar-2 { height: 24px; animation-delay: 0.35s; background: #10b981 !important; }
    .db-bar-3 { height: 12px; animation-delay: 0.6s; background: #34d399 !important; }
    .db-bar-4 { height: 20px; animation-delay: 0.2s; background: #6ee7b7 !important; }
    .db-bar-5 { height: 15px; animation-delay: 0.45s; background: #10b981 !important; }

    @keyframes eq-wave {
        0% { transform: scaleY(0.4); opacity: 0.7; }
        50% { transform: scaleY(1); opacity: 1; }
        100% { transform: scaleY(0.5); opacity: 0.85; }
    }

    .metric-card:hover .db-equalizer .db-bar {
        background: #ffffff !important;
    }
    .metric-card:hover .live-pulse-dot {
        background: #ffffff !important;
    }
    .metric-card:hover .live-pulse-ring {
        background: rgba(255, 255, 255, 0.6) !important;
    }
    .metric-card:hover #dbStatusText {
        color: #ffffff !important;
    }
</style>

<script>
    let currentClassFilter = 'all';

    function filterByClass(className, btnElement) {
        currentClassFilter = className;
        document.querySelectorAll('.filter-pill').forEach(b => {
            b.classList.remove('active');
            b.style.color = '#71717a';
        });
        btnElement.classList.add('active');
        btnElement.style.color = '#18181b';
        filterTable();
    }

    function filterTable() {
        const searchVal = (document.getElementById('tableSearchInput')?.value || '').toLowerCase();
        const table = document.querySelector('#dynamicTableContainer table');
        if (!table) return;
        const tbody = table.querySelector('tbody');
        if (!tbody) return;
        const rows = tbody.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const text = (row.textContent || row.innerText).toLowerCase();
            const classAttr = (row.getAttribute('data-kelas') || '').trim();

            const matchesSearch = text.indexOf(searchVal) > -1;
            const matchesClass = currentClassFilter === 'all' || classAttr.toLowerCase() === currentClassFilter.toLowerCase();

            if (matchesSearch && matchesClass) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }

    // Real-time Database Health Check
    async function checkDatabaseHealth() {
        const latencyEl = document.getElementById('dbLatencyVal');
        const statusText = document.getElementById('dbStatusText');
        const pulseRing = document.getElementById('dbPulseRing');
        const pulseDot = document.getElementById('dbPulseDot');
        const iconCircle = document.getElementById('dbIconCircle');
        const statusIcon = document.getElementById('dbStatusIcon');
        const eqBars = document.querySelectorAll('.db-equalizer .db-bar');

        try {
            const res = await fetch("{{ url('/api/db-ping') }}");
            if (!res.ok) throw new Error('DB Error');
            const data = await res.json();

            if (data.status === 'connected') {
                if (latencyEl) latencyEl.textContent = data.latency;
                if (statusText) {
                    statusText.innerHTML = `Terhubung &bull; <span id="dbLatencyVal">${data.latency}</span>ms`;
                    statusText.style.color = '#059669';
                }
                if (pulseRing) {
                    pulseRing.style.backgroundColor = '#10b981';
                    pulseRing.style.animationPlayState = 'running';
                }
                if (pulseDot) pulseDot.style.backgroundColor = '#059669';
                if (iconCircle) {
                    iconCircle.style.background = '#ecfdf5';
                    iconCircle.style.color = '#059669';
                }
                if (statusIcon) {
                    statusIcon.className = 'bi bi-database-check';
                }
                eqBars.forEach(b => b.style.animationPlayState = 'running');
            } else {
                throw new Error(data.message || 'Offline');
            }
        } catch (err) {
            if (statusText) {
                statusText.innerHTML = `Terputus`;
                statusText.style.color = '#ef4444';
            }
            if (pulseRing) {
                pulseRing.style.backgroundColor = '#ef4444';
                pulseRing.style.animationPlayState = 'paused';
            }
            if (pulseDot) pulseDot.style.backgroundColor = '#ef4444';
            if (iconCircle) {
                iconCircle.style.background = '#fef2f2';
                iconCircle.style.color = '#ef4444';
            }
            if (statusIcon) {
                statusIcon.className = 'bi bi-database-x';
            }
            eqBars.forEach(b => b.style.animationPlayState = 'paused');
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        checkDatabaseHealth();
        setInterval(checkDatabaseHealth, 3500);

        const card = document.getElementById('dbCard');
        if (card) {
            card.addEventListener('click', () => {
                const icon = document.getElementById('dbStatusIcon');
                if (icon) {
                    icon.style.transform = 'rotate(360deg)';
                    icon.style.transition = 'transform 0.5s ease';
                    setTimeout(() => { icon.style.transform = 'none'; }, 500);
                }
                checkDatabaseHealth();
            });
        }
    });
</script>
@endsection
