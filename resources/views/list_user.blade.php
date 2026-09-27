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
            <div class="bento-card p-4 metric-card position-relative overflow-hidden d-flex flex-column justify-content-between" style="min-height: 140px; cursor: pointer;">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="metric-title" style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Database</span>
                    <div class="metric-icon-circle" style="width: 28px; height: 28px; border-radius: 50%; background: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-database-check" style="font-size: 0.8rem;"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div>
                        <h3 class="metric-number" style="font-size: 1.4rem; font-weight: 800; color: #18181b; margin: 0; line-height: 1.1;">PostgreSQL</h3>
                        <span class="metric-sub" style="font-size: 0.75rem; font-weight: 600; color: #059669;">
                            <i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i>Port 5432 Terhubung
                        </span>
                    </div>
                    
                    <div class="d-flex align-items-center gap-1 metric-dots">
                        <div style="width: 4px; height: 20px; border-radius: 2px; background: #059669;"></div>
                        <div style="width: 4px; height: 24px; border-radius: 2px; background: #10b981;"></div>
                        <div style="width: 4px; height: 16px; border-radius: 2px; background: #34d399;"></div>
                        <div style="width: 4px; height: 22px; border-radius: 2px; background: #6ee7b7;"></div>
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
</script>
@endsection
