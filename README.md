# 🚀 Skrip Upload File PHP dengan Proteksi Refresh 🛡️

Oleh: [rackiet](https://github.com/rackiet) 👨‍💻

## 📝 Deskripsi

Skrip PHP ini memungkinkan pengguna untuk mengunggah file ke server dengan tambahan fitur keamanan unik! 🔒 Sebelum pengguna dapat mengakses halaman upload, mereka harus me-refresh halaman sebanyak 5 kali atau lebih. Ini menambahkan lapisan proteksi sederhana namun efektif terhadap akses yang tidak diinginkan.

## 🌟 Fitur Utama

- 📤 Upload file ke server
- 🔄 Proteksi dengan sistem hitung refresh
- 🚫 Halaman "404 Not Found" untuk akses yang belum memenuhi syarat
- 🖼️ Mendukung semua jenis file
- 🕒 Penambahan timestamp otomatis untuk file dengan nama yang sama

## 🛠️ Cara Menggunakan

1. 📥 Unduh file `upload.php` ke direktori web server Anda.
2. 🌐 Buka file tersebut melalui browser (misal: `http://localhost/upload.php`).
3. 🔄 Refresh halaman sebanyak 5 kali. Anda akan melihat pesan "404 Not Found" selama 4 refresh pertama.
4. 🎉 Pada refresh ke-5 atau selanjutnya, Anda akan melihat form upload file.
5. 📂 Pilih file yang ingin Anda upload dan klik tombol "Upload".
6. ✅ File akan terunggah ke folder yang sama dengan skrip ini.

## ⚠️ Catatan Penting

- 📁 Pastikan folder tempat skrip ini berada memiliki izin tulis (writeable).
- 🔐 Metode proteksi ini hanya sebagai contoh dan tidak sepenuhnya aman. Untuk penggunaan serius, pertimbangkan metode autentikasi yang lebih kuat.
- 📊 Skrip ini tidak memiliki batasan ukuran atau tipe file. Tambahkan validasi sesuai kebutuhan Anda.
- 🏠 Untuk keamanan lebih baik, pertimbangkan untuk memindahkan direktori upload ke luar root publik web server.

## 🔧 Kustomisasi

Anda dapat mengubah jumlah refresh yang dibutuhkan dengan mengedit baris berikut dalam skrip:

```php
if ($_SESSION['refresh_count'] < 5) {
```

Ganti angka 5 dengan jumlah yang Anda inginkan.

## 🤝 Kontribusi

Saran dan kontribusi selalu diterima! Jangan ragu untuk membuat issue atau pull request di repositori ini.

## 📜 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

---

Dibuat dengan ❤️ oleh [rackiet](https://github.com/rackiet)

Selamat mencoba dan semoga bermanfaat! 😊👍
