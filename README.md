Cara pakai
keluarkan isi file yang ada di configoliviahosting

taro di folder utama ProjectDockerOLivia

lalu melakukan :

composer install

docker-compose build

docker-compose up -d

docker-compose exec app php artisan key:generate

docker-compose exec app php artisan cache:clear

docker-compose exec app php artisan config:clear

docker-compose exec app php artisan migrate

masukan perintah itu satu satu
