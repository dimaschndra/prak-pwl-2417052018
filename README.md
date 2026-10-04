# 🌐 Praktikum Pemrograman Web Lanjut (PWL)

Repository ini berisi tugas dan progres modul praktikum mata kuliah **Pemrograman Web Lanjut** menggunakan framework **Laravel 11**.

---

## 👤 Identitas Mahasiswa

| Informasi | Keterangan |
| :--- | :--- |
| **Nama** | Dimas Kurnia Chandra |
| **NPM** | 2417052018 |
| **Program Studi** | S1 Sistem Informasi |
| **Mata Kuliah** | Praktikum Pemrograman Web Lanjut |
| **Perguruan Tinggi** | Universitas Lampung |

---

## 🚀 Fitur & Modul Praktikum

### 📌 Modul & Tugas Pertemuan 4: Bento Grid UI & Blade Components
- **Bento Grid Modern UI**: Antarmuka responsif dengan gaya clean bento card, aksen warna coral, tipografi modern *Plus Jakarta Sans*, dan Bootstrap 5.3.3.
- **Blade Templating & Reusable Components**:
  - `layouts/app.blade.php`: Base layout utama dengan styling terpadu dan slot dinamis.
  - `components/navbar.blade.php`: Navigasi responsif dengan deteksi status halaman aktif.
  - `components/footer.blade.php`: Footer terstruktur yang konsisten di semua halaman.
  - `components/user-table.blade.php`: Komponen tabel data pengguna dengan relasi kelas.
- **Manajemen Pengguna (User Management)**:
  - Menampilkan daftar data pengguna dan relasinya dengan data kelas (`/user`).
  - Formulir input pengguna baru dengan opsi pemilihan kelas dinamis (`/user/create`).
  - Penanganan request dan penyimpanan ke database via Eloquent ORM.
- **Halaman Profil Dinamis**:
  - Routing fleksibel dengan parameter opsional `/profile/{name?}/{npm?}/{kelas?}` serta nilai fallback default.

### 📌 Modul & Tugas Pertemuan 5: CRUD (Create & Read) Mata Kuliah dengan UUID
- **Primary Key UUID (128-bit)**: Menggantikan auto-increment id pada tabel `mata_kuliah` menggunakan UUID untuk identitas unik global yang aman.
- **Model MataKuliah**: Implementasi event `boot()` dengan `Str::uuid()` otomatis saat pembuatan data dan fungsi `getAllMK()`.
- **MataKuliahController**: Method `index()` untuk menampilkan daftar MK, `create()` untuk form input, dan `store()` untuk mass assignment.
- **Blade Views Mata Kuliah**:
  - `create_mk.blade.php`: Form penambahan mata kuliah dengan validasi, input Nama MK, dan SKS.
  - `list_mk.blade.php`: Tabel responsif daftar mata kuliah dengan tampilan badge UUID dan metrik SKS.

---

## 🛣️ Daftar Route & Endpoint

| Method | Endpoint | Deskripsi | Handler / Controller |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | Halaman selamat datang (Welcome) | View `welcome` |
| `GET` | `/profile/{name?}/{npm?}/{kelas?}` | Halaman profil mahasiswa (Bento Grid) | `ProfileController@profile` |
| `GET` | `/user` | Daftar data pengguna & kelas | `UserController@index` |
| `GET` | `/user/create` | Formulir tambah pengguna baru | `UserController@create` |
| `POST` | `/user` | Proses penyimpanan data pengguna baru | `UserController@store` |
| `GET` | `/matakuliah` | Daftar mata kuliah (UUID) | `MataKuliahController@index` |
| `GET` | `/matakuliah/create` | Formulir tambah mata kuliah baru | `MataKuliahController@create` |
| `POST` | `/matakuliah` | Proses penyimpanan data mata kuliah baru | `MataKuliahController@store` |

---

## 📂 Struktur Direktori Penting

```
prak-web-lanjut-2417052018/
├── app/
│   ├── Http/Controllers/
│   │   ├── ProfileController.php      # Controller halaman profil
│   │   └── UserController.php         # Controller CRUD user & relasi kelas
│   └── Models/
│       ├── Kelas.php                  # Model data kelas
│       └── UserModel.php              # Model data pengguna/mahasiswa
├── database/
│   └── migrations/
│       ├── ..._create_kelas_table.php
│       ├── ..._create_user_table.php
│       └── ..._create_mata_kuliah_table.php
├── resources/
│   └── views/
│       ├── components/
│       │   ├── footer.blade.php       # Komponen footer
│       │   ├── navbar.blade.php       # Komponen navigasi
│       │   └── user-table.blade.php   # Komponen tabel data user
│       ├── layouts/
│       │   └── app.blade.php          # Main layout bento grid
│       ├── create_user.blade.php      # View form input user
│       ├── list_user.blade.php        # View daftar user
│       └── profile.blade.php          # View profil mahasiswa
└── routes/
    └── web.php                        # Definisi rute aplikasi
```

---

## 🛠️ Prasyarat Sistem

Sebelum menjalankan proyek, pastikan perangkat telah memiliki:
- **PHP** >= 8.2
- **Composer** >= 2.x
- **Node.js** & **NPM**
- Database server (**MySQL** / **MariaDB** via XAMPP, Laragon, dsb.)

---

## 💻 Panduan Instalasi & Menjalankan Proyek

1. **Clone repository ini:**
   ```bash
   git clone https://github.com/dimaschndra/prak-pwl-2417052018.git
   cd prak-pwl-2417052018
   ```

2. **Instal dependensi PHP dan Frontend:**
   ```bash
   composer install
   npm install
   ```

3. **Salin file environment & generate application key:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database:**
   Buka file `.env`, lalu sesuaikan kredensial database Anda:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=prak_web_lanjut
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan Migrasi Database:**
   ```bash
   php artisan migrate
   ```

6. **Jalankan Development Server:**
   ```bash
   php artisan serve
   ```
   Akses aplikasi di browser melalui URL: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📸 Dokumentasi Antarmuka

| Halaman Profil (`/profile`) | Daftar User (`/user`) |
| :---: | :---: |
| *(Tangkapan layar halaman profile)* | *(Tangkapan layar halaman list user)* |

---

## 📜 Lisensi

Proyek ini dibuat untuk keperluan akademik pada praktikum perkuliahan. Menggunakan framework [Laravel](https://laravel.com) yang berlisensi terbuka di bawah [MIT license](https://opensource.org/licenses/MIT).
