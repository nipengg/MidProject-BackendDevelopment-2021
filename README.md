
![Mid Project Backend Development 2021](public/logo_binus_resize.png "Mid Project Backend Development 2021")

Mid Project Backend Development 2021

<hr>

## Daftar Isi
1. [Fitur](#fitur)
2. [Instalasi](#instalasi)
    - [Spesifikasi yang Dibutuhkan](#spesifikasi)
    - [Cara Install](#cara-install)

<hr>

## Fitur

Fitur pada Aplikasi ini meliputi:

1. Akun Login
    - Register Akun
    - Login dan Logout User
    - Ganti Password dan Informasi User
2. Course
    - List Course
    - Enroll Course
    - Unenrolled Course

<hr>

## Instalasi

### Spesifikasi
- PHP ^7.2
- Laravel 8.7
- Database MySQL atau MariaDB
- SQlite (untuk `automated testing`)

### Cara Install

1. Clone atau download source code
    - Para terminal, clone repo `git clone https://github.com/nipengg/MidProject-BackendDevelopment-2021.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
    - Jika menggunakan laragon silakan extract pada direktori laragon/www
2. `cd MidProject-BackendDevelopment-2021-master`
3. `composer install`
4. `cp .env.example .env`
    - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
5. Pada terminal `php artisan key:generate`
6. Buat **database pada mysql** untuk aplikasi ini
7. **Setting database** pada file `.env`
8. `php artisan migrate --seed`
9. `php artisan serve`
10. Selesai