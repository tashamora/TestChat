

# После загрузки проекта переходим в его директорию
cd \test

# Устанавливаем пакеты npm 
npm install

# Проводим миграции
php artisan migrate


# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=chat_db
DB_USERNAME=root
DB_PASSWORD=

# run the migration files to generate the schema
php artisan migrate

# visit https://pusher.com and create a free app. then copy the keys into your .env file
PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
PUSHER_APP_CLUSTER=your_pusher_cluster

# change the BROADCAST_DRIVER in your .env to pusher
BROADCAST_DRIVER=pusher

# seed your databse with some users and messages
php artisan db:seed

# run webpack and watch for changes
npm run watch
```

## Setup pusher

- Visit [Pusher website](https://pusher.com), sign up and create your first app (it's free).
- Next. copy the new keys to your `.env` file.
- Make sure the necessary settings are enabled
![Pusher app settings](https://user-images.githubusercontent.com/17595033/64108972-fb7b8a00-cd86-11e9-97ab-d2a3f7699b71.png)

Good Luck :)
"# TestChat" 
"# TestChat" 
