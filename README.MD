## ПРИВЕТСТВУЮ!

Это небольшая инструкция по развертыванию приложения

### ШАГ №1

Клонируем репозиторий

` git clone https://github.com/Gonreg/phalcon4-google-sheets.git `

### ШАГ №2

Переименовываем `.env.example` в `.env` и заполняем необходимыми данными, в комментариях указано, что должно быть в
каждом поле

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


#### Используемый стек

* `PHP 7.4`
* `Phalcon 4`
* `Nginx`
* `MySql`