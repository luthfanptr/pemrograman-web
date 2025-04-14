# 📝 Catatan PEMWEB Pertemuan 1 | 24 Maret 2025

Setiap pertemuan wajib disertai:

1. Analisa
2. Kode
3. Dokumentasi

## Project 1 Semester

- membuat website portofolio untuk bahan belajar
- membuat website company profile untuk project UAS (tidak harus ada fitur jual beli kecuali disertai di dalam analisisnya)

---

## .env

- project UAS nanti pada **.env** COMPOSE_PROJECT_NAME pakai nama, IMAGE_TAG pakai NIM
- IMAGE_TAG digunakan untuk menentukan versi/tag dari image Docker yang akan dipakai

## docker-compose.yml

- **ports** angka standar gunakan 80:80, bagian kiri sebelum (:) untuk OS dan bagian kanan untuk Docker, ports harus disesuaikan berdasarkan listen di nginx.conf, jika port dicustom misalkan jadi 8000 maka harus diadjust manual untuk ngeceknya
- **volumes** berfungsi sebagai tempat untuk menyimpan project yang nantinya dapat disesuaikan sesuai kebutuhan.
- ./src:/usr/share/nginx/html | ./src: untuk OS dan :/usr/share/nginx/html untuk dockernya, ini disesuaikan dengan konfigurasi di nginx.conf nya.

## nginx.conf

- nginx merupakan web server seperti halnya xampp di windows, dan apache di linux. nginx.conf digunakan untuk mengarahkan source code
- listen 80 ini disesuaikan dengan port docker-compose.yml, untuk location merupakan mapping dari lokasi project kita di local computer