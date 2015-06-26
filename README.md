# JogjaHomeStay
Aplikasi berbasis web menggunakan GoogleMap API untuk menampilkan letak kos atau homestay

Terdiri dari 2 jenis user, user Host dan user student
Host adalah pemilik kost/homestay
Student adalah mahasiswa yang mencari kos

user host dapat melakukan registrasi dan kemudian melakukan login akan diredirect ke halaman profil menggunakan session()
kemudian host dapat memasukkan lokasi kos miliknya menggunakan googleMap API

user student dapat melakukan registrasi dan kemudian melakukan login akan diredirect ke halaman profil menggunakan session()
kemudian student dapat mencari lokasi kos menggunakan googleMap API

Data user host dan student dimasukkan dalam database pada tabel user_host dan user_stud
Data lokasi yang dimsukkan oleh host dimsukkan dalam database pada tabel markers yang kemudian akan ditampilkan pada halaman search homestay
