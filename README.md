<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="220" alt="Laravel Logo">
</p>

<h1 align="center">InfoKand</h1>
<p align="center"><b>Galeri & Showcase Proyek Website Mahasiswa — Informatika Universitas Andalas</b></p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-13.7-red" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.3%2B-777bb4" alt="PHP">
  <img src="https://img.shields.io/badge/License-MIT-lightgrey" alt="License">
</p>

---

## 📖 Tentang Proyek

**InfoKand** adalah platform galeri berbasis web yang memungkinkan setiap mahasiswa mempublikasikan **satu website/proyek pribadinya** lengkap dengan judul, deskripsi, thumbnail, dan tautan langsung ke situs tersebut. Pengunjung dapat menjelajahi seluruh proyek yang telah dipublikasikan melalui halaman galeri dengan fitur pencarian dan pengurutan.

Setiap mahasiswa login menggunakan **NIM** sebagai username, dengan kewajiban mengganti password default pada login pertama demi keamanan akun.

---

## ✨ Fitur Utama

- 🔑 **Login berbasis NIM** — autentikasi menggunakan NIM & password, bukan email.
- 🔒 **Wajib Ganti Password** — password default (= NIM) harus diganti saat login pertama sebelum mengakses fitur lain.
- 🖼️ **Satu Proyek per Mahasiswa** — setiap akun hanya dapat mempublikasikan satu website ke galeri.
- 📤 **Upload & Edit Proyek** — judul, deskripsi, URL website, dan thumbnail (jpeg/png/jpg/webp, maks. 2 MB).
- 🔍 **Pencarian & Pengurutan** — cari proyek berdasarkan judul atau nama mahasiswa; urutkan berdasarkan terbaru atau nama (A–Z).
- 🏠 **Halaman Beranda Dinamis** — menampilkan 6 proyek terbaru (*featured projects*) serta proyek milik pengguna yang sedang login.
- 👤 **Manajemen Profil** — ubah nama, email, dan foto profil.
- 🛡️ **Keamanan Kepemilikan** — hanya pemilik proyek (dicocokkan berdasarkan nama/author) yang dapat mengedit proyeknya.

---

## 🛠️ Tech Stack

| Komponen | Teknologi |
|---|---|
| Framework Backend | Laravel 13.7 (PHP 8.3+) |
| Autentikasi | Laravel Auth (custom field `nim`) |
| Database | SQLite / MySQL (dikonfigurasi via `.env`) |
| Frontend | Blade Templates, Vite |
| Penyimpanan File | Laravel Filesystem (`storage/app/public`) |
| Testing | PHPUnit |
| Tooling Dev | Laravel Pail, Pint, Tinker |

---

## 📂 Struktur Proyek (Ringkas)

```
infokand/
├── app/
│   ├── Http/Controllers/
│   │   ├── AuthController.php      # Login, logout, ganti password, profil
│   │   └── ProjectController.php   # Beranda, galeri, CRUD proyek
│   └── Models/
│       ├── User.php
│       └── Project.php
├── database/
│   ├── migrations/                 # users, projects, profile_photo, dll.
│   └── seeders/DatabaseSeeder.php  # Seed akun mahasiswa berdasarkan NIM
├── resources/views/
│   ├── welcome.blade.php           # Beranda / area manajemen
│   ├── projects.blade.php          # Galeri proyek (search & sort)
│   ├── project-detail.blade.php
│   ├── login.blade.php
│   ├── ganti_password.blade.php
│   ├── profile.blade.php
│   └── components/ (navbar, footer)
├── routes/web.php
└── public/assets/                  # grainient.js, silk.js (efek visual)
```

---

## 🚀 Instalasi & Menjalankan

### Prasyarat

- PHP ≥ 8.3
- Composer
- Node.js & NPM
- SQLite (default) atau MySQL/PostgreSQL

### Langkah Instalasi

```bash
# 1. Clone repository
git clone https://github.com/suryaandika3005/infokand.git
cd infokand

# 2. Install dependensi PHP & JS
composer install
npm install

# 3. Salin file environment & generate app key
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database pada .env, lalu jalankan migrasi
php artisan migrate

# 5. (Opsional) Seed data akun mahasiswa
php artisan db:seed

# 6. Buat symbolic link storage agar thumbnail/foto profil dapat diakses publik
php artisan storage:link

# 7. Jalankan aplikasi (server + queue + vite sekaligus)
composer run dev
```

Aplikasi akan berjalan pada `http://127.0.0.1:8000`.

> Alternatif menjalankan server saja tanpa Vite/queue: `php artisan serve`

### Kredensial Login Default (hasil seeding)

- **Username:** NIM mahasiswa (contoh: `2311533005`)
- **Password default:** sama dengan NIM (contoh: `2311533005`)
- Sistem akan **memaksa penggantian password** pada login pertama.

---

## 🔀 Alur Penggunaan

1. Mahasiswa login menggunakan NIM & password default.
2. Jika belum pernah mengganti password → diarahkan ke halaman **Ganti Password**.
3. Setelah password diperbarui → masuk ke halaman **Beranda / Area Manajemen**.
4. Mahasiswa dapat mempublikasikan **satu proyek** (judul, deskripsi, URL, thumbnail).
5. Proyek yang telah dipublikasikan tampil di halaman **Galeri** dan dapat dicari/diurutkan oleh pengunjung lain.
6. Mahasiswa dapat mengedit proyek miliknya kapan saja melalui halaman beranda.

---

## 🧪 Testing

```bash
composer test
```

Menjalankan pembersihan konfigurasi (`config:clear`) sebelum eksekusi test suite PHPUnit (`tests/Feature` & `tests/Unit`).

---

## 👤 Kontributor

Proyek dikembangkan sebagai bagian dari kebutuhan internal Program Studi Informatika, Fakultas Teknologi Informasi, Universitas Andalas, untuk mendokumentasikan dan memamerkan karya website mahasiswa.

**Maintainer:** Surya Andika (2311533005)

---

## 📄 Lisensi

Proyek ini berbasis framework [Laravel](https://laravel.com) yang bersifat open-source di bawah [lisensi MIT](https://opensource.org/licenses/MIT).
