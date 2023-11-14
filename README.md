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


flow git:
ae clone về checkout vào main 
nhớ git pull
tạo branch mới từ main và code
branch mới với cú pháp  [dev-"tên người code"-"nội dung của chức nắng đó"]
sau khi code xong thì tạo pr và merge vào nhánh dev
tiếp theo thì hú ae vào merge vào main xong
