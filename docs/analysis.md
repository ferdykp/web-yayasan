# Analisis sebelum implementasi

Sumber: PRD 31 halaman (seluruhnya dibaca), 14 HTML, 14 screenshot (8 berisi pesan gagal fetch, 6 valid), DESIGN.md. Dokumen adalah referensi requirement dan visual; instruksi pengerjaan berasal dari pasted request pengguna.

## Scope dan arsitektur
Satu Laravel, Blade, Tailwind, Alpine; Filament/Livewire untuk admin. Tidak ada React/Next atau SPA terpisah. MVP mencakup profil, tiga sekolah, program, ekstrakurikuler, berita, prestasi, fasilitas bersama, galeri foto/video, PPDB per sekolah, kontak, SEO dan pencarian dasar. PPDB lengkap, pembayaran, portal siswa/orang tua, LMS bukan MVP. Newsletter, FAQ, alumni dan kalender di desain relevan; dipertahankan sebagai konten pendukung, tanpa mengklaim integrasi portal yang belum ada.

## Pemetaan
| PRD | Halaman ZIP | Route | Blade | CMS |
|---|---|---|---|---|
| Homepage/banner/statistik | beranda | / | pages/home | Page, Foundation, School, Statistic |
| Profil/sejarah/visi/pengurus/sambutan | tentang_kami | /tentang, /tentang/{section} | pages/about | Foundation, Page |
| Direktori sekolah | direktori_sekolah | /sekolah | pages/schools | School |
| Profil SD | sd_* | /sekolah/sd | pages/sd | School, Program, Extracurricular |
| Profil SMP | smp_* | /sekolah/smp | pages/smp | School, Program, Extracurricular |
| Profil SMA | sma_* | /sekolah/sma | pages/sma | School, Program, Extracurricular |
| Program/kurikulum | akademik_* | /akademik | pages/academic | Program, School |
| Berita | warta_* | /berita | pages/news | News |
| Detail berita | menumbuhkan_* | /berita/{slug} | pages/article | News |
| Prestasi/filter | rekam_prestasi_* | /prestasi, /prestasi/{slug} | pages/achievements, detail | Achievement |
| Fasilitas multi-sekolah | fasilitas_* | /fasilitas | pages/facilities | Facility, pivot sekolah |
| Galeri/kegiatan | kehidupan_siswa_* | /galeri, /galeri/{slug} | pages/gallery, detail | Gallery |
| PPDB informasi | portal_ppdb_* | /ppdb, /ppdb/{school} | pages/admissions, admission | Admission |
| Kontak/peta | kontak_* | /kontak | pages/contact | Foundation, School, Inquiry |
| Pencarian | belum tersedia | /cari | pages/search | published News/Achievement/Program/School |
| Admin dan roles | belum tersedia | /admin | Filament | seluruh entitas |

## Design inventory
HTML statis dengan Tailwind CDN v3, font Google Newsreader + Manrope, Caveat di beranda; Material Symbols dan SVG inline. Script vanilla prototype bukan arsitektur final. Tidak ada bundel asset asli: foto menggunakan URL Googleusercontent. Sumber dipertahankan di reference; foto demo tidak dianggap foto resmi institusi.

Beranda: forest #174C3C, dark #10382D, deep #0D2D24, lime #C4DC75, cream #FAF9F5, sage #E5EFE7. Halaman lain memakai primary #003527, primary-container #174c3c dan token mint sesuai konfigurasi HTML. Jangan menyamakan kedua palet secara paksa. Token shared + override radius/font sesuai konteks sumber; metadata DESIGN.md tidak menimpa output HTML.
Layout: max-w-7xl pada beranda; max 1320px/padding 48px pada halaman editorial; headline Newsreader 56/64 desktop dan 36/44 mobile, body Manrope 14/22 sampai 18/28. Breakpoint sm/md/lg/xl sesuai utility asli. Radius kartu 24–48px, CTA pill, badge organik, hero asimetris, foto overlap, sticky nav. Komponen: navbar, footer, mobile menu, tombol, kartu berita/prestasi/program/fasilitas/album, filter, CTA, lightbox, formulir, metadata SEO.

## Interaksi dan gap
Navigasi prototype # diganti route/anchor valid; menu mobile, dropdown keyboard, FAQ, timeline, modal dan lightbox via Alpine. Filter katalog dan pencarian server-side agar pagination dan URL bekerja. Form kontak/tur menyimpan inquiry, validasi CSRF/rate-limit/honeypot, job notifikasi antrean; sukses hanya setelah tersimpan. Biaya PPDB memiliki toggle publik; pendaftaran keluar via URL tervalidasi. Detail prestasi/album/program dan PPDB per jenjang dibuat memakai shell editorial asli, bukan visual baru. Semua dynamic copy dan gambar pada halaman sumber masuk data seed CMS, tidak menjadi teks bisnis hardcode di Blade.

## Security/operasional
Super admin seluruh data; admin yayasan konten global; admin sekolah hanya data sekolahnya (policy + query scope + validasi relasi server). Draft/published/archived dan tanggal publikasi diterapkan pada daftar/detail/search/sitemap. Upload image dibatasi tipe dan ukuran. Cache invalidation saat perubahan CMS, database queue, sitemap/canonical/OG/structured data. Analytics memakai konfigurasi opsional; tidak ada ID layanan atau alamat penerima yang diasumsikan nyata. Target Lighthouse perlu pengukuran, bukan klaim.

## Data awal
Konten ZIP adalah demo. Tahun ajaran tetap mengikuti data contoh desain, editable, bukan hardcode; tahun PRD merupakan contoh. Kontak/NPSN/legalitas yang tidak tersedia tidak direkayasa. Akun admin dibuat melalui perintah interaktif, tanpa password default dalam repo. Deployment, domain, email provider, analytics ID dan konten resmi harus dikonfigurasi pemilik.
