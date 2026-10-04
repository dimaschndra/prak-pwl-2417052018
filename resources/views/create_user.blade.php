@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
        <div class="mb-3">
            <a href="{{ url('/user') }}" class="pill-tab" style="padding: 8px 18px; font-size: 0.85rem;">
                <i class="bi bi-arrow-left"></i>
                <span>Kembali ke Data Mahasiswa</span>
            </a>
        </div>

        <div class="bento-card p-4 p-md-5">
            <div class="d-flex align-items-center gap-3 mb-4 pb-3" style="border-bottom: 1px solid var(--border-card);">
                <div style="width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, #ff7353 0%, #ff5c36 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.4rem; box-shadow: var(--shadow-coral);">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: #18181b; margin-bottom: 2px;">
                        Tambah Mahasiswa Baru
                    </h3>
                    <p style="font-size: 0.88rem; color: #71717a; margin: 0;">
                        Lengkapi form di bawah untuk mendaftarkan data mahasiswa ke sistem.
                    </p>
                </div>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf


                <div class="mb-4">
                    <label for="nama" style="display: block; font-size: 0.82rem; font-weight: 800; color: #18181b; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 8px;">
                        Nama Lengkap Mahasiswa <span style="color: #ff7353;">*</span>
                    </label>
                    <div class="position-relative">
                        <i class="bi bi-person position-absolute" style="left: 18px; top: 14px; color: #9ca3af; font-size: 1.1rem;"></i>
                        <input type="text" 
                               class="bento-input-pill w-100" 
                               id="nama" 
                               name="nama" 
                               placeholder="Contoh: Dimas Kurnia Chandra" 
                               style="padding-left: 48px; height: 50px;"
                               required 
                               autocomplete="off">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="npm" style="display: block; font-size: 0.82rem; font-weight: 800; color: #18181b; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 8px;">
                        Nomor Pokok Mahasiswa (NPM) <span style="color: #ff7353;">*</span>
                    </label>
                    <div class="position-relative">
                        <i class="bi bi-card-text position-absolute" style="left: 18px; top: 14px; color: #9ca3af; font-size: 1.1rem;"></i>
                        <input type="text" 
                               class="bento-input-pill w-100" 
                               id="npm" 
                               name="npm" 
                               placeholder="Contoh: 2417052018" 
                               style="padding-left: 48px; height: 50px; font-family: monospace;"
                               required 
                               autocomplete="off">
                    </div>
                </div>

                <!-- Pilihan Kelas / Program Studi -->
                <div class="mb-4">
                    <label for="kelas_id" style="display: block; font-size: 0.82rem; font-weight: 800; color: #18181b; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 8px;">
                        Pilih Kelas / Program Studi <span style="color: #ff7353;">*</span>
                    </label>
                    <div class="position-relative">
                        <i class="bi bi-building position-absolute" style="left: 18px; top: 14px; color: #9ca3af; font-size: 1.1rem;"></i>
                        <select class="bento-input-pill w-100" 
                                id="kelas_id" 
                                name="kelas_id" 
                                style="padding-left: 48px; height: 50px; cursor: pointer;" 
                                required>
                            <option value="" disabled selected>-- Pilih salah satu kelas / program studi --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">
                                    {{ $kelasItem->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex align-items-center justify-content-end gap-3 pt-3 mt-4" style="border-top: 1px solid var(--border-card);">
                    <a href="{{ url('/user') }}" class="btn-pill-secondary">
                        Batal
                    </a>
                    <button type="submit" class="btn-coral">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Simpan Mahasiswa Baru</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
