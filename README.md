``Welcome to Test task web``
-

#Run project


docker-compose up --build

composer install

npm install


# execute mysql commands
````shell
docker exec -it test_task_mysql mysql -uroot -proot
CREATE USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;
````


Run `npm run watch` to build assets for local development.

Run migrations and seed DB
```shell
docker-compose exec app php artisan migrate --seed
```

Execute artisan commands
```shell
docker-compose exec app php artisan {command}
```

Index page

![](C:/Users/Simas/Desktop/index_page.jpg)

Question page

![](C:/Users/Simas/Desktop/question_page.jpg)

Result summary

