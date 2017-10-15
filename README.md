# Добавление рекордов с OAuth 2: Laravel Passport + Unity. Часть 1.
<p align="center">
  <img src="https://habrastorage.org/webt/59/e3/0f/59e30fac0313f519581891.png" width="70%">
</p>

Готовый пример проекта на Laravel 5.5 из статьи на Хабре.

## Установка
В файле .env пропишите корректный абсолютный путь до существующего файла БД SQLite
```
DB_CONNECTION=sqlite
DB_DATABASE="<полный-путь-до-папки>/database/database.sqlite"
```
Установите отсутствующие зависимости через Composer
```
composer install
```
Сгенерируйте ключ проекта
```
php artisan key:generate
```

## Запуск
```
php artisan serve
```

## Password Grant Token
Для тестового проекта используется следующий предустановленный клиент:
```
Client ID: 3
Client Secret: W82LfjDg4DpN2gWlg8Y7eNIUrxkOcyPpA3BM0g3s
```

## Предупреждение
Для образовательных целей из файла .gitignore удалены строчки, отвечающие за запрет записи через git ключей и файла .env. В случае использования этого проекта как основы их нужно вернуть, добавив в .gitignore строчки
```
/storage/*.key
.env
```
