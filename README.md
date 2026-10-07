# HB Cakes

Laravel 12 single-page bakery website. It uses Blade, CSS, and vanilla JavaScript; there is no database or frontend build step.

## Requirements

- PHP 8.2 or later with `ctype`, `fileinfo`, `mbstring`, `openssl`, `pdo`, `tokenizer`, and `xml`
- Composer 2

## Local setup

```sh
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Production

Point the web server document root to the project's `public` directory. Configure production environment values, including `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL`, and a generated `APP_KEY`. Ensure `storage` and `bootstrap/cache` are writable by the PHP process. Start through the hosting provider's normal PHP/FastCGI integration; Laravel serves the page through `public/index.php`.
