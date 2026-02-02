# SISTEM INFORMASI MANAJEMEN PERPUSTAKAAN BERBASIS WEB

## A. Pendahuluan

Perkembangan teknologi informasi telah mendorong pemanfaatan sistem informasi berbasis web dalam berbagai bidang, termasuk dalam pengelolaan perpustakaan. Pengelolaan perpustakaan secara manual berpotensi menimbulkan berbagai permasalahan, seperti keterlambatan pencatatan, kesalahan data, serta kesulitan dalam penyusunan laporan.

Oleh karena itu, dikembangkan **Sistem Informasi Manajemen Perpustakaan Berbasis Web** yang bertujuan untuk membantu proses pengelolaan data perpustakaan secara terkomputerisasi, terstruktur, dan terintegrasi. Sistem ini dikembangkan sebagai bagian dari **tugas akademik (UAS)** pada mata kuliah yang berkaitan dengan Rekayasa Perangkat Lunak dan Pemrograman Web.

## B. Tujuan Pengembangan Sistem

Tujuan dari pengembangan sistem informasi ini adalah sebagai berikut:

1. Mengotomatisasi proses pengelolaan data perpustakaan.
2. Meningkatkan efisiensi dan efektivitas dalam pengolahan data.
3. Meminimalkan kesalahan pencatatan data anggota, buku, dan transaksi.
4. Mempermudah pembuatan laporan perpustakaan.
5. Mengimplementasikan konsep sistem informasi berbasis web secara nyata.

## C. Ruang Lingkup Sistem

Ruang lingkup dari Sistem Informasi Manajemen Perpustakaan ini meliputi:

* Pengelolaan data anggota perpustakaan.
* Pengelolaan data buku.
* Pengelolaan transaksi peminjaman dan pengembalian buku.
* Penyajian dashboard informasi.
* Pengelolaan laporan perpustakaan.
* Pengaturan akun dan profil pengguna.

## D. Fitur Sistem

Fitur-fitur utama yang tersedia dalam sistem ini antara lain:

* Autentikasi pengguna (Login dan Logout).
* Manajemen data anggota.
* Manajemen data buku.
* Transaksi peminjaman dan pengembalian buku.
* Dashboard untuk menampilkan ringkasan data.
* Pembuatan dan pengelolaan laporan.
* Pengaturan sistem dan profil pengguna.

## E. Struktur Direktori Aplikasi

Struktur direktori pada proyek ini disusun secara modular untuk memudahkan pengembangan dan pemeliharaan sistem. Adapun struktur direktori utama adalah sebagai berikut:

```
UASRPLAFLAH/
│
├── anggota/        # Modul pengelolaan data anggota
├── buku/           # Modul pengelolaan data buku
├── config/         # Konfigurasi aplikasi dan koneksi database
├── dashboard/      # Halaman dashboard utama
├── image/          # Penyimpanan aset gambar
├── laporan/        # Modul pembuatan laporan
├── pengaturan/     # Modul pengaturan sistem
├── profil/         # Modul pengelolaan profil pengguna
├── transaksi/      # Modul transaksi peminjaman dan pengembalian buku
│
├── index.php       # Halaman utama aplikasi
├── login.php       # Halaman login pengguna
├── logout.php      # Proses logout pengguna
├── logo.png        # Logo aplikasi
├── README.md       # Dokumentasi proyek
```

## F. Teknologi yang Digunakan

Dalam pengembangan sistem ini digunakan beberapa teknologi sebagai berikut:

* **Bahasa Pemrograman** : PHP
* **Basis Data** : MySQL
* **Web Server** : Apache (XAMPP)
* **Sistem Operasi** : Windows
* **Peramban Web** : Google Chrome / Mozilla Firefox

## G. Cara Menjalankan Aplikasi

Langkah-langkah untuk menjalankan aplikasi ini adalah sebagai berikut:

1. Pastikan aplikasi XAMPP telah terinstal pada komputer.
2. Jalankan layanan Apache dan MySQL melalui XAMPP Control Panel.
3. Unduh atau clone repository proyek ini.
4. Letakkan folder proyek ke dalam direktori `htdocs`.
5. Buat database MySQL dan sesuaikan konfigurasi koneksi pada folder `config/`.
6. Akses aplikasi melalui browser dengan alamat:

   ```
   http://localhost/UASRPLAFLAH/
   ```
7. Login menggunakan akun yang tersedia pada database.

## H. Hak Akses Pengguna

Sistem ini menerapkan hak akses pengguna, antara lain:

* **Admin**: Memiliki akses penuh terhadap seluruh fitur dan data sistem.
* **User**: Memiliki akses terbatas sesuai dengan kewenangan yang diberikan.

## I. Penutup

Dengan adanya Sistem Informasi Manajemen Perpustakaan Berbasis Web ini, diharapkan proses pengelolaan perpustakaan dapat berjalan lebih efektif, efisien, dan terstruktur. Sistem ini juga menjadi sarana implementasi teori yang diperoleh selama perkuliahan ke dalam bentuk aplikasi nyata.

## J. Informasi Pengembang

* **Nama Pengembang** : Abcdeflahhh
* **Jenis Proyek** : Tugas Ujian Akhir Semester (UAS)
* **Bidang** : Sistem Informasi / Pemrograman Web

---

Dokumentasi ini disusun sebagai bagian dari laporan tugas dan panduan penggunaan sistem.

## Link Hosting :

https://perpustakaan-uas.000webhostapp.com

