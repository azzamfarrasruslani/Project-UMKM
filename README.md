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
| ![alt text](Images/Login.png?raw=true) halaman login admin diminta untuk mengisi username dan password.| ![alt text](revisi/Dashboard.png?raw=true) Setelah login admin akan masuk ke tampilan Dashboard admin.
|  |  |
| ![alt text](revisi/DataKegiatan.png?raw=true) Pada halaman admin akan terdapat halaman unutk mengelola data kegiatan, namun tidak hanya dat kegiatan tapi admin juga dapat mengelola data artikel, data kontak, data about dan data team dengan tamnpilan yang sama di halaman yang berbeda.| ![alt text](revisi/TambahDataKegiatan.png?raw=true) Pada halaman mengelola data kegiatan, admin juga dapat menambahkan data kegiatan, begitu juga dengan pengelolaan data di tabel lainnya.
|  |  |
| ![alt text](revisi/DataKegiatan.png?raw=true) Pada halaman mengelola data kegiatan juga terdapat aksi untuk mengedit data kegiatan.|![alt text](revisi/DataKegiatan.png?raw=true) Pada halaman mengelola data kegiatan, selain menambahkan dan mengedit, admin juga dapat menghapus data kegiatan yang mana ketika button hapus di klik akan muncul pop up untuk memastikan admin benar-benar ingin menghapus atau tidak.


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

**2.2.4 Admin input data menu**

Use Case: Mengelola data menu

Diagram:![alt text](Images/Amenu.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman untuk mengelola data menu, di mana admin dapat menambah, melihat, mengubah, atau menghapus data menu.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan daftar menu yang sudah ada.
2. Admin dapat memilih untuk Menambahkan menu baru, Mengedit informasi menu, Menghapus menu yang tidak diperlukan
3. Admin mengisi atau mengubah data seperti nama menu, deskripsi, kategori, harga, gambar, dan status menu.
4. Sistem akan menyimpan ke database.
5. Sistem memberikan konfirmasi setelah data berhasil disimpan.
Xref: Bagian 3.2.3,data tentang B3AM

**2.2.5 Admin Input data Outlet**

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

Xref: Bagian 3.2.3,data contact B3AM

**2.2.6 Admin Input data Kontak**

Use Case: Input data Kontak

Diagram:![alt text](Images/Akontak.png?raw=true)


Deskripsi Singkat
Sistem memungkinkan admin untuk mengelola data kontak, termasuk menambah, melihat, mengubah, atau menghapus data kontak
Deskripsi Langkah- langkah:
1. Sistem menampilkan daftar data kontak yang tersedia.
2. Admin dapat memilih untuk: Menambahkan data kontak baru, mengedit data kontak yang sudah ada, menghapus data kontak yang tidak relevan.
3. Admin mengisi atau memperbarui informasi seperti media sosial, link, dan nomor telepon.
4. Sistem akan menyimpan ke database.
5. Sistem memberikan konfirmasi setelah data berhasil disimpan atau dimodifikasi.

Xref: Bagian 3.2.3,data team B3AM

**2.2.7 Admin Input data blog**

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

Xref: Bagian 3.2.3,data team B3AM

**2.2.8 Admin Input data karir**

Use Case: Input data karir

Diagram:![alt text](Images/Akarir.png?raw=true)


Deskripsi Singkat
Sistem ini memungkinkan Admin untuk mengelola data karir, termasuk menambah, mengedit, menghapus, atau melihat informasi terkait lowongan pekerjaan.
Deskripsi Langkah- langkah:
1. Sistem menampilkan halaman utama untuk pengelolaan data karir.
2. Admin dapat memilih untuk: menambah data lowongan kerja baru, mengedit informasi lowongan yang sudah ada, menghapus data lowongan tertentu, melihat daftar lowongan kerja yang tersedia.
3. Admin mengisi atau memodifikasi informasi terkait: Nama posisi, Lokasi penempatan, Tipe kerja, Kualifikasi, Deskripsi tugas, Gaji, Benefit.Status lowongan.
4. Sistem akan menyimpan ke database.
5. Setelah berhasil disimpan, sistem memberikan konfirmasi atau peringatan jika ada kesalahan.

Xref: Bagian 3.2.3,data team B3AM

**2.2.9 Admin Input data team B3AM**

Use Case: Input data team B3AM

Diagram:![alt text](Images/Ahero.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman Input data team B3AM dan Admin mengInput data team B3AM.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data team B3AM.
2. Admin dapat melihat,menambahkan, dan mengupload data team B3AM.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.3,data team B3AM

**2.2.10 Admin Input data team B3AM**

Use Case: Input data team B3AM

Diagram:![alt text](Images/ApesanSaran.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman Input data team B3AM dan Admin mengInput data team B3AM.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data team B3AM.
2. Admin dapat melihat,menambahkan, dan mengupload data team B3AM.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan peringatan.

Xref: Bagian 3.2.3,data team B3AM

**2.2.11 pengunjung Mengunjungi website**

Use Case: Mengunjungi website

Diagram:
![alt text](Images/Pengunjung.png?raw=true)

Deskripsi Singkat 
pengunjung mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi parenting yang telah tersedia, pengunjung juga dapat memberikan komentar pada konten parenting yang tersedia 

Deskripsi Langkah-Langkah
1. Sistem akan menampilkan halaman-halaman konten.
2. pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia 
3. pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.

Xref: Bagian 3.2.7, Login pengunjung

**2.2.12 pengunjung Menginputkan Pesan Saran**

Use Case: Mengunjungi website

Diagram:
![alt text](Images/Ppesan.png?raw=true)

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
tidak ada

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
Struktur data logika pada Website Ayam Geprek Keysia mencakup desain database yang dijelaskan menggunakan ERD.

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

