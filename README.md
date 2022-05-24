 PORTFOLIO

~Tentang Aplikasi
Aplikasi POS atau point of sales adalah aplikasi yang digunakan untuk mengelola transaksi pada sebuah toko atau oleh kasir. Aplikasi ini dibuat menggunakan Laravel v9.* dan minimal PHP v8 jadi apabila pada saat proses instalasi atau penggunaan terdapat error atau bug kemungkinan karena versi dari PHP yang tidak support. Aplikasi ini dibangun dengan Framework Laravel,jQuery,Ajax,dan database MySQL

~Instalasi
git clone https://github.com/salak96/POS-Point-Of-Sale-_Portofolio.git

~Setup Aplikasi
Jalankan perintah 
1.composer update atau composer install
2.Copy file .env dari .env.example\
Konfigurasi file .env
DB_CONNECTION=mysqlDB_HOST=127.0.0.1DB_PORT=3306DB_DATABASE=mocakuDB_USERNAME=rootDB_PASSWORD=
3.Generate keyphp artisan key:generate
4.Migrate databasephp artisan migrate
5.Seeder table User, Pengaturan ketik php artisan db:seed
6.Menjalankan aplikasi php artisan serve‍‍‍