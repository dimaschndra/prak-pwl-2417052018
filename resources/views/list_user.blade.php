@extends('layouts.app') 

@section('content')
<div class="container" style="max-width: 1200px;">
    <!-- Page Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <div style="display: inline-flex; align-items: center; gap: 8px; padding: 4px 14px; border-radius: 9999px; background: rgba(37, 99, 235, 0.1); border: 1px solid rgba(37, 99, 235, 0.2); color: #2563eb; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px;">
                <i class="bi bi-stack"></i> Modul 4 &bull; Controllers & Views
            </div>
            <h2 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin-bottom: 4px; letter-spacing: -0.5px;">
                Daftar Pengguna Mahasiswa
            </h2>
            <p style="color: #64748b; font-size: 0.92rem; margin: 0;">
                Kelola data mahasiswa dan relasi kelas pada sistem basis data PostgreSQL
            </p>
        </div>
        <div>
            <a href="{{ route('user.create') }}" class="btn-modern-primary">
                <i class="bi bi-person-plus-fill fs-6"></i>
                <span>Tambah Pengguna Baru</span>
            </a>
        </div>
    </div>

    <!-- Quick Statistics Cards -->
    <div class="row g-3 mb-4">
        <!-- Card 1: Total Mahasiswa -->
        <div class="col-sm-6 col-lg-4">
            <div class="card-glass" style="padding: 22px 24px;">
                <div class="d-flex align-items-center gap-3">
                    <div style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.5rem; box-shadow: 0 6px 14px rgba(59, 130, 246, 0.35);">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">
                            Total Mahasiswa
                        </div>
                        <div style="font-size: 1.65rem; font-weight: 800; color: #0f172a; line-height: 1.2;">
                            {{ count($users) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2: Kelas Terdaftar -->
        <div class="col-sm-6 col-lg-4">
            <div class="card-glass" style="padding: 22px 24px;">
                <div class="d-flex align-items-center gap-3">
                    <div style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #10b981 0%, #047857 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.5rem; box-shadow: 0 6px 14px rgba(16, 185, 129, 0.35);">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">
                            Kelas Perkuliahan
                        </div>
                        <div style="font-size: 1.65rem; font-weight: 800; color: #0f172a; line-height: 1.2;">
                            4 <span style="font-size: 0.85rem; font-weight: 600; color: #64748b;">(A, B, C, D)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Status Koneksi Database -->
        <div class="col-sm-12 col-lg-4">
            <div class="card-glass" style="padding: 22px 24px;">
                <div class="d-flex align-items-center gap-3">
                    <div style="width: 52px; height: 52px; border-radius: 14px; background: linear-gradient(135deg, #6366f1 0%, #4338ca 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.5rem; box-shadow: 0 6px 14px rgba(99, 102, 241, 0.35);">
                        <i class="bi bi-database-fill-check"></i>
                    </div>
                    <div>
                        <div style="font-size: 0.8rem; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">
                            Basis Data
                        </div>
                        <div class="d-flex align-items-center gap-2" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; line-height: 1.2;">
                            <span>PostgreSQL</span>
                            <span style="font-size: 0.72rem; font-weight: 700; background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0; padding: 2px 8px; border-radius: 9999px;">
                                Terhubung
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="card-glass mb-4" style="padding: 16px 20px;">
        <div class="row align-items-center g-3">
            <div class="col-md-6 col-lg-5">
                <div class="modern-input-group">
                    <span class="input-icon" style="padding: 8px 14px; font-size: 0.95rem;">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" 
                           id="tableSearchInput" 
                           class="modern-input" 
                           placeholder="Cari berdasarkan nama atau NPM..." 
                           style="padding: 8px 14px; font-size: 0.9rem;"
                           onkeyup="filterTable()">
                </div>
            </div>
            <div class="col-md-6 col-lg-7 text-md-end" style="color: #64748b; font-size: 0.85rem;">
                <span class="d-inline-flex align-items-center gap-2">
                    <i class="bi bi-info-circle text-primary"></i>
                    Tabel menggunakan <strong>Komponen Dinamis Blade</strong> terpisah
                </span>
            </div>
        </div>
    </div>

    <!-- Dynamic User Table Component -->
    <div id="dynamicTableContainer">
        <x-user-table :users="$users" />
    </div>
</div>

<!-- Search Filter Script -->
<script>
    function filterTable() {
        const input = document.getElementById('tableSearchInput');
        const filter = input.value.toLowerCase();
        const table = document.querySelector('#dynamicTableContainer table');
        if (!table) return;
        const tbody = table.querySelector('tbody');
        if (!tbody) return;
        const rows = tbody.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const text = row.textContent || row.innerText;
            if (text.toLowerCase().indexOf(filter) > -1) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }
</script>
@endsection
