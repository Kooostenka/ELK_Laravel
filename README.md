docker-compose up -d
php artisan migrate --seed
php artisan search:reindex

http://127.0.0.1:8000/search
http://localhost:5601/
