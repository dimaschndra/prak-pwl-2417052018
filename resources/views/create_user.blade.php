@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <!-- Breadcrumb / Back button -->
            <div class="mb-3">
                <a href="{{ url('/user') }}" class="text-decoration-none text-muted small d-inline-flex align-items-center gap-1 hover-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar Pengguna
                </a>
            </div>

            <!-- Card Form -->
            <div class="card card-custom border-0 shadow-sm overflow-hidden">
                <div class="p-4 bg-white border-bottom">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-3 bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-person-plus-fill fs-4"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1 text-dark">Buat Pengguna Baru</h4>
                            <p class="text-muted small mb-0">Isi formulir di bawah ini untuk menambahkan data mahasiswa baru ke sistem</p>
                        </div>
                    </div>
                </div>

                <div class="p-4 p-md-5 bg-white">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <!-- Nama Lengkap -->
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold text-dark small text-uppercase" style="letter-spacing: 0.5px;">
                                Nama Mahasiswa <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-0 bg-light" id="nama" name="nama" placeholder="Masukkan nama lengkap mahasiswa" required autocomplete="off">
                            </div>
                            <div class="form-text text-muted small">Masukkan nama lengkap sesuai identitas akademik.</div>
                        </div>

                        <!-- NPM -->
                        <div class="mb-4">
                            <label for="npm" class="form-label fw-semibold text-dark small text-uppercase" style="letter-spacing: 0.5px;">
                                NPM (Nomor Pokok Mahasiswa) <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-card-text"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 ps-0 bg-light" id="npm" name="npm" placeholder="Contoh: 2417052018" required autocomplete="off">
                            </div>
                            <div class="form-text text-muted small">Nomor Pokok Mahasiswa harus unik dan valid.</div>
                        </div>

                        <!-- Pilihan Kelas -->
                        <div class="mb-4">
                            <label for="kelas_id" class="form-label fw-semibold text-dark small text-uppercase" style="letter-spacing: 0.5px;">
                                Kelas Perkuliahan <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-building"></i>
                                </span>
                                <select class="form-select border-start-0 ps-0 bg-light" id="kelas_id" name="kelas_id" required>
                                    <option value="" disabled selected>Pilih salah satu kelas...</option>
                                    @foreach ($kelas as $kelasItem)
                                        <option value="{{ $kelasItem->id }}">
                                            Kelas {{ $kelasItem->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-text text-muted small">Data kelas diambil secara dinamis dari database.</div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex align-items-center justify-content-end gap-2 pt-3 border-top mt-4">
                            <a href="{{ url('/user') }}" class="btn btn-light px-4 py-2 rounded-3 border text-secondary fw-medium">
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded-3 d-inline-flex align-items-center gap-2 fw-medium shadow-sm">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Simpan Pengguna</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
