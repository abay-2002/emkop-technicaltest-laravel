### Penting!
database tidak meggunakan database bawaan laravel tetapi meggunakan database costum dengan nama emkop_technical_test, DB_DATABASE = emkop_technical_test modifikasi database pada file .env, database menggunakan MySQL.

### Database
Bikin table karyawan pada table database: emkop_technical_test.karyawan (lihat contoh pada screenshot emkop-karyawan-table-schema.JPG) atau import table schema karyawan.sql ke database dengan nama emkop_technical_test

### Client
client menggunakan http://localhost:3000/ (react default port)

### Running
aktifkan server web server local e.g: Apache dan Database local e.g MAMP, WAMP, XAMPP, LAMP
yarn install / npm install
composer update 
php artisan serve
