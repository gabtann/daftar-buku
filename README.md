# Perpustakaan Mini

Aplikasi web sederhana untuk mengelola data buku (CRUD), dibuat untuk tugas
mata kuliah Pemrograman Web, Teknik Informatika, Universitas Hasanuddin.

## Fitur
- Menambah, melihat, mengubah, dan menghapus data buku
- Pencarian berdasarkan judul atau penulis
- Validasi form dan pembagian halaman (5 buku per halaman)

## Teknologi
Laravel 13, Blade, Tailwind CSS 4, Vite

## Cara Menjalankan
1. `composer install`
2. `copy .env.example .env`
3. `php artisan key:generate`
4. `php artisan migrate:fresh --seed`
5. `npm install`
6. `npm run dev` (terminal pertama)
7. `php artisan serve` (terminal kedua)
8. Buka http://127.0.0.1:8000

## Penulis
Gabriel Tan (D121241071)

## Lisensi
Dibangun di atas framework [Laravel](https://laravel.com), yang berlisensi MIT.
