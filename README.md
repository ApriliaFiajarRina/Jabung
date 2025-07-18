# Laravel Jabung

Sebelum menginstall pastikan PHP versi PHP >= 8.2, Composer versi 2.7 dan Git telah terinstall di Komputer nakama. Lakukan penginstallan secara terurut agar aplikasi bisa berjalan tanpa ada masalah.

## Clone project ke komputer anda
Clone project ini dengan mengetikkan perintah berikut di terminal git anda
> git clone https://github.com/TAKBEDILNDASMU/laravel-jabung.git

setelah terinstall pindah ke folder laravel-jabung
> cd laravel-jabung


## Install semua dependencies

Lakukan penginstallan dependencies/library dengan mengetikkan perintah berikut di terminal. (Pastikan path terminal nakama berada di dalam folder laravel-jabung)
> composer install

Proses ini memakan beberapa waktu untuk menginstall semua dependencies 
(kecepatan install berdasarkan keyakinan dan iman nakama masing-masing) 

## Pindahkan file dummy_data 
Agar data gambar dan dokumen bisa dilihat, pindahkan atau copy dulu semua data yang ada di `/public/dummy_data` ke `/storage/app/public`. atau nakama bisa mengetikkan perintah berikut di terminal
> xcopy public\\dummy_data\\* storage\\app\\public /s /e /i

## Copy file .env.example

Copy `.env.example` file ke `.env` pada folder root. bisa menggunakan perintah
> copy .env.example .env

Untuk memastikan apakah username database dan password sama dengan yang ada di komputer. Nakama bisa mengecek di file .env di bagian `DB_USERNAME` dan `DB_PASSWORD` (Pada Kasus di komputer saya password sudah saya rubah jadi `DB_PASSWORD` pasti harus saya rubah.


## Command php artisan

Jalankan command artisan di bawah ini secara terurut
> php artisan key:generate

>php artisan migrate

>php artisan make:filament-user

command artisan di atas untuk pembuatan user admin. lakukan pengisian data sesuai instruksi di terminal

>php artisan db:seed

>php artisan storage:link

>php artisan serve

Sekarang aplikasi web sudah berjalan di komputer nakama masing-masing. Jika ada masalah bisa ditanyakan. Kalau sudah beres tolong cek sampai error web nya.
