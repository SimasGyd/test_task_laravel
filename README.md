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

![index_page](https://user-images.githubusercontent.com/75373218/177052661-2bb9ad4d-1b12-400e-b249-a6edbfff50c7.jpg)

Question page

![question_page](https://user-images.githubusercontent.com/75373218/177052672-d1383805-6f43-4864-ac80-02ca089a2300.jpg)


Result summary

![result_summary_page](https://user-images.githubusercontent.com/75373218/177052680-ee047956-e43f-4722-a709-1a91314d2b05.jpg)

