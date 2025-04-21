# 📝 Catatan Pemrograman Web | 14 April 2025

## Filament Fila-Starter
- ketik docker compose up -d
- ketik docker exec -it pemweb bash di terminal 
- Jika terjadi putus koneksi ketika sedang composer create-project --prefer-dist raugadh/fila-starter . , ketikkan rm -rf * lalu rm -rf .* di dalam exec -it kemudian mulai build lagi, karena beberapa dokumen sebelumnya telah sempat di download.
- Pergi ke src, lalu setting .env kemudian ubah konfigurasi seperti:
```.env
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd

```

- chown -R www-data:www-data storage/*
- php artisan storage:link
- php artisan migrate:fresh kemudian error karena db_pemweb tidak diketahui, selanjutnya
- php artisan migrate kemudian yes
- php artisan db:seed dan php artisan db:seed --force pasti error karena tidak ada role super_admin
- php artisan shield:generate --all
- chmod 777 -R storage/* && chmod 777 -R bootstrap/*


- php artisan make:livewire ShowProfile


## Livewire
- **@LivewireStyles** Directive yang memuat file CSS bawaan Livewire, 
Tujuannya supaya komponen Livewire dapat muncul dengan gaya yang benar (transisi, efek, dsb). Biasanya diletakkan di sebelum penutup **head** bagian atas file layout (ex: resources/views/layouts/app.blade.php).

- **@LivewireScripts** Directive yang memuat file JavaScript Livewire. Biasanya diletakkan di sebelum penutup **body** di layout.

- **{{ $slot }}** Tempat dimana isi dari komponen atau layout akan ditampilkan. Jika menggunakan (template), {{ $slot }} akan digantikan oleh isi halaman child page.


- pecah layouts dari app.blade.php menjadi per bagian kecil untuk mempermudah ngoding