
# Устанавливаем composer 
https://getcomposer.org/

# Устанавливаем Laravel с помощью командной строки
composer global require "laravel/installer"

# Загружаем проект и переходим в его директорию
cd \test

# Устанавливаем пакеты npm 
npm install

# Проводим миграции
php artisan migrate

# Заполняем бд готовыми данными
php artisan db:seed

# Вход в систему
После перехода на страницу авторизации вводим Почту:andrey@gmail.com и Пароль:12345678.
Учетная запись данного пользователя содержит 3 заполненных диалога.
