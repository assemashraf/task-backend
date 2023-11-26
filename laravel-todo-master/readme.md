# laravel-todo

learning [laravelphp](http://laravel.com) by creating a todo app with basic functionality:

![screenshot](https://raw.githubusercontent.com/armno/laravel-todo/master/screenshot.png)

- list all to-do items, grouped by `completed` status
- add new to-do items
- mark an item as `completed`
- delete an item

### requirements

- composer
- php 5.4+
- php-mcrypt
- mysql

for osx, they can be easily installed via [brew](http://brew.sh)

```sh
$ brew install composer php54 php54-mcrypt mysql
```

### development

1. clone this repo
2. `$ composer install` in project's root directory
3. create new database and update local database configurations in `app/config/database.php`
4. update database schema `$ php artisan migrate`
5. `$ php artisan serve`
6. open `http://localhost:8000`
