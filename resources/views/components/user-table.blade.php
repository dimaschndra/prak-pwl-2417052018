@props(['users' => []])

<div class="modern-table-container">
    <div class="table-responsive">
        <table class="modern-table">
            <thead>
                <tr>
                    <th style="width: 80px; text-align: center;">ID</th>
                    <th>Nama Mahasiswa</th>
                    <th>NPM / NIM</th>
                    <th style="text-align: center;">Kelas</th>
                    <th style="text-align: center;">Waktu Terdaftar</th>
                    <th style="text-align: center; width: 100px;">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    @php
                        // Hitung inisial nama
                        $parts = array_filter(explode(' ', trim($user->nama)));
                        $initials = '';
                        foreach (array_slice($parts, 0, 2) as $p) {
                            $initials .= strtoupper(substr($p, 0, 1));
                        }
                        if (empty($initials)) $initials = 'MH';

                        // Styling warna badge kelas
                        $badgeClasses = [
                            'A' => ['bg' => '#eff6ff', 'color' => '#1d4ed8', 'border' => '#bfdbfe'],
                            'B' => ['bg' => '#ecfdf5', 'color' => '#047857', 'border' => '#a7f3d0'],
                            'C' => ['bg' => '#fffbeb', 'color' => '#b45309', 'border' => '#fde68a'],
                            'D' => ['bg' => '#f5f3ff', 'color' => '#6d28d9', 'border' => '#ddd6fe'],
                        ];
                        $kName = strtoupper(trim($user->nama_kelas ?? ''));
                        $bStyle = $badgeClasses[$kName] ?? ['bg' => '#f1f5f9', 'color' => '#475569', 'border' => '#cbd5e1'];
                    @endphp
                    <tr>
                        <td style="text-align: center;">
                            <span style="display: inline-block; padding: 4px 10px; border-radius: 8px; background: #f1f5f9; font-size: 0.8rem; font-weight: 700; color: #475569; font-family: monospace;">
                                #{{ $user->id }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 44px; height: 44px; min-width: 44px; border-radius: 12px; background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 800; font-size: 0.9rem; box-shadow: 0 4px 10px rgba(79, 70, 229, 0.25);">
                                    {{ $initials }}
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: #0f172a; font-size: 0.95rem; margin-bottom: 2px;">
                                        {{ $user->nama }}
                                    </div>
                                    <div style="font-size: 0.78rem; color: #64748b;">
                                        <i class="bi bi-mortarboard me-1"></i> Mahasiswa Ilmu Komputer
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: inline-flex; align-items: center; gap: 6px; padding: 5px 12px; border-radius: 8px; background: #f8fafc; border: 1.5px solid #e2e8f0; font-family: monospace; font-size: 0.88rem; font-weight: 600; color: #2563eb;">
                                <i class="bi bi-card-text text-secondary"></i>
                                {{ $user->npm ?? $user->nim ?? '-' }}
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <span style="display: inline-flex; align-items: center; gap: 6px; padding: 5px 14px; border-radius: 9999px; font-weight: 700; font-size: 0.82rem; background-color: {{ $bStyle['bg'] }}; color: {{ $bStyle['color'] }}; border: 1px solid {{ $bStyle['border'] }};">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background-color: {{ $bStyle['color'] }};"></span>
                                Kelas {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td style="text-align: center; color: #64748b; font-size: 0.84rem;">
                            @if($user->created_at)
                                <div style="font-weight: 500; color: #334155;">{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y') }}</div>
                                <div style="font-size: 0.74rem; color: #94a3b8;">{{ \Carbon\Carbon::parse($user->created_at)->format('H:i') }} WIB</div>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td style="text-align: center;">
                            <span style="display: inline-block; padding: 4px 10px; border-radius: 9999px; background: #ecfdf5; color: #047857; border: 1px solid #a7f3d0; font-size: 0.75rem; font-weight: 700;">
                                <i class="bi bi-check-circle-fill me-1"></i> Aktif
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="padding: 60px 20px; text-align: center;">
                            <div style="max-width: 420px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                                <div style="width: 80px; height: 80px; border-radius: 50%; background: #f1f5f9; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-size: 2.2rem; margin-bottom: 16px;">
                                    <i class="bi bi-inbox-fill"></i>
                                </div>
                                <h5 style="font-weight: 800; color: #1e293b; margin-bottom: 6px;">Belum Ada Data Pengguna</h5>
                                <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">
                                    Tabel basis data pengguna saat ini masih kosong. Silakan tambahkan data pengguna baru melalui formulir.
                                </p>
                                <a href="{{ route('user.create') }}" class="btn-modern-primary">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <span>Tambah Pengguna Pertama</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if(count($users) > 0)
        <div style="padding: 16px 24px; background: #f8fafc; border-top: 1.5px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; font-size: 0.84rem; color: #64748b;">
            <div>
                Menampilkan total <strong style="color: #0f172a;">{{ count($users) }}</strong> data mahasiswa
            </div>
            <div style="display: inline-flex; align-items: center; gap: 6px; padding: 4px 10px; border-radius: 6px; background: #e2e8f0; color: #475569; font-size: 0.74rem; font-weight: 700;">
                <i class="bi bi-cpu-fill text-primary"></i>
                Komponen Dinamis Blade
            </div>
        </div>
    @endif
</div>
