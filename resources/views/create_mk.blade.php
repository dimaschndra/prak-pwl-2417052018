@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
        
        <div class="mb-3">
            <a href="{{ url('/matakuliah') }}" class="pill-tab" style="padding: 8px 18px; font-size: 0.85rem;">
                <i class="bi bi-arrow-left"></i>
                <span>Kembali ke Daftar Mata Kuliah</span>
            </a>
        </div>

        <div class="bento-card p-4 p-md-5">
            
            <div class="d-flex align-items-center gap-3 mb-4 pb-3" style="border-bottom: 1px solid var(--border-card);">
                <div style="width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, #ff7353 0%, #ff5c36 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.4rem; box-shadow: var(--shadow-coral);">
                    <i class="bi bi-book-half"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: #18181b; margin-bottom: 2px;">
                        Tambah Mata Kuliah Baru
                    </h3>
                    <p style="font-size: 0.88rem; color: #71717a; margin: 0;">
                        Lengkapi formulir di bawah untuk menambahkan mata kuliah baru ke dalam sistem kurikulum.
                    </p>
                </div>
            </div>

            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="nama_mk" style="display: block; font-size: 0.82rem; font-weight: 800; color: #18181b; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 8px;">
                        Nama Mata Kuliah <span style="color: #ff7353;">*</span>
                    </label>
                    <div class="position-relative">
                        <i class="bi bi-journal-bookmark position-absolute" style="left: 18px; top: 14px; color: #9ca3af; font-size: 1.1rem;"></i>
                        <input type="text" 
                               class="bento-input-pill w-100" 
                               id="nama_mk" 
                               name="nama_mk" 
                               placeholder="Contoh: Pemrograman Web Lanjut" 
                               style="padding-left: 48px; height: 50px;"
                               required 
                               autocomplete="off">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="sks" style="display: block; font-size: 0.82rem; font-weight: 800; color: #18181b; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 8px;">
                        Bobot SKS <span style="color: #ff7353;">*</span>
                    </label>
                    <div class="position-relative">
                        <i class="bi bi-award position-absolute" style="left: 18px; top: 14px; color: #9ca3af; font-size: 1.1rem;"></i>
                        <input type="number" 
                               class="bento-input-pill w-100" 
                               id="sks" 
                               name="sks" 
                               min="1" 
                               max="6" 
                               placeholder="Contoh: 3" 
                               style="padding-left: 48px; height: 50px;"
                               required>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end gap-3 pt-3" style="border-top: 1px solid var(--border-card);">
                    <a href="{{ url('/matakuliah') }}" class="pill-tab" style="padding: 12px 24px;">
                        Batal
                    </a>
                    <button type="submit" class="btn-coral" style="border: none; padding: 12px 28px; cursor: pointer;">
                        <i class="bi bi-check2-circle" style="font-size: 1.1rem;"></i>
                        <span>Simpan Mata Kuliah</span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
