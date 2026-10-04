@extends('layouts.app')

@section('content')
<div class="d-flex flex-column gap-4">

    {{-- Top Header Section --}}
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 pt-2">
        <div>
            <div style="font-size: 0.85rem; font-weight: 700; color: #71717a; margin-bottom: 2px; text-transform: uppercase; letter-spacing: 0.8px;">
                Manajemen Akademik
            </div>
            <h1 style="font-size: 2.2rem; font-weight: 800; color: #18181b; letter-spacing: -0.5px; margin: 0;">
                Daftar Mata Kuliah
            </h1>
        </div>

        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('matakuliah.create') }}" class="btn-coral">
                <i class="bi bi-plus-circle-fill"></i>
                <span>Tambah Mata Kuliah</span>
            </a>

            <a href="{{ url('/user') }}" class="pill-tab" style="padding: 10px 20px;">
                <i class="bi bi-people-fill"></i>
                <span>Data Mahasiswa</span>
            </a>
        </div>
    </div>

    {{-- Metric Stat Cards --}}
    <div class="row g-3">
        <div class="col-sm-6 col-lg-4">
            <div class="bento-card p-4 d-flex justify-content-between align-items-center">
                <div>
                    <span style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Total Mata Kuliah</span>
                    <h2 style="font-size: 2rem; font-weight: 800; color: #18181b; margin: 4px 0 0 0;">{{ count($mks) }}</h2>
                </div>
                <div style="width: 44px; height: 44px; border-radius: 50%; background: #fff0eb; color: #ff7353; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                    <i class="bi bi-book"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="bento-card p-4 d-flex justify-content-between align-items-center">
                <div>
                    <span style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Rata-rata Bobot</span>
                    <h2 style="font-size: 2rem; font-weight: 800; color: #18181b; margin: 4px 0 0 0;">
                        {{ count($mks) > 0 ? round($mks->avg('sks'), 1) : 0 }} <span style="font-size: 0.95rem; font-weight: 600; color: #71717a;">SKS</span>
                    </h2>
                </div>
                <div style="width: 44px; height: 44px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                    <i class="bi bi-bar-chart-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div class="bento-card p-4 d-flex justify-content-between align-items-center">
                <div>
                    <span style="font-size: 0.85rem; font-weight: 600; color: #71717a;">Total Akumulasi SKS</span>
                    <h2 style="font-size: 2rem; font-weight: 800; color: #18181b; margin: 4px 0 0 0;">
                        {{ $mks->sum('sks') }} <span style="font-size: 0.95rem; font-weight: 600; color: #71717a;">SKS</span>
                    </h2>
                </div>
                <div style="width: 44px; height: 44px; border-radius: 50%; background: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                    <i class="bi bi-check-circle"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Table Bento Card --}}
    <div class="bento-card p-4 p-md-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div>
                <h4 style="font-weight: 800; color: #18181b; margin-bottom: 4px;">
                    Daftar Kurikulum & Mata Kuliah
                </h4>
                <p style="font-size: 0.88rem; color: #71717a; margin: 0;">
                    Kelola seluruh mata kuliah dan alokasi bobot SKS pada program studi.
                </p>
            </div>

            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('matakuliah.create') }}" class="pill-tab active" style="padding: 8px 18px; font-size: 0.85rem;">
                    <i class="bi bi-plus-lg"></i>
                    <span>Tambah Data</span>
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle" style="margin-bottom: 0;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--border-card);">
                        <th style="font-size: 0.8rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px; padding: 14px 16px;">
                            Kode / ID Mata Kuliah
                        </th>
                        <th style="font-size: 0.8rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px; padding: 14px 16px;">
                            Nama Mata Kuliah
                        </th>
                        <th style="font-size: 0.8rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.6px; padding: 14px 16px; text-align: center;">
                            Bobot SKS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mks as $mk)
                        <tr style="border-bottom: 1px solid var(--border-card); transition: background-color 0.2s ease;">
                            <td style="padding: 16px; font-family: monospace; font-size: 0.82rem; color: #4b5563;">
                                <span class="badge" style="background: #f4efe6; color: #18181b; font-weight: 600; padding: 6px 10px; border-radius: 8px; border: 1px solid var(--border-card);">
                                    {{ $mk->id }}
                                </span>
                            </td>
                            <td style="padding: 16px;">
                                <div class="d-flex align-items-center gap-3">
                                    <div style="width: 38px; height: 38px; border-radius: 12px; background: #fff0eb; color: #ff7353; display: flex; align-items: center; justify-content: center; font-size: 1rem; flex-shrink: 0;">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div>
                                        <div style="font-weight: 700; color: #18181b; font-size: 0.95rem;">
                                            {{ $mk->nama_mk }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 16px; text-align: center;">
                                <span class="badge" style="background: linear-gradient(135deg, #ff7353 0%, #fa5e3a 100%); color: #ffffff; padding: 7px 14px; border-radius: var(--radius-pill); font-size: 0.82rem; font-weight: 700; box-shadow: 0 4px 10px rgba(255, 115, 83, 0.25);">
                                    {{ $mk->sks }} SKS
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-5">
                                <div style="width: 64px; height: 64px; border-radius: 50%; background: #f4efe6; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #9ca3af; font-size: 1.8rem;">
                                    <i class="bi bi-inbox"></i>
                                </div>
                                <h5 style="font-weight: 700; color: #18181b; margin-bottom: 4px;">Belum Ada Mata Kuliah</h5>
                                <p style="font-size: 0.88rem; color: #71717a; margin-bottom: 16px;">
                                    Belum ada mata kuliah yang terdaftar. Klik tombol di bawah untuk menambahkan.
                                </p>
                                <a href="{{ route('matakuliah.create') }}" class="btn-coral">
                                    <i class="bi bi-plus-lg"></i>
                                    <span>Tambah Mata Kuliah</span>
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
