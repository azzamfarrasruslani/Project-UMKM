![alt text](Images/Cover.png?raw=true)

## BAB I Pendahuluan


## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website profil Ayam Geprek Keysia”. Dokumen ini dibangun untuk membuat website profil yang informatif, menarik dan mudah digunakan. Membantu pelanggan dalam mengakses informasi seputar Ayam Geprek Keysia. Menyediakan fitur utama yang mendukung promosi produk, seperti menu, informasi perusahaan, outlets, kontak dan testimoni dari pelanggan. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak “WEBSITE PROFIL AYAM GEPREK KEYSIA”.


## 1.2 Lingkup
Website Profil Ayam Geprek Keysia adalah sistem informasi berbasis web yang dibangun untuk mempermudah pelanggan dalam mengakses informasi tentang menu, profil perusahaan, outlets, kontak, dan testimoni pelanggan. Website ini dirancang untuk mendukung promosi produk Ayam Geprek Keysia dengan tampilan yang informatif, menarik, dan mudah digunakan.

## 1.3 Akronim, singkatan, definisi
| Istilah | Definisi |
| ------ | ------ |
|   SRS     |    Software Requirement Specification    |
|   Software Requirement Specification     | Dokumen yang mendefinisikan perangkat lunak yang akan dibangun dan menjadi penghubung antara pengembang dan pengguna      |
|    Login    | Proses untuk masuk dan mengakses website       |
|    Use Case    | Deskripsi situasi saat sistem digunakan untuk memenuhi kebutuhan tertentu       |


## 1.4 Referensi
Referensi yang digunakan dalam pembuatan website ini adalah:
1. https://ayamgepreksai.com/menu-kami/
2. https://www.kfckorea.com/ 



## 1.5 Overview
Bab selanjutnya menjelaskan sistem yang diterapkan pada website. Penjelasan mencakup gambaran umum dari website, antarmuka sistem, dan alur kerja sistem. Bab terakhir menjelaskan secara teknis setiap fungsi utama yang digunakan dalam pengembangan website. Bab 2 dan 3 secara khusus berisi deskripsi detail tentang fitur dan implementasi yang akan diterapkan pada Website Ayam Geprek Keysia.


## BAB II GAMBARAN UMUM
UMKM adalah singkatan dari Usaha Mikro, Kecil, dan Menengah yang memiliki peran penting dalam perekonomian di Indonesia. Salah satu tantangan utama yang dihadapi UMKM adalah meningkatkan daya saing dan menjangkau pasar yang lebih luas agar usaha mereka dapat dikenal oleh masyarakat secara luas. Ayam Geprek Keysia, sebagai salah satu UMKM yang bergerak di bidang kuliner, memerlukan media promosi serta informasi yang efektif dan efisien untuk meningkatkan daya tarik usahanya di era digital. Website profil perusahaan merupakan salah satu solusi yang dapat memberikan informasi tentang produk dan layanan secara komprehensif. Oleh karena itu, pembuatan website ini diharapkan dapat membantu Ayam Geprek Keysia agar lebih dikenal oleh masyarakat secara luas. Berikut akan kami jelaskan sistem website kami, termasuk fitur dan fungsi utamanya:
- View tentang kami
- View menu
- View promo
- View outlets
- View kontak
- View blog
- View karir
- View testimoni
- View hero section
- Input pesan saran

Berikut ini fungsi admin yaitu:
- Login
- Input tentang kami
- Input menu
- Input promo
- Input outlets
- Input kontak
- Input blog
- Input karir
- Input testimoni
- Input hero section
- View pesan saran
- Update data
- Delete data
- Edit data

## 2.1 Perspektif produk
Website Ayam Geprek Keysia adalah sebuah sistem informasi yang diaplikasikan pada platform web. Terdapat dua jenis aktor, yaitu admin dan pengunjung. Admin bertanggung jawab untuk mengelola data, seperti menu dan informasi promosi, sedangkan pengunjung hanya dapat melihat informasi yang disediakan di website.

**2.1.1 Antarmuka Sistem**


![alt text](Images/antarmuka.png?raw=true)


Website Ayam Geprek Keysia memiliki 2 jenis pengguna, yaitu admin dan pengunjung. Admin memiliki fungsi untuk mengelola data, seperti menu dan informasi promosi, sementara pengunjung dapat melihat informasi yang tersedia dan memberikan komentar pada bagian yang disediakan.

**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
|  |  |
|--|--|
| ![alt text](Images/Login.png?raw=true) Halaman login admin diminta untuk mengisi username dan password.| ![alt text](Images/dashboard.jpg?raw=true) Setelah login admin akan masuk ke tampilan Dashboard admin.
|  |  |
| ![alt text](Images/menuA.jpg?raw=true) Terdapat halaman menu yang berisikan gambar dan detailnya.|![alt text](Images/promoA.jpg?raw=true) Ada juga halaman promo yang bisa di modifikasi oleh admin.
|  |  |
| ![alt text](Images/tentangA.jpg?raw=true) Ada halaman tentang kami yang bisa menginputkan sejarah, gambar, visi dan misi.|![alt text](Images/hero.jpg?raw=true) Di halaman ini berisi gambar yang nantinya berada di tampilan awal home.
|--|--|
| ![alt text](Images/outletA.jpg?raw=true) Halaman yang berisi detail informasi dari setiap cabang.| ![alt text](Images/blogA.jpg?raw=true) Terdapat juga blog atau berita agar admin bisa menambahkan gambar dan informasi berita.
|--|--|
| ![alt text](Images/karirA.jpg?raw=true) Halaman karir atau job sebagai tempat untuk memberikan informasi jika ada lowongan pekerjaan.| ![alt text](Images/kontak.jpg?raw=true) Ada kontak yang bisa di tambah agar pengunjung bisa menghubungi pihak admin.

**Halaman User**
|  |  |
|--|--|
| ![alt text](Images/home.jpg?raw=true)  Pada halaman pengunjung terdapat beranda yang berisi tampilan scrolling yang berisi seluruh konten seperti tampilan home, hero section, promo, outlets, testimoni, pesan saran dan kontak.|![alt text](Images/menu.jpg?raw=true) Pada halaman pengunjung terdapat halaman menu yang berisi gambar, deskripsi dan harganya.
|  |  |
| ![alt text](Images/tentangkami.jpg?raw=true) Pada halaman pengunjung terdapat halaman tentang kami, yang berisi gambar, sejarah singkat serta visi dan misi.|![alt text](Images/blog.jpg?raw=true) Pada halaman pengunjung terdapat halaman blog atau berita yang berisi gambar serta deskripsi.
|  |  |
| ![alt text](Images/outlets.jpg?raw=true) Pada halaman pengunjung terdapat halaman outlets atau cabang yang berisi lokasi dari cabang yang dimiliki umkm ayam geprek keysia.|![alt text](Images/karir.jpg?raw=true) Pada halaman pengunjung terdapat halaman karir atau job yang berisi informasi mengenai lowongan pekerjaan.
|  |  |


**2.1.3 Antarmuka perangkat keras**

![alt text](Images/Antarmuka_perangkat_keras.png?raw=true)

Antarmuka perangkat keras yang digunakan untuk mengoperasikan Website Ayam Geprek Keysia antara lain:

PC / Laptop Untuk menjalankan website ini.

**2.1.4 Antarmuka perangkat lunak**

tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Website Ayam Geprek Keysia antara lain:

- PC

- wifi/Jaringan

**2.1.6 Batasan Memori**

tidak ada

**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
|   Login  | Digunakan untuk mengakses aplikasi    |
|    Input Data    |    Digunakan untuk memasukkan data-data    |
| Logout |  Digunakan untuk keluar dari aplikasi |
| Hapus | Digunakan untuk menghapus data|
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Simpan      |     Digunakan untuk menyimpan data   |

**2.1.1 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
![alt text](Images/UseCase.png?raw=true)
**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Images/Alogin.png?raw=true)

Deskripsi Singkat 
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login. 

Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.

Xref: Bagian 3.2.1, Login Admin

**2.2.2 Admin Input Tentang kami**

Use Case: Mengelola Halaman Tentang Kami

Diagram:

![alt text](Images/Aabout.png?raw=true)

Deskripsi Singkat
Admin mengelola informasi pada halaman "Tentang Kami" termasuk menambahkan, mengedit, atau menghapus data seperti judul, deskripsi singkat, visi, misi, dan gambar.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan input halaman "Tentang Kami."
2. Admin dapat menambahkan, mengedit, atau menghapus data seperti judul, deskripsi singkat, visi, misi, dan gambar.
3. Sistem akan menyimpan data yang dimasukkan ke dalam database.
4. Jika data berhasil disimpan, sistem akan menampilkan pesan konfirmasi.

Xref: Bagian 3.2.2, Input data Artikel Parenting

**2.2.3 Admin Input Data Promo**

Use Case: Admin dapat mengelola promo.

Diagram:
![alt text](Images/Apromo.png?raw=true)

Deskripsi Singkat
Sistem memungkinkan admin untuk menginput data promo, termasuk informasi-informasi utama seperti judul, deskripsi, syarat dan ketentuan, tanggal mulai dan berakhir, gambar promo, serta status promo.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan publikasi kegiatan.
2.Admin dapat menambahkan, mengedit, atau menghapus data promo termasuk :Judul promo
Deskripsi promo, Syarat dan ketentuan, Tanggal mulai, Tanggal berakhir, Gambar promo, Status promo
3. Sistem akan menyimpan data yang diinput ke dalam database.
4. Jika data berhasil disimpan, sistem akan menampilkan pesan konfirmasi.

Xref: Bagian 3.2.3, Input data Dokumentasi kegiatan

**2.2.4 Admin input Data Menu**

Use Case: Mengelola Data Menu

Diagram:![alt text](Images/Amenu.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman untuk mengelola data menu, di mana admin dapat menambah, melihat, mengubah, atau menghapus data menu.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan daftar menu yang sudah ada.
2. Admin dapat memilih untuk Menambahkan menu baru, Mengedit informasi menu, Menghapus menu yang tidak diperlukan
3. Admin mengisi atau mengubah data seperti nama menu, deskripsi, kategori, harga, gambar, dan status menu.
4. Sistem akan menyimpan ke database.
5. Sistem memberikan konfirmasi setelah data berhasil disimpan.
   
Xref: Bagian 3.2.4, Input Data Menu

**2.2.5 Admin Input Data Outlet**

Use Case: Mengelola Data Outlet

Diagram:![alt text](Images/Aoutlet.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman untuk mengelola data outlet. Admin dapat menambah, melihat, mengubah, atau menghapus informasi tentang outlet
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data contact B3AM.
2. Admin dapat memilih untuk Menambahkan outlet baru,Mengedit informasi outlet, Menghapus data outlet yang sudah tidak relevan.
3. Admin mengisi atau memperbarui data seperti nama outlet, alamat, jumlah karyawan, tanggal berdiri, status outlet, iframe map, link pesan online, dan gambar pesan online.
4. Sistem akan menyimpan ke database.
5. Sistem memberikan konfirmasi setelah data berhasil disimpan atau dimodifikasi.

Xref: Bagian 3.2.5, Input Data Outlet

**2.2.6 Admin Input Data Kontak**

Use Case: Input Data Kontak

Diagram:![alt text](Images/Akontak.png?raw=true)


Deskripsi Singkat
Sistem memungkinkan admin untuk mengelola data kontak, termasuk menambah, melihat, mengubah, atau menghapus data kontak
Deskripsi Langkah- langkah:
1. Sistem menampilkan daftar data kontak yang tersedia.
2. Admin dapat memilih untuk: Menambahkan data kontak baru, mengedit data kontak yang sudah ada, menghapus data kontak yang tidak relevan.
3. Admin mengisi atau memperbarui informasi seperti media sosial, link, dan nomor telepon.
4. Sistem akan menyimpan ke database.
5. Sistem memberikan konfirmasi setelah data berhasil disimpan atau dimodifikasi.

Xref: Bagian 3.2.6, Input Data Kontak

**2.2.7 Admin Input Data Blog**

Use Case: Input data blogteam B3AM

Diagram:![alt text](Images/Ablog.png?raw=true)


Deskripsi Singkat
Sistem ini memungkinkan Admin untuk mengelola data blog dengan fitur menambah, mengubah, menghapus, atau melihat data blog. Data blog meliputi judul, konten, gambar, dan status blog.
Deskripsi Langkah- langkah:
1. Sistem menampilkan halaman utama untuk pengelolaan data blog.
2. Admin dapat memilih untuk: menambah blog baru, mengedit blog yang sudah ada, menghapus blog tertentu, melihat daftar blog yang tersedia.
3. Admin mengisi atau memodifikasi informasi blog, seperti judul, konten, gambar, dan status.
4. Sistem akan menyimpan ke database.
5. Setelah berhasil disimpan, sistem memberikan konfirmasi atau peringatan.

Xref: Bagian 3.2.7, Input Data Blog

**2.2.8 Admin Input Data Karir**

Use Case: Input Data Karir

Diagram:![alt text](Images/Akarir.png?raw=true)


Deskripsi Singkat
Sistem ini memungkinkan Admin untuk mengelola data karir, termasuk menambah, mengedit, menghapus, atau melihat informasi terkait lowongan pekerjaan.
Deskripsi Langkah- langkah:
1. Sistem menampilkan halaman utama untuk pengelolaan data karir.
2. Admin dapat memilih untuk: menambah data lowongan kerja baru, mengedit informasi lowongan yang sudah ada, menghapus data lowongan tertentu, melihat daftar lowongan kerja yang tersedia.
3. Admin mengisi atau memodifikasi informasi terkait: Nama posisi, Lokasi penempatan, Tipe kerja, Kualifikasi, Deskripsi tugas, Gaji, Benefit.Status lowongan.
4. Sistem akan menyimpan ke database.
5. Setelah berhasil disimpan, sistem memberikan konfirmasi atau peringatan jika ada kesalahan.

Xref: Bagian 3.2.8, Input Data Karir

**2.2.9 Admin Input data Hero Section**

Use Case: Input data Hero Section

Diagram:![alt text](Images/Ahero.png?raw=true)


Deskripsi Singkat
Sistem ini memungkinkan Admin untuk mengelola data pada bagian Hero Section dari website. 
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data team B3AM.
2. Admin dapat memilih untuk: menambah data hero baru, mengedit data hero yang sudah ada, menghapus data hero tertentu, melihat daftar data hero yang tersedia.
3. Admin mengisi atau memodifikasi informasi terkait: Nama hero, Gambar hero, Status hero (aktif/nonaktif).
4. Sistem akan menyimpan ke database.
5. Setelah berhasil disimpan, sistem memberikan konfirmasi atau menampilkan peringatan jika ada kesalahan.

Xref: Bagian 3.2.9,  Input data Hero Section

**2.2.10 Admin Input data Pesan Saran**

Use Case: Input data Pesan Saran

Diagram:![alt text](Images/ApesanSaran.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman kelola pesan saran, di mana admin dapat mengelola data pesan saran.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan daftar pesan saran yang ada.
2. Admin dapat menambahkan, mengedit, atau menghapus pesan saran.
3. Sistem akan menyimpan ke database.
4. Setelah data tersimpan, sistem memberikan konfirmasi atau peringatan.

Xref: Bagian 3.2.10, Input data Pesan Saran

**2.2.11 Admin Input data Testimoni**

Use Case: Input data Testimoni

Diagram:![alt text](Images/Atestimoni.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman kelola Testimoni , di mana admin dapat mengelola data Testimoni.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan daftar Testimoni yang ada.
2. Admin dapat menambahkan, mengedit, atau menghapus Testimoni.
3. Sistem akan menyimpan ke database.
4. Setelah data tersimpan, sistem memberikan konfirmasi atau peringatan.

Xref: Bagian 3.2.11, Input data Testimoni

**2.2.12 pengunjung Mengunjungi website**

Use Case: Mengunjungi website

Diagram:
![alt text](Images/Pengunjung.png?raw=true)

Deskripsi Singkat 
pengunjung mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi parenting yang telah tersedia, pengunjung juga dapat memberikan komentar pada konten parenting yang tersedia 

Deskripsi Langkah-Langkah
1. Sistem akan menampilkan halaman-halaman konten.
2. pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia 
3. pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.

Xref: Bagian 3.2.12, pengunjung Mengunjungi website

**2.2.13 pengunjung Menginputkan Pesan Saran**

Use Case: Mengunjungi website

Diagram:
![alt text](Images/Ppesan.png?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman kelola pesan saran, di mana pengunjung dapat mengelola data pesan saran.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan daftar pesan saran yang ada.
2. Pengunjung dapat menambahkan pesan saran.
3. Sistem akan menyimpan ke database.
4. Setelah data tersimpan, sistem memberikan konfirmasi atau peringatan.
Xref: Bagian 3.2.13, inputkan Pesan Saran

## 2.3 Spesifikasi kebutuhan non-fungsional
- tabel kebutuhan non-fungsional

| no | deskripsi |
| ------ | ------ |
|     1   |   Semua interface dan fungsi menggunakan Bahasa Indonesia     |
|     2   |   Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, pengunjung )     |

## 2.4 Karakteristik Pengguna
Karakteristik pengguna dari perangkat lunak ini adalah pengguna langsung berinteraksi dengan sistem dan dihubungkan dengan hak akses atau level autentikasi.

## 2.5 Batasan-batasan
tidak ada

## 2.6 Asumsi-asumsi
tidak ada

## 2.7 Kebutuhan Penyeimbang
tidak ada

## BAB III Requirement Specification


## 3.1 Persyaratan Antarmuka Eksternal
tidak ada

## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi         | Login                                  |
| ------------------- | -------------------------------------- |
| Xref                | Bagian 2.2.1 Login               |
| Trigger             | Admin Membuka Website profil ayam geprek keysia |
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|        |         2. Sistem melakukan validasi login. |
|        | 3. Bila sukses, sistem akan mengarahkan ke home admin.  |
|        | 4. Bila gagal, sistem akan menampilkan peringatan. |
|     Alternative       |                   Tidak Ada                   |
| Post Condition     |                  admin dapat login dan mengakses webiste profil ayam geprek keysia                  |
|         Exception Push          |                  Username dan password salah                   |

**3.2.2 Admin Input Tentang Kami**
| Nama Fungsi | Input Informasi Website |
| ------ | ------ |
| Xref       | Bagian 3.2.2, Input data tentang kami      |
| Triger       | Membuka Website profil ayam geprek keysia        |
| Precondition | Menginput data tentang kami |
| Basic Path | 1. Sistem akan menampilkan tampilan input tentang kami. |
|            | 2. Admin dapat melihat,menambahkan, dan mengupload tentang kami. |
|            | 3. Sistem akan menyimpan ke database. |
|            | 4. Jika sudah disimpan sistem akan menampilkan peringatan. |
| Alternative | Tidak ada |     
| Post Condition | Admin mengelola tentang kami. |
| Exception Push | Tidak ada koneksi |


**3.2.3 Admin Input Promo**

| Nama Fungsi        | Input Informasi Website                             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.3 Admin Input Promo                    |
| Trigger            | admin dapat menginputkan data Promo |
| Precondition       | Admin menginputkan Data Promo ke website |
| Basic Path         | 1. Sistem akan menampilkan promo. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload promo.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.4 Admin input Menu**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data Menu                    |
| Trigger            | admin dapat menginputkan data Menu |
| Precondition       | Admin menginputkan data Menu ke website |
| Basic Path         | 1. Sistem akan menampilkan data Menu. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.5 Admin Input Data Outlet**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.5 Admin Input Data Outlet                     |
| Trigger            | admin dapat menginputkan data outlet |
| Precondition       | Admin menginputkan data outlet ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data outlet. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data outlet.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Admin Input Data Kontak**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Admin Input Data kontak                     |
| Trigger            | admin dapat menginputkan data kontak|
| Precondition       | Admin menginputkan data kontak ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data kontak. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data kontak.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.7 Admin Input Data Blog**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.7 Admin Input Data Blog                     |
| Trigger            | admin dapat menginputkan data blog|
| Precondition       | Admin menginputkan data blog ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data blog. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data blog.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.8 Admin Input Data Karir**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.8 Admin Input Data karir                     |
| Trigger            | admin dapat menginputkan data karir|
| Precondition       | Admin menginputkan data karir ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data karir. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data karir.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.9 Admin Input Data Hero Section**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.9 Admin Input Data Hero Section                     |
| Trigger            | admin dapat menginputkan data Hero Section|
| Precondition       | Admin menginputkan data Hero Section ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data Hero Section. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data Hero Section.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.10 Admin Input Data Pesan Saran**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.10 Admin Input Data Pesan Saran                     |
| Trigger            | admin dapat menginputkan data Pesan Saran|
| Precondition       | Admin menginputkan data Pesan Saran ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data Pesan Saran. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data Pesan Saran.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.11 Admin Input Data Testimoni**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.10 Admin Input Data Testimoni                     |
| Trigger            | admin dapat menginputkan data Testimoni |
| Precondition       | Admin menginputkan data Testimoni ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data Testimoni. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data Testimoni.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.12 Pengnjung Mengunjungi website**

| Nama Fungsi        |    pengunjung  Mengunjungi website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.12 Pengunjung Mengunjungi website             |
| Trigger            |pengunjung Dapat mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi parenting yang telah tersedia |
| Precondition       |pengunjung Mengunjungi website |
| Basic Path         | 1. Sistem akan menampilkan halaman-halaman konten. |
|                    |  2.pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia    |
|                    | 3.pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.    |
| Alternative        |   Halaman Konten    |
| Post Condition     |   pengunjung mengunjungi website dan melihat informasi yang ada pada website     |
| Exception Push     |    Jika ada kesalahan server atau gangguan teknis, sistem akan menampilkan pesan kesalahan kepada pengguna. Pengguna dapat mencoba kembali atau menghubungi dukungan teknis.    |

**3.2.13 Pengunjung Input Data Pesan Saran**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.13 Pengunjung Input Data Pesan Saran                     |
| Trigger            | Pengunjung dapat menginputkan data Pesan Saran|
| Precondition       | Pengunjung menginputkan data Pesan Saran ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data Pesan Saran. |
|                    | 2. Pengunjung dapat melihat,menambahkan, dan mengupload data Pesan Saran   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  pengunjung mengunjungi website dan melihat informasi yang ada pada website      |
| Exception Push     | Tidak Ada        |


## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Images/erd.png?raw=true)
**3.3.1 Logika Struktur Data**
Struktur data logika pada Website Ayam Geprek Keysia mencakup desain database yang dijelaskan menggunakan ERD.

**Tabel Admin**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_admin|int|Auto-increment dari Id_Admin|
|username|varchar|Berisi username admin untuk mengakses sistem|
|password|varchar|Berisi password admin untuk mengakses sistem|

**Tabel Hero**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_hero|int|Auto-increment dari id_hero|
|status|varchar|Berisi status didalam Hero |
|gambar|text|Berisi deskripsi Hero |
|nama|varchar|Berisi judul pada Hero |

**Tabel Tentang_Kami**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_Tentang_Kami|int|Auto-increment dari id_Tentang_Kami|
|judul|varchar|Berisi judul didalam Tentang_Kami |
|sejarah|text|Berisi sejarah Tentang_Kami |
|misi|text|Berisi misi pada Tentang_Kami |
|visi|text|Berisi visi Tentang_Kami |
|gambar|text|Berisi gambar pada Tentang_Kami |

**Tabel Menu**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_menu|int|Auto-increment dari id_menu|
|harga|int|Berisi harga didalam menu |
|gambar|text|Berisi gambar menu |
|status|varchar|Berisi status pada menu |
|deskripsi|text|Berisi deskripsi menu |
|kategori|varchar|Berisi gambar pada menu |

**Tabel Blog**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_blog|int|Auto-increment dari id_blog|
|gambar|text|Berisi gambar blog |
|status|varchar|Berisi status pada blog |
|judul|varchar|Berisi judul blog |
|konten|text|Berisi konten pada blog |

**Tabel Karir**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_karir|int|Auto-increment dari id_karir|
|tipe_kerja|varchar|Berisi tipe_kerja karir |
|deskripsi|text|Berisi deskripsi pada karir |
|kualifikasi|text|Berisi kualifikasi karir |
|lokasi_kerja|varchar|Berisi lokasi_kerja pada karir |
|nama|varchar|Berisi nama pada karir |
|status|varchar|Berisi status pada karir |
|benefit|text|Berisi benefit pada karir |
|gaji|int|Berisi gaji pada karir |

**Tabel Testimoni**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_testimoni|int|Auto-increment dari id_testimoni|
|rating|int|Berisi rating didalam testimoni|
|pesan|text|Berisi pesan testimoni|
|nama|varchar|Berisi nama pada testimoni|
|asal_testimoni|varchar|Berisi asal_testimoni pada testimoni|

**Tabel Outlet**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_outlet|int|Auto-increment dari id_outlet|
|nama|varchar|Berisi nama didalam outlet|
|jumlah_karyawan|int|Berisi jumlah_karyawan outlet|
|map|text|Berisi map pada outlet|
|link|text|Berisi link pada outlet|
|gambar|text|Berisi gambar pada outlet|
|tanggal_berdiri|date|Berisi tanggal_berdiri pada outlet|

**Tabel Kontak**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_kontak|int|Auto-increment dari id_kontak|
|social_media|varchar|Berisi social_media didalam kontak|
|no_hp|int|Berisi no_hp kontak|
|link|text|Berisi link pada kontak|

**Tabel Promo**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_promo|int|Auto-increment dari id_promo|
|deskripsi|text|Berisi deskripsi promo |
|judul|varchar|Berisi judul pada promo |
|syarat|text|Berisi syarat promo |
|status|varchar|Berisi status pada promo |
|tanggal_mulai|date|Berisi tanggal_mulai pada promo |
|tanggal_berakhir|date|Berisi tanggal_berakhir pada promo |
|gambar|text|Berisi gambar pada promo |

**Tabel Pesan_Saran**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_pesan_saran|int|Auto-increment dari id_pesan_saran|
|nama|varchar|Berisi nama didalam pesan_saran|
|email|varchar|Berisi email pesan_saran|
|subjek|varchar|Berisi subjek pada pesan_saran|
|pesan|text|Berisi pesan pada pesan_saran|


## Pembagian tugas di Laporan
BAB 1 -> Sari

BAB 2 

2.1  

  2.1.1 -> Sari  
  
  2.1.2 -> Sari  
  
  2.1.3 -> Azzam 
  
  2.1.4 -> Sari
  
  2.1.5 -> Sari 
  
  2.1.6 -> Sari 
  
  2.1.7 -> Sari 
  
  2.1.8 -> Sari
  
2.2 
semua poin-poin (Dion), gambar umum use case (Sari), gambar use case per poin (Azzam)

BAB 3 

3.1 Sari

3.2 Dion

3.3 Gambar erd (Sari), tabel dan isian(Sari)

## Pembagian tugas di Website
-CRUD HomePage, promo, outlet, tetimoni (Azzam Farras Ruslani)

-CRUD menu, karir , PesanSaran (Dion)

-CRUD About, blog/news, kontak (Tri Wulandari Junita Sari)
