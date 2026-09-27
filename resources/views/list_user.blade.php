@extends('layouts.app') 

@section('content')
<div class="container py-2">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-primary bg-opacity-10 text-primary border border-primary border-opacity-10 small fw-semibold mb-2">
                <i class="bi bi-layers-fill"></i> Modul 4 &bull; Controllers & Views
            </div>
            <h2 class="fw-bold mb-1 text-dark tracking-tight">Daftar Pengguna</h2>
            <p class="text-muted mb-0 small">
                Data mahasiswa yang terintegrasi dengan relasi tabel kelas pada database PostgreSQL
            </p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('user.create') }}" class="btn btn-primary px-4 py-2 rounded-3 d-inline-flex align-items-center gap-2 fw-medium shadow-sm">
                <i class="bi bi-person-plus-fill fs-6"></i>
                <span>Tambah Pengguna</span>
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-sm-6 col-lg-4">
            <div class="card card-custom p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                    <div>
                        <div class="text-secondary small fw-medium">Total Mahasiswa</div>
                        <h4 class="mb-0 fw-bold text-dark">{{ count($users) }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card card-custom p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-success bg-opacity-10 text-success d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                        <i class="bi bi-mortarboard fs-4"></i>
                    </div>
                    <div>
                        <div class="text-secondary small fw-medium">Kelas Aktif</div>
                        <h4 class="mb-0 fw-bold text-dark">4 <span class="fs-6 fw-normal text-muted">(A, B, C, D)</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="card card-custom p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-3 bg-info bg-opacity-10 text-info d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                        <i class="bi bi-database-check fs-4"></i>
                    </div>
                    <div>
                        <div class="text-secondary small fw-medium">Koneksi Database</div>
                        <h5 class="mb-0 fw-bold text-dark d-flex align-items-center gap-2">
                            <span>PostgreSQL</span>
                            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fw-semibold" style="font-size: 0.7rem;">Connected</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search / Filter Bar -->
    <div class="card card-custom p-3 mb-4">
        <div class="row align-items-center g-2">
            <div class="col-md-6 col-lg-5">
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0 text-muted">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" id="searchInput" class="form-control border-start-0 ps-0 bg-light" placeholder="Cari berdasarkan nama atau NPM..." onkeyup="filterUserTable()">
                </div>
            </div>
            <div class="col-md-6 col-lg-7 text-md-end text-muted small">
                <i class="bi bi-info-circle me-1"></i> Data di-render menggunakan <strong>Komponen Dinamis Blade</strong>
            </div>
        </div>
    </div>

    <!-- Dynamic User Table Component -->
    <div id="userTableWrapper">
        <x-user-table :users="$users" />
    </div>
</div>

<script>
    function filterUserTable() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.querySelector('#userTableWrapper table');
        if (!table) return;
        const trs = table.getElementsByTagName('tr');

        for (let i = 1; i < trs.length; i++) {
            const tr = trs[i];
            const text = tr.textContent || tr.innerText;
            if (text.toLowerCase().indexOf(filter) > -1) {
                tr.style.display = '';
            } else {
                tr.style.display = 'none';
            }
        }
    }
</script>
@endsection
