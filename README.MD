## ПРИВЕТСТВУЮ!

Это небольшая инструкция по развертыванию приложения

### ШАГ №1

Клонируем репозиторий

` git clone https://github.com/Gonreg/phalcon4-google-sheets.git `

### ШАГ №2

Переименовываем `.env.example` в `.env` и заполняем необходимыми данными
```
AMO_CLIENT_ID=# Айди интеграции
AMO_CLIENT_SECRET=# Секретный ключ интеграции
AMO_CLIENT_GRANT_TYPE=authorization_code
AMO_CLIENT_SECRET_CODE=# Ключ авторизации
AMO_CLIENT_REDIRECT_URI=# REDIRECT URI
AMO_CLIENT_SUBDOMAIN=# Субдомен 

GOOGLE_SHEET_ID=# Айди гугл таблицы
GOOGLE_CLIENT_ID=# Айди гугл аккаунта
GOOGLE_CLIENT_SECRET=# Секретный ключ гугл аккаунта
GOOGLE_CLIENT_CALLBACK_URI=# GOOGLE CALLBACK URI
```

### ШАГ №3

Устанавливаем все необходимые библиотеки

`composer install`


### ШАГ №4

Запускаем миграции

`vendor/bin/phalcon-migrations run
`

##### ПРИЛОЖЕНИЕ

* Конфигурация Nginx:

```
server {
  listen 80;
  listen [::]:80;
  proxy_force_ranges on;
  max_ranges 100;
  root /var/www/lead.com/public/;
  index index.html index.htm index.nginx-debian.html index.php;

        server_name lead.com *.lead.com;
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        }

  location / {
    try_files $uri $uri/ /index.php$is_args$args;
    }
  location ~* \.(eot|ttf|woff|woff2)$ {
    add_header Access-Control-Allow-Origin *;
    }
  }
```

* Приложение развернуто на тестовом сервере     
<a href="https://dev.viovan.world/">GoToDemo</a>

* Ссылка на Гугл Таблицу   
<a href="https://docs.google.com/spreadsheets/d/1hPLuV0t7H9QfPp4N_YJ-A7vfdMvb18-9WFAcDdSTy5Q/edit?hl=ru#gid=0">Sheet</a>

#### Используемый стек

* `PHP 7.4`
* `Phalcon 4`
* `Nginx`
* `MySql`