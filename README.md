chạy dự án

composer install

copy file env.example đổi tên thành .env cấu hình DB vào

php artisan generate:key

php artisan migrate

php artisan storage:link

php artisan config:cache

php artisan cache:clear

để có db user admin thì chạy
php artisan seed:db

php arrisan serve

code thì mỗi lần tạo repository cho model thì nhớ add vào class RepositoryServiceProvider
