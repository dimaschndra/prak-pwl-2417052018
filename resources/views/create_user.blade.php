@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px;">
    <!-- Breadcrumb / Back Navigation -->
    <div class="mb-4">
        <a href="{{ url('/user') }}" class="btn-modern-secondary" style="padding: 8px 16px; font-size: 0.85rem;">
            <i class="bi bi-arrow-left"></i>
            <span>Kembali ke Daftar Pengguna</span>
        </a>
    </div>

    <!-- Main Card Container -->
    <div class="card-glass" style="overflow: hidden;">
        <!-- Card Header Banner -->
        <div style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); padding: 32px 36px; border-bottom: 1px solid rgba(255, 255, 255, 0.08); position: relative; overflow: hidden;">
            <div style="position: absolute; right: -20px; top: -20px; width: 140px; height: 140px; background: radial-gradient(circle, rgba(59, 130, 246, 0.25) 0%, rgba(0,0,0,0) 70%); border-radius: 50%; pointer-events: none;"></div>
            
            <div class="d-flex align-items-center gap-3 position-relative" style="z-index: 2;">
                <div style="width: 56px; height: 56px; border-radius: 16px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; box-shadow: 0 8px 20px rgba(59, 130, 246, 0.4);">
                    <i class="bi bi-person-plus-fill" style="font-size: 1.6rem;"></i>
                </div>
                <div>
                    <div style="display: inline-block; background: rgba(59, 130, 246, 0.25); color: #93c5fd; padding: 2px 10px; border-radius: 9999px; font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">
                        Formulir Mahasiswa
                    </div>
                    <h3 style="font-size: 1.45rem; font-weight: 800; color: #ffffff; margin-bottom: 4px; letter-spacing: -0.3px;">
                        Buat Pengguna Baru
                    </h3>
                    <p style="color: #94a3b8; font-size: 0.88rem; margin: 0;">
                        Lengkapi informasi di bawah ini untuk menyimpan data mahasiswa baru ke basis data.
                    </p>
                </div>
            </div>
        </div>

        <!-- Form Body -->
        <div style="padding: 36px;">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <!-- Input Nama Mahasiswa -->
                <div class="mb-4">
                    <label for="nama" class="modern-label">
                        Nama Lengkap Mahasiswa <span style="color: #ef4444;">*</span>
                    </label>
                    <div class="modern-input-group">
                        <span class="input-icon">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" 
                               class="modern-input" 
                               id="nama" 
                               name="nama" 
                               placeholder="Contoh: Dimas Kurnia Chandra" 
                               required 
                               autocomplete="off">
                    </div>
                    <div style="font-size: 0.78rem; color: #64748b; margin-top: 6px;">
                        <i class="bi bi-info-circle me-1"></i> Masukkan nama lengkap sesuai kartu tanda mahasiswa (KTM).
                    </div>
                </div>

                <!-- Input NPM -->
                <div class="mb-4">
                    <label for="npm" class="modern-label">
                        Nomor Pokok Mahasiswa (NPM) <span style="color: #ef4444;">*</span>
                    </label>
                    <div class="modern-input-group">
                        <span class="input-icon">
                            <i class="bi bi-card-heading"></i>
                        </span>
                        <input type="text" 
                               class="modern-input" 
                               id="npm" 
                               name="npm" 
                               placeholder="Contoh: 2417052018" 
                               required 
                               autocomplete="off">
                    </div>
                    <div style="font-size: 0.78rem; color: #64748b; margin-top: 6px;">
                        <i class="bi bi-info-circle me-1"></i> Nomor Pokok Mahasiswa (10 digit angka).
                    </div>
                </div>

                <!-- Select Kelas -->
                <div class="mb-4">
                    <label for="kelas_id" class="modern-label">
                        Kelas Perkuliahan <span style="color: #ef4444;">*</span>
                    </label>
                    <div class="modern-input-group">
                        <span class="input-icon">
                            <i class="bi bi-building"></i>
                        </span>
                        <select class="modern-select" id="kelas_id" name="kelas_id" required>
                            <option value="" disabled selected>-- Pilih salah satu kelas perkuliahan --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">
                                    Kelas {{ $kelasItem->nama_kelas }} (ID: {{ $kelasItem->id }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div style="font-size: 0.78rem; color: #64748b; margin-top: 6px;">
                        <i class="bi bi-info-circle me-1"></i> Data kelas dimuat secara dinamis dari tabel <code>kelas</code> database PostgreSQL.
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex align-items-center justify-content-end gap-3 pt-3" style="border-top: 1px solid #f1f5f9; margin-top: 32px;">
                    <a href="{{ url('/user') }}" class="btn-modern-secondary">
                        <i class="bi bi-x-lg"></i>
                        <span>Batal</span>
                    </a>
                    <button type="submit" class="btn-modern-primary">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Simpan Pengguna</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
