@props(['users' => []])

<div style="border-radius: 20px; overflow: hidden; border: 1px solid var(--border-card); background: #ffffff;">
    <div class="table-responsive">
        <table class="table align-middle mb-0" style="border-collapse: separate; border-spacing: 0;">
            <thead>
                <tr style="background: #faf8f5;">
                    <th scope="col" style="padding: 16px 20px; font-size: 0.76rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1.5px solid var(--border-card); width: 70px; text-align: center;">#</th>
                    <th scope="col" style="padding: 16px 20px; font-size: 0.76rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1.5px solid var(--border-card);">Mahasiswa</th>
                    <th scope="col" style="padding: 16px 20px; font-size: 0.76rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1.5px solid var(--border-card);">NPM / NIM</th>
                    <th scope="col" style="padding: 16px 20px; font-size: 0.76rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1.5px solid var(--border-card); text-align: center;">Kelas</th>
                    <th scope="col" style="padding: 16px 20px; font-size: 0.76rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1.5px solid var(--border-card); text-align: center;">Terdaftar Pada</th>
                    <th scope="col" style="padding: 16px 20px; font-size: 0.76rem; font-weight: 800; color: #71717a; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1.5px solid var(--border-card); text-align: center; width: 110px;">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    @php
                        // Inisial Nama
                        $words = array_filter(explode(' ', trim($user->nama)));
                        $initials = '';
                        foreach (array_slice($words, 0, 2) as $w) {
                            $initials .= strtoupper(substr($w, 0, 1));
                        }
                        if (empty($initials)) $initials = 'MH';

                        // Styling Badge Kelas sesuai nama kelas baru
                        $kName = trim($user->nama_kelas ?? '');
                        $kelasStyles = [
                            'Ilmu Komputer' => ['bg' => '#fff0eb', 'color' => '#ff7353', 'border' => '#ffd7cc'],
                            'Sistem Informasi' => ['bg' => '#eff6ff', 'color' => '#2563eb', 'border' => '#bfdbfe'],
                            'Manajemen Informatika' => ['bg' => '#ecfdf5', 'color' => '#059669', 'border' => '#a7f3d0'],
                        ];
                        $badge = $kelasStyles[$kName] ?? ['bg' => '#f4efe6', 'color' => '#71717a', 'border' => '#eae5dc'];

                        $isDimas = stripos($user->nama, 'dimas') !== false;
                    @endphp
                    <tr data-kelas="{{ $user->nama_kelas }}" class="table-row-hover" style="border-bottom: 1px solid #f4efe6; transition: background 0.15s ease;">
                        <td style="padding: 18px 20px; text-align: center;">
                            <span style="font-size: 0.82rem; font-weight: 700; color: #a1a1aa; font-family: monospace;">
                                {{ sprintf('%02d', $user->id) }}
                            </span>
                        </td>
                        <td style="padding: 18px 20px;">
                            <div class="d-flex align-items-center gap-3">
                                @if($isDimas)
                                    <img src="https://i.pinimg.com/736x/24/41/2d/24412d570fcffabe987fd50be1e28cf2.jpg" 
                                         alt="{{ $user->nama }}" 
                                         style="width: 42px; height: 42px; min-width: 42px; border-radius: 50%; object-fit: cover; border: 2px solid #ffffff; box-shadow: 0 4px 10px rgba(0,0,0,0.12);">
                                @else
                                    <div style="width: 42px; height: 42px; min-width: 42px; border-radius: 50%; background: linear-gradient(135deg, #ff7353 0%, #ff9068 100%); display: flex; align-items: center; justify-content: center; color: #ffffff; font-weight: 800; font-size: 0.88rem; box-shadow: 0 4px 10px rgba(255, 115, 83, 0.25);">
                                        {{ $initials }}
                                    </div>
                                @endif
                                <div>
                                    <div style="font-weight: 800; color: #18181b; font-size: 0.95rem; line-height: 1.2;">
                                        {{ $user->nama }}
                                    </div>
                                    <div style="font-size: 0.78rem; color: #71717a; margin-top: 3px;">
                                        {{ $user->nama_kelas ?? 'Mahasiswa' }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 18px 20px;">
                            <div style="display: inline-flex; align-items: center; gap: 6px; padding: 5px 12px; border-radius: var(--radius-pill); background: #f4efe6; font-family: monospace; font-size: 0.88rem; font-weight: 700; color: #18181b;">
                                <i class="bi bi-person-vcard text-muted"></i>
                                {{ $user->npm ?? $user->nim ?? '-' }}
                            </div>
                        </td>
                        <td style="padding: 18px 20px; text-align: center;">
                            <span style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 16px; border-radius: var(--radius-pill); font-weight: 700; font-size: 0.82rem; background-color: {{ $badge['bg'] }}; color: {{ $badge['color'] }}; border: 1px solid {{ $badge['border'] }};">
                                <span style="width: 7px; height: 7px; border-radius: 50%; background-color: {{ $badge['color'] }};"></span>
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td style="padding: 18px 20px; text-align: center; color: #71717a; font-size: 0.84rem;">
                            @if($user->created_at)
                                <div style="font-weight: 600; color: #18181b;">{{ \Carbon\Carbon::parse($user->created_at)->format('d M Y') }}</div>
                                <div style="font-size: 0.74rem; color: #a1a1aa;">{{ \Carbon\Carbon::parse($user->created_at)->format('H:i') }} WIB</div>
                            @else
                                <span>-</span>
                            @endif
                        </td>
                        <td style="padding: 18px 20px; text-align: center;">
                            <span style="display: inline-flex; align-items: center; gap: 6px; padding: 4px 12px; border-radius: var(--radius-pill); background: #ecfdf5; color: #059669; font-size: 0.75rem; font-weight: 700;">
                                <i class="bi bi-check-circle-fill" style="font-size: 0.7rem;"></i>
                                Aktif
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="padding: 50px 20px; text-align: center;">
                            <div style="max-width: 360px; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
                                <div style="width: 70px; height: 70px; border-radius: 50%; background: #f4efe6; display: flex; align-items: center; justify-content: center; color: #ff7353; font-size: 1.8rem; margin-bottom: 14px;">
                                    <i class="bi bi-inbox-fill"></i>
                                </div>
                                <h5 style="font-weight: 800; color: #18181b; margin-bottom: 4px;">Belum Ada Data Pengguna</h5>
                                <p style="font-size: 0.85rem; color: #71717a; margin-bottom: 18px;">
                                    Belum ada data mahasiswa yang terdaftar di sistem.
                                </p>
                                <a href="{{ route('user.create') }}" class="btn-coral" style="padding: 10px 20px; font-size: 0.88rem;">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <span>Tambah Mahasiswa Baru</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if(count($users) > 0)
        <div class="px-4 py-3" style="background: #faf8f5; border-top: 1px solid var(--border-card); font-size: 0.84rem; color: #71717a;">
            Menampilkan total <strong style="color: #18181b;">{{ count($users) }}</strong> data mahasiswa
        </div>
    @endif
</div>

<style>
    .table-row-hover:hover {
        background-color: #fbf9f5 !important;
    }
</style>
