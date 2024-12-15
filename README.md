![Logo PSG](https://github.com/user-attachments/assets/e3ba25bf-836d-4db2-87e7-fdf312a410cd)


## Deskripsi Aplikasi
PSG adalah situs web interaktif yang memberikan informasi dan berita-berita mengenai klub sepak bola Paris Saint Germain.
Terdapat fitur-fitur yang dapat diakses oleh pengguna yaitu:
- **Berita dan artikel** untuk memberikan informasi-informasi mengenai situasi pertandingan, kemenangan yang diraih, dll.
- **Galeri dan Highlight** berisi foto momen-momen pemain.
- **Klub** merupakan fitur yang digunakan untuk memberikan sekilas informasi mengenai sejarah klub.
- **Bookmark** diunakan untuk pengguna yang terdaftar yang dapat menyimpan sebuah berita yang dapat diakses dilaman akun.
- **Prestasi** berisi mengenai  kemenangan yang diraih oleh PSG pada pertandingan.
- **Jadwal Hasil** berisi mengenai informasi pertandingan yang telah berlalu dan pertandingan yang akan datang.
- **Pemain** berisi mengenai informasi-informasi mengenai pemain tersebut.

Fitur-fitur yang disebutkan didukung oleh fitur sign in dan register akun yang dapat memberikan hak-hak yang berbeda dengan user yang belum log in

##  Teknologi yang Digunakan
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Tools**: Visual Studio Code, Git



##  File Proyek
```
Bombakar/
|── admin panel/        # Pengelolaan laman admin
├── img/                # File berisi foto-foto
├── video/              # File berisi video 
├── view/               # File laman utama
├── README.md           # Dokumentasi proyek
```

---

## Install
1. Clone repository ini menggunakan perintah berikut:
   ```bash
   git clone https://github.com/ArsyWK/Responsi2_PraktikumWeb_kelompok6
   ```
2. Pindahkan folder project ke dalam folder `www` di Laragon.
3. Jalankan Apache dan MySQL melalui Laragon.
4. Import database menggunakan phpMyAdmin atau command line:
   ```bash
   mysql -u root -p < database/prakpemweb.sql
   ```
5. Akses aplikasi melalui browser di `http://localhost/PSG`.
6. Jika tidak berhasil, coba jalankan server lokal:
   ```bash
   cd public
   php -S localhost:3000
   ```

---

##  Kolaborator
1. **Raia Digna Amanada** - H1D023061 
2. **Arsy Wicaksono** - H1D023111 
3. **Alya Sellyjuan Rosalina** - H1D023006 

---

