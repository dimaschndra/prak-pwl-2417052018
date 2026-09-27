@props(['users' => []])

<div class="table-responsive rounded-4 overflow-hidden shadow-sm border border-light-subtle bg-white">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-light border-bottom">
            <tr class="text-uppercase text-secondary" style="font-size: 0.78rem; letter-spacing: 0.5px;">
                <th scope="col" class="py-3 px-4 text-center" style="width: 70px;">ID</th>
                <th scope="col" class="py-3 px-4">Nama Mahasiswa</th>
                <th scope="col" class="py-3 px-4">NPM</th>
                <th scope="col" class="py-3 px-4 text-center">Kelas</th>
                <th scope="col" class="py-3 px-4 text-center">Waktu Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                @php
                    $initials = collect(explode(' ', trim($user->nama)))
                        ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                        ->take(2)
                        ->implode('');
                    if (empty($initials)) $initials = 'US';

                    $badgeColors = [
                        'A' => ['bg' => '#eff6ff', 'text' => '#1d4ed8', 'border' => '#bfdbfe'],
                        'B' => ['bg' => '#ecfdf5', 'text' => '#047857', 'border' => '#a7f3d0'],
                        'C' => ['bg' => '#fffbeb', 'text' => '#b45309', 'border' => '#fde68a'],
                        'D' => ['bg' => '#f5f3ff', 'text' => '#6d28d9', 'border' => '#ddd6fe'],
                    ];
                    $kelasKey = strtoupper(trim($user->nama_kelas ?? ''));
                    $badgeStyle = $badgeColors[$kelasKey] ?? ['bg' => '#f1f5f9', 'text' => '#475569', 'border' => '#cbd5e1'];
                @endphp
                <tr class="transition-row">
                    <td class="px-4 text-center fw-semibold text-muted">
                        <span class="badge bg-light text-dark rounded-pill border px-2 py-1">
                            #{{ $user->id }}
                        </span>
                    </td>
                    <td class="px-4 py-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm" style="width: 40px; height: 40px; min-width: 40px; background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%); font-size: 0.85rem;">
                                {{ $initials }}
                            </div>
                            <div>
                                <h6 class="mb-0 fw-semibold text-dark">{{ $user->nama }}</h6>
                                <span class="text-muted small d-inline-block">Mahasiswa Ilmu Komputer</span>
                            </div>
                        </div>
                    </td>
                    <td class="px-4">
                        <div class="d-inline-flex align-items-center gap-1 font-monospace px-2 py-1 rounded bg-body-tertiary border text-primary fw-medium" style="font-size: 0.88rem;">
                            <i class="bi bi-card-text text-secondary me-1"></i>
                            {{ $user->npm ?? $user->nim ?? '-' }}
                        </div>
                    </td>
                    <td class="px-4 text-center">
                        <span class="px-3 py-1 rounded-pill fw-semibold d-inline-flex align-items-center gap-1 border" style="background-color: {{ $badgeStyle['bg'] }}; color: {{ $badgeStyle['text'] }}; border-color: {{ $badgeStyle['border'] }} !important; font-size: 0.82rem;">
                            <span class="rounded-circle d-inline-block" style="width: 6px; height: 6px; background-color: {{ $badgeStyle['text'] }};"></span>
                            Kelas {{ $user->nama_kelas }}
                        </span>
                    </td>
                    <td class="px-4 text-center text-muted small">
                        <span title="{{ $user->created_at }}">
                            {{ $user->created_at ? \Carbon\Carbon::parse($user->created_at)->format('d M Y, H:i') : '-' }}
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="py-5 text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center py-4">
                            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mb-3 text-secondary" style="width: 70px; height: 70px;">
                                <i class="bi bi-inbox fs-1"></i>
                            </div>
                            <h5 class="fw-semibold text-secondary mb-1">Belum Ada Data Pengguna</h5>
                            <p class="text-muted small mb-3" style="max-width: 380px;">
                                Data pengguna masih kosong. Tambahkan pengguna baru dengan mengklik tombol di bawah ini.
                            </p>
                            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm rounded-pill px-4 py-2 shadow-sm">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Pengguna Baru
                            </a>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if(count($users) > 0)
        <div class="px-4 py-3 bg-light bg-opacity-50 border-top d-flex justify-content-between align-items-center text-muted small">
            <span>Menampilkan <strong>{{ count($users) }}</strong> data pengguna</span>
            <span class="badge bg-secondary-subtle text-secondary px-2 py-1">Komponen Tabel Dinamis</span>
        </div>
    @endif
</div>
