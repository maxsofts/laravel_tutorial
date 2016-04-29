# laravel_tutorial
Đây là phần tập làm web với laravel của Định và Thanh


#Cách cài đặt

Đầu tiên cần clone dữ liệu từ server về máy

- Sử dụng git command
- nhớ thao tác trong đúng thư mục cần load
-Với xamp : X:/xamp/htdocs
- với wamp : X:/wamp/www

sử dụng lệnh

````
git clone git@github.com:maxsofts/laravel_tutorial.git
````
--
sau khi clone cần di chuyển đến thư mục ``laravel`` nằm trong thư mục gốc

--
tạo file .env nằm trong thư mục laravel
với nội dung
````
APP_ENV=local
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
````
sau đó dùng lệnh command để build key mới cho app
````
php artisan key:generate
````

Sau khi build key xong để laravel hoạt động cần có thư viện packages - dùng lệnh sau để tạo thư viện
````
composer update
````
sau khi thành công sẽ có thêm thư mục vendor nẳm trong thư mục laravel chứa code

