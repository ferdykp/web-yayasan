# Portal Yayasan Harapan Mulia

Satu aplikasi Laravel 12, Blade, Tailwind, Alpine.js, Filament 5 dan Livewire 4. Frontend publik mengikuti desain yang sudah diperbaiki pemilik proyek. **Jangan menjalankan ulang `scripts/translate-design.py`, `scripts/build-domain.py`, atau `scripts/build-admin.py` pada proyek ini**: skrip tersebut hanya artefak bootstrap dan dapat menimpa pekerjaan terbaru.

## Menjalankan proyek

```sh
composer install
npm ci
cp .env.example .env # hanya jika .env belum ada
php artisan key:generate # hanya untuk instalasi baru
php artisan migrate
php artisan db:seed # opsional: konten demo, bukan konten resmi
php artisan storage:link
npm run build
php artisan portal:admin
php artisan serve
```

Frontend di `/`, CMS di `/admin`. `portal:admin` meminta nama, email, role, sekolah jika relevan, serta password tersembunyi dan konfirmasinya. Tidak ada password admin default. Perintah bawaan `make:filament-user` tidak mengatur role portal; gunakan `portal:admin`.

## Hak akses CMS

| Role | Lingkup |
| --- | --- |
| `super_admin` | Seluruh konten dan inbox |
| `foundation_admin` | Yayasan, halaman global, konten milik yayasan, inbox yayasan, pelanggan buletin |
| `school_admin` | Profil/halaman dan konten sekolah yang ditugaskan, inbox sekolah sendiri |
| `viewer` | Tidak dapat masuk CMS |

Fasilitas, program dan ekstrakurikuler dapat digunakan beberapa sekolah melalui relasi. Konten bersama lintas sekolah dikelola super admin atau admin yayasan (untuk konten global); admin sekolah tidak dapat mengubah konten bersama yang juga memengaruhi sekolah lain. Pemilik konten dan relasi sekolah diperiksa di server, bukan sekadar disembunyikan pada menu.

Profil yayasan, unit sekolah dan halaman desain merupakan record tetap: dapat diedit, tidak dibuat/dihapus melalui CMS. Katalog berita, prestasi, program, fasilitas, ekstrakurikuler, galeri, PPDB dan statistik mendukung pengelolaan record. Status `draft` dan `archived`, serta publikasi bertanggal masa depan, tidak tampil dalam endpoint publik katalog, detail, pencarian dan sitemap.

**Konten halaman:** teks dan gambar yang dipanggil frontend melalui `$page->text()` / `$page->media()` diedit melalui **Halaman & Banner**. Form data terstruktur sekolah/berita/PPDB mengelola bagian yang memang memakai entitas tersebut. Tidak semua salinan teks pada desain otomatis disinkronkan dari entitas; jangan menganggap mengedit satu entitas mengubah semua teks promosi halaman. Ini mempertahankan frontend publik yang dikunci pemilik.

Foto referensi eksternal dipertahankan ketika menyimpan form. Galeri memakai field `data.photos`, sesuai pembacaan frontend yang ada. Upload JPEG/PNG/WebP maksimal 5 MB; brosur PDF maksimal 10 MB. File upload memakai nama acak dan menolak substitusi path file lain.

## Pesan, kunjungan, dan buletin

Pesan/form kunjungan disimpan di database dengan validasi, consent, honeypot, CSRF dan pembatasan permintaan. Tim admin menandai pesan **Baru → Sedang ditangani → Selesai** pada menu **Pesan & Kunjungan**. Data pesan asli tidak dapat diedit melalui form tindak lanjut.

Atur `INQUIRY_EMAIL` dan konfigurasi SMTP di `.env`, kemudian jalankan:

```sh
php artisan queue:work --tries=3
```

Tanpa `INQUIRY_EMAIL`, pesan tetap tersimpan di inbox, tetapi email tidak dikirim. Dengan `MAIL_MAILER=log`, email hanya dicatat lokal. Pengiriman buletin massal belum diimplementasikan; daftar pelanggan menyimpan persetujuan, menghindari duplikasi email, dan dapat menghapus langganan melalui CMS.

## Operasional

- Produksi: `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://...`, `SESSION_SECURE_COOKIE=true`; document root harus `public/` dan HTTPS ditangani web server.
- Jangan mengganti `APP_KEY` pada instalasi yang sudah berjalan.
- Gunakan supervisor untuk queue worker, lalu `php artisan queue:restart` setiap deployment.
- `php artisan portal:backup` membuat snapshot SQLite konsisten dengan izin file privat. Salin backup database dan `storage/app/public` ke penyimpanan terpisah; uji restore. Untuk MySQL/PostgreSQL gunakan backup native penyedia database.
- Untuk restore SQLite: maintenance mode, hentikan worker, amankan database aktif, pulihkan snapshot serta media, kemudian mulai ulang worker. Jangan menguji restore pada database produksi.
- GA dan Search Console menggunakan `GA_MEASUREMENT_ID` dan `GOOGLE_SITE_VERIFICATION`; nilai kosong menonaktifkannya.
- Konten seed adalah contoh desain. Verifikasi kontak, biaya, tahun ajaran, foto, NPSN, legalitas dan klaim sebelum publikasi.

## Verifikasi

```sh
php artisan test
php artisan view:cache
```

Tes menggunakan SQLite in-memory, tidak menghapus database kerja. Cakupan: route publik/CMS, akses antar sekolah, publikasi terjadwal, filter fasilitas bersama, edit CMS tanpa kehilangan metadata/foto, validasi/queue/throttle pesan, pelanggan buletin, dan akses inbox. Tes HTTP tidak menggantikan pengujian browser visual atau pengukuran Lighthouse.

Analisis awal PRD dan desain: `docs/analysis.md`.
