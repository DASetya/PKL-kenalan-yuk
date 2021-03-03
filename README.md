# kenalan-yuk
Project PKL dengan judul kenalan yuk

# step setup project
1. usahakan pakai php 7.4
2. copy .env.example jadi .env
3. jalankan composer install (jgn sampai ada error)
4. jalankan npm install (jgn sampai ada error, warning gpp)
5. jalankan npm run dev
6. buat database di local (XAMPP)
7. setting .env sesuai local masing" (buka file dengan text editor, edit "DB_DATABASE=namaDatabase")
8. jalankan php artisan key:generate
9. jalankan php artisan migrate:fresh --seed
10. akses webnya (http://localhost:8000), selesai

Note : bisa pake perintah php artisan serve kalo pingin pake web servernya laravel sendiri

# akun default
1. Halaman /admin-panel
    username: admin
    password: pastibisa
2. Halaman /login
    email: user@mail.com
    password: pastibisa
