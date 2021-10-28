# Tugas1 Matakuliah PBO

Membuat aplikasi yang menerapkan konsep OOP sebagai berikut:

```Class
Object
Instansiasi
Method / Function
Enkapsulasi public, private, dan protected
```

## Prasyarat

Pastikan komputer yang dipakai untuk uji coba program ini, sudah terinstall interpreter bahasa pemrograman PHP dan sudah terdaftar menjadi environment variable. Kemudian test dengan mengetikkan perintah php di terminal atau cmd sebagai berikut. 


```bash
iamikhbar@nurinsani-peer:~$ php
```
Jika PHP belum menjadi environment variable, maka ketika perintah di atas dieksekusi / di enter akan muncul pesan error.
## Instalasi
Buka terminal atau cmd, kemudian eksekusi perintah dibawah ini
```
git clone https://github.com/iamikhbar/tugas1-pbo.git
cd tugas1-pbo
```

## Cara Pemakaian
Setelah proses instalasi selesai, selanjutnya program dapat dijalankan lewat terminal atau cmd dengan mengetikkan perintah sebagai berikut.  
```bash
iamikhbar@nurinsani-peer:~/tugas1-pbo$ php index.php

cara penggunaan: 
  php index.php [menu] 

menu: 
  buat  Membuat pola bangun datar
```
```
iamikhbar@nurinsani-peer:~/Downloads/tugas1-pbo$ php index.php buat

cara penggunaan: 
  php index.php buat [bangun datar] [opsional]

bangun datar: 
  persegi               Membuat pola persegi
  persegi panjang       Membuat pola persegi panjang
  segitiga              Membuat pola persegi

opsional: 
  persegi [sisi] [pola]
  persegi panjang [panjang] [lebar] [pola]
  segitiga [sisi] [pola]
```
```
iamikhbar@nurinsani-peer:~/Downloads/tugas1-pbo$ php index.php buat persegi

* * * * 
* * * * 
* * * * 
* * * * 
```
```
iamikhbar@nurinsani-peer:~/Downloads/tugas1-pbo$ php index.php buat persegi 8 x

x x x x x x x x 
x x x x x x x x 
x x x x x x x x 
x x x x x x x x 
x x x x x x x x 
x x x x x x x x 
x x x x x x x x 
x x x x x x x x 
```
