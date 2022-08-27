### Sprint 2

### Instalasi

Langkah Pertama adalah cloneing repository ini, atau bisa juga dengan di download.

Lalu melakukan instalasi dependensi package laravel dengan memakai composer. Karena project ini memakai laravel versi 9, sehingga membutuhkan php versi 8.

Step 1
```
composer install
```

(Anda harus menyesuaikan konfigurasi pada file environment (.env)), lebih tepatnya yaitu pada nama *host, port, user, password, dan nama database*.

Kemudian melakukan migrasi/migrare untuk membentuk tabel DB (Database) dan melakukan seeding untuk menambahkan fake data dalam authentikasi

Step 2
```
php artisan migrate
```

Step 3
```
php artisan db:seed
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

Untuk cara menggunakannya, dapat menggunakan postman untuk mengakses endpoint yang telah dibuat. Dalam menggunakannya, akses terhadap seluruh endpoint perlu authentikasi. Cara untuk Authentikasi adalah dengan menyisipkan beberapa parameter pada header yaitu:

```
key -> value
username = irfan
password = 123
```

Untuk melakukan pencarian provinsi dapat mengakses *endpoint* berikut:

```
http://localhost:8000/search/provinces?id={id}
```

Untuk melakukan pencarian kota dapat mengakses *endpoint* berikut:

```
http://localhost:8000/search/cities?id={id}
```

### Swapable Implementation

Untuk Swapable implementation jika ingin mengambil data dari database, caranya adalah melakukan konfigurasi environtment (.env) yang dapat ditentukan dengan:

```
SOURCE_DATA = db
```

Lalu Jika ingin mengambil data dari direct API RajaOngkir, maka caranya adalah melakukan konfigurasi environtment (.env) yang dapat ditentukan dengan:

```
SOURCE_DATA = api
```

### Unit Testing

Untuk melakukan Unit testing dapat dilakukan dengan mengetik perintah di bawah ini di Terminal/CMD:

```
php artisan test
```
