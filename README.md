### Sprint 1

### Instalasi

Langkah Pertama adalah cloneing repository ini, atau bisa juga dengan di download.

Lalu melakukan instalasi dependensi package laravel dengan memakai composer. Karena project ini memakai laravel versi 9, sehingga membutuhkan php versi 8.

Step 1
```
composer install
```

(Anda harus menyesuaikan konfigurasi pada file environment (.env)), lebih tepatnya yaitu pada nama *host, port, user, password, dan nama database*.

Kemudian melakukan migrasi/migrare untuk membentuk tabel DB (Database)

Step 2
```
php artisan migrate
```

### Fetching Data

Untuk menjalankan fetching data dari RajaOngkir, dapat menjalankan perintah artisan, yaitu:

```
php artisan fetch:RajaOngkir
```

### Membuka/Menjalankan Aplikasi

Untuk menjalankan project pada local dev server dapat memasukkan perintah berikut pada terminal:

```
php artisan serve
```

### How To Use/Cara Menggunakan
Karena pada sprint 1 mengambil data dari database dan tidak menggunakan authentikasi, maka pencarian provinsi dan kota dapat dilakukan dengan cara di bawah ini

Untuk melakukan pencarian provinsi dapat mengakses *endpoint* berikut:

```
http://localhost:8000/search/provinces?id={id}
```

Untuk melakukan pencarian kota dapat mengakses *endpoint* berikut:

```
http://localhost:8000/search/cities?id={id}
```
