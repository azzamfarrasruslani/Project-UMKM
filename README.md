![alt text](Images/Cover.png?raw=true)

## BAB I Pendahuluan


## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website profil Ayam Geprek Keysia”. Dokumen ini dibangun untuk membuat website profil yang informatif, menarik dan mudah digunakan. Membantu pelanggan dalam mengakses informasi seputar Ayam Geprek Keysia. Menyediakan fitur utama yang mendukung promosi produk, seperti menu, informasi perusahaan, lokasi, kontak dan testimoni dari pelanggan. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak “WEBSITE PROFIL AYAM GEPREK KEYSIA”.


## 1.2 Lingkup
Website Profil Ayam Geprek Keysia adalah sistem informasi berbasis web yang dibangun untuk mempermudah pelanggan dalam mengakses informasi tentang menu, profil perusahaan, lokasi, kontak, dan testimoni pelanggan. Website ini dirancang untuk mendukung promosi produk Ayam Geprek Keysia dengan tampilan yang informatif, menarik, dan mudah digunakan.

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
Bab selanjutnya yaitu menjelaskan sistem yang di terapkan pada aplikasi. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada aplikasi yang dibuat.


## BAB II GAMBARAN UMUM
Ilmu parenting merupakan ilmu yang sangat dibutuhkan para orang tua agar dapat melaksanakan tugas sebagai orang tua dengan baik dan benar, pada zaman era globalisasi perkembangan teknologi begitu sangat pesat, salah satunya ialah perkembangan teknologi di bidang software engineering dimana software engineering dapat digunakan dalam kehidupan sehari - hari .dalam studi kasus project ini kami menganalisis kebutuhan suatu Dinas Perlindungan Anak di Pekanbaru, kasus yang kami peroleh yaitu pembuatan informasi dan edukasi seputar parenting yang bisa diakses dimana saja dan kapan saja oleh para orang tua. Maka dari itu kami merancang Sebuah sistem informasi parenting, platform atau aplikasi yang dirancang untuk membantu orangtua dalam mengelola, mendidik, dan merawat anak-anak mereka. Sistem yang kami buat menyediakan  fitur dan fungsionalitas untuk membantu orangtua dalam mengatasi tugas-tugas sehari-hari yang terkait dengan mengasuh anak-anak mereka. Berikut akan kami jelaskan sistem software kami, pengunjung fungsi utama yaitu:

- View artikel parenting
- View dokumentasi kegiatan
- View tentang BP3AM
- View Contact BP3AM
- View Team BP3AM

Berikut ini fungsi admin yaitu:
- Login
- Input artikel parenting
- Input dokumentasi kegiatan
- Input data tentang BP3AM
- Input data contact BP3AM
- Input data team BP3AM
- Update data
- Delete data
- Edit data

## 2.1 Perspektif produk
Sistem Informasi Parenting adalah sebuah sistem informasi yang diaplikasikan pada website. Terdapat 2 jenis aktor yaitu admin dan pengunjung. Pengolahan data dilakukan oleh admin pada website dan pengunjung hanya melihat informasi pada website.

**2.1.1 Antarmuka Sistem**
![alt text](revisi/revisi1.jpg?raw=true)

Sistem Informasi Parenting memiliki 2 pengunjung yaitu admin dan pengunjung. Admin mempunyai fungsi mengelola data informasi dan Pengunjung bisa melihat informasi serta memberikan komentar.

**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
|  |  |
|--|--|
| ![alt text](revisi/loginAdmin.png?raw=true) halaman login admin diminta untuk mengisi username dan password.| ![alt text](revisi/Dashboard.png?raw=true) Setelah login admin akan masuk ke tampilan Dashboard admin.
|  |  |
| ![alt text](revisi/DataKegiatan.png?raw=true) Pada halaman admin akan terdapat halaman unutk mengelola data kegiatan, namun tidak hanya dat kegiatan tapi admin juga dapat mengelola data artikel, data kontak, data about dan data team dengan tamnpilan yang sama di halaman yang berbeda.| ![alt text](revisi/TambahDataKegiatan.png?raw=true) Pada halaman mengelola data kegiatan, admin juga dapat menambahkan data kegiatan, begitu juga dengan pengelolaan data di tabel lainnya.
|  |  |
| ![alt text](revisi/DataKegiatan.png?raw=true) Pada halaman mengelola data kegiatan juga terdapat aksi untuk mengedit data kegiatan.|![alt text](revisi/DataKegiatan.png?raw=true) Pada halaman mengelola data kegiatan, selain menambahkan dan mengedit, admin juga dapat menghapus data kegiatan yang mana ketika button hapus di klik akan muncul pop up untuk memastikan admin benar-benar ingin menghapus atau tidak.


**Halaman User**
|  |  |
|--|--|
| ![alt text](revisi/dashboardUser.png) Pada halaman pengunjung terdapat beranda yang berisi tampilan scrolling yang berisi seluruh konten seperti tampilan home, kegiatan, artikel about ,team dan contact.|![alt text](revisi/Kegiatan.png?raw=true) Pada halaman pengunjung terdapat halaman kegiatan yang berisi judul, gambar, tanggal dan deskripsi kegiatan.
|  |  |
| ![alt text](revisi/detailKegiatan.png?raw=true) Pada halaman pengunjung terdapat halaman lanjutan Kegiatan, jika pengunjung telah mengklik satu kegiatan yang akan dilihat, maka pada halaman ini akan tampil deskripsi dari kegiatan tersebut.|![alt text](revisi/artikel.png?raw=true) Pada halaman pengunjung terdapat halaman artikel yang berisi cover dan deskripsi singkat mengenai artikel.
|  |  |
| ![alt text](revisi/Detailartikel.png?raw=true) Pada halaman pengunjung terdapat halaman lanjutan Artikel jika pengunjung telah mengklik satu judul yang akan dibaca, maka pada halaman ini akan tampil deskripsi dari artikel tersebut, pada halaman ini pengunjung dapat meninggalkan komentar.|![alt text](revisi/tentang.png?raw=true) Pada halaman pengunjung terdapat halaman about yang berisi informasi website seputar pengelola.
|  |  |
| ![alt text](revisi/kontak.png?raw=true) Pada halaman pengunjung terdapat halaman about yang berisi informasi website seputar Alamat dan Contact Person.|![alt text](revisi/team.png?raw=true) Pada halaman pengunjung terdapat halaman team yang berisi team dari dinas pemberdayaan perempuan dan Perlindungan anak masyarakat kota pekanbaru.


**2.1.3 Antarmuka perangkat keras**
![alt text](Image/perangkatKeras.png?raw=true)
Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Parenting antara lain :

PC / Laptop Untuk menjalankan Aplikasi ini.

**2.1.4 Antarmuka perangkat lunak**

tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Informasi Parenting antara lain :

- PC

- wifi/Jaringan

**2.1.6 Batasan Memori**

tidak ada

**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
|   Login  | Digunakan untuk mengakses aplikasi    |
|    Input Data    |    Digunakan untuk memasukkan data-data    |
| Kembali |  Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data|
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Simpan      |     Digunakan untuk menyimpan data   |

**2.1.1 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
![alt text](Image/2.2.png?raw=true)
**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Image/adminLogin.png?raw=true)

Deskripsi Singkat 
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login. 

Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.

Xref: Bagian 3.2.1, Login Admin

**2.2.2 Admin Input Artikel Parenting**

Use Case: Input Artikel Parenting

Diagram:

![alt text](Image/2.2.2.png?raw=true)

Deskripsi Singkat
Admin menginputkan kategori parenting lalu menambahkan judul dan deskripsi sesuain kategori.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan input artikel.
2. Admin Dapat melihat,menambahkan, dan mengupload artikel.
3. Sistem akan menyimpan ke database.
4. Jika sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.2, Input data Artikel Parenting

**2.2.3 Admin Input Dokumentasi kegiatan**

Use Case: Input Dokumentasi kegiatan

Diagram:
![alt text](Image/2.2.3.png?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman input dokumentasi kegiatan dan Admin menginputkan dokumentasi kegiatan.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan publikasi kegiatan.
2. Admin dapat melihat,menambahkan, dan mengupload kegiatan.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.3, Input data Dokumentasi kegiatan

**2.2.4 Admin Input data tentang B3AM**

Use Case: Input data tentang B3AM

Diagram:![alt text](revisi/revisi2.jpg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman Input data tentang B3AM dan Admin mengInput data tentang B3AM.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data tentang B3AM.
2. Admin dapat melihat,menambahkan, dan mengupload data tentang B3AM.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.3,data tentang B3AM

**2.2.5 Admin Input data contact B3AM**

Use Case: Input data contact B3AM

Diagram:![alt text](revisi/revisi4.jpg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman Input data contact B3AM dan Admin mengInput data contact B3AM.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data contact B3AM.
2. Admin dapat melihat,menambahkan, dan mengupload data contact B3AM.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.3,data contact B3AM

**2.2.6 Admin Input data team B3AM**

Use Case: Input data team B3AM

Diagram:![alt text](revisi/revisi3.jpg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman Input data team B3AM dan Admin mengInput data team B3AM.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data team B3AM.
2. Admin dapat melihat,menambahkan, dan mengupload data team B3AM.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.3,data team B3AM


**2.2.7 pengunjung Mengunjungi website**

Use Case: Mengunjungi website

Diagram:
![alt text](Image/pengunjungMengunjungiWeb.png?raw=true)

Deskripsi Singkat 
pengunjung mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi parenting yang telah tersedia, pengunjung juga dapat memberikan komentar pada konten parenting yang tersedia 

Deskripsi Langkah-Langkah
1. Sistem akan menampilkan halaman-halaman konten.
2. pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia 
3. pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.

Xref: Bagian 3.2.7, Login pengunjung

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
Salah satu cara mengakses website ini yaitu dengan registrasi, setelah registrasi akan login dengan memasukkan username dan password, kemudian sistem akan validasi login. setelah login berhasil pengunjung dapat melihat konten yang ada di website tersebut.

## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi         | Login                                  |
| ------------------- | -------------------------------------- |
| Xref                | Bagian 2.2.1 Login               |
| Trigger             | Admin Membuka Website Sistem Informasi Parenting |
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|        |         2. Sistem melakukan validasi login. |
|        | 3. Bila sukses, sistem akan mengarahkan ke home admin.  |
|        | 4. Bila gagal, sistem akan menampilkan peringatan. |
|     Alternative       |                   Tidak Ada                   |
| Post Condition     |                  admin dapat login dan mengakses webiste sistem informasi parenting                   |
|         Exception Push          |                  Username dan password salah                   |

**3.2.2 Admin Input Informasi Artikel Parenting**
| Nama Fungsi | Input Informasi Parenting |
| ------ | ------ |
| Xref       | Bagian 3.2.2, Input data artikel parenting       |
| Triger       | Membuka website sistem informasi parenting        |
| Precondition | Menginput data artikel parenting |
| Basic Path | 1. Sistem akan menampilkan tampilan input artikel. |
|            | 2. Admin dapat melihat,menambahkan, dan mengupload kegiatan. |
|            | 3. Sistem akan menyimpan ke database. |
|            | 4. Jika sudah disimpan sistem akan menampilkan peringatan. |
| Alternative | Tidak ada |     
| Post Condition | Admin mengelola artikel
| Exception Push | Tidak ada koneksi |


**3.2.3 Input Dokumentasi Kegiatan**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.3 Admin Input Dokumentasi Kegiatan                     |
| Trigger            | admin dapat menginputkan data Dokumentasi Kegiatan |
| Precondition       | Admin menginputkan Data dokumentasi Kegiatan ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan publikasi kegiatan. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload kegiatan.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.4 Input data tentang BP3AM**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang BP3AM                     |
| Trigger            | admin dapat menginputkan data tentang BP3AM |
| Precondition       | Admin menginputkan data tentang BP3AM ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang BP3AM. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.5 Input data contact BP3AM**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.5 Admin Input data contact BP3AM                     |
| Trigger            | admin dapat menginputkan data contact BP3AM |
| Precondition       | Admin menginputkan data contact BP3AM ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data contact BP3AM. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data contact BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Input data team BP3AM**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Admin Input data team BP3AM                     |
| Trigger            | admin dapat menginputkan data team BP3AM |
| Precondition       | Admin menginputkan data team BP3AM ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data team BP3AM. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data team BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Mengunjungi website**

| Nama Fungsi        |    pengunjung  Mengunjungi website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Pengunjung Mengunjungi website             |
| Trigger            |pengunjung Dapat mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi parenting yang telah tersedia |
| Precondition       |pengunjung Mengunjungi website |
| Basic Path         | 1. Sistem akan menampilkan halaman-halaman konten. |
|                    |  2.pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia    |
|                    | 3.pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.    |
| Alternative        |   Halaman Konten    |
| Post Condition     |   pengunjung mengunjungi website dan melihat informasi yang ada pada website     |
| Exception Push     |    Jika ada kesalahan server atau gangguan teknis, sistem akan menampilkan pesan kesalahan kepada pengguna. Pengguna dapat mencoba kembali atau menghubungi dukungan teknis.    |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Image/3.3.png?raw=true)
**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem informasi parenting terdapat struktur Database yang dijelaskan menggunakan ERD.

**Tabel Admin**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id_Admin|int|Auto-increment dari Id_Admin|
|username|varchar|Berisi username admin untuk mengakses sistem|
|Password|varchar|Berisi password admin untuk mengakses sistem|
|level|varchar|untuk membedakan level saat login antara admin dan pengunjung|

**Tabel Artikel**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_Artikel|int|Auto-increment dari Id_artikel|
|gambar|varchar|Berisi gambar didalam artikel sistem|
|deskripsi|text|Berisi deskripsi artikel sistem|
|judul|varchar|Berisi judul pada artikel sistem|
|kategori|varchar|Berisi kategori pada artikel sistem|

**Tabel Kegiatan**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_kegiatan|int|Auto-increment dari Id_kegiatan|
|gambar|varchar|Berisi gambar didalam kegiatan sistem|
|deskripsi|text|Berisi deskripsi kegiatan sistem|
|judul|varchar|Berisi judul pada kegiatan sistem|
|tanggal|varchar|Berisi tanggal pada kegiatan sistem|

**Tabel about**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_about|int|Auto-increment dari id_about|
|gambar|varchar|Berisi gambar didalam about sistem|
|deskripsi|text|Berisi deskripsi about sistem|

**Tabel contact**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_contact|int|Auto-increment dari id_contact|
|judul|varchar|Berisi judul pada contact sistem|
|isi|text|Berisi isi contact sistem|

**Tabel team**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_team|int|Auto-increment dari Id_team|
|gambar|varchar|Berisi gambar didalam team sistem|
|nama|text|Berisi nama team sistem|
|jabatan|varchar|Berisi jabatan pada team sistem|



## Pembagian tugas
BAB 1 ->Nindy

BAB 2 
2.1
  
  2.1.1 -> Nindy
  
  2.1.2 -> Nindy
  
  2.1.3 -> Ariyan
  
  2.1.4 -> Ariyan
 
  2.1.5 -> Ariyan
  
  2.1.6 -> Raditya
  
  2.1.7 -> Raditya
  
  2.1.8 -> Raditya

2.2 semua poin-poin (nindy)

BAB 3 

3.1 nindy

3.2 nindy

3.3 Nindy

