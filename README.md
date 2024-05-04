# FashionablyLate

このアプリケーションは、'会員登録->ログイン->管理ページ->お問い合わせフォームの作成->確認'　ができるツールです。

## 環境構築
1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. docker-compose up -d --build
3. docker-compose exec php bash(PHPコンテナ内にログイン)
4. composer install (composer.jsonに記載されたパッケージのリストをインストール)
5. cp .env.example .env(環境変数を変更)
6. php artisan key:generate
7. php artisan migrate
8. php artisan db:seed

## 使用技術(実行環境)
- PHP 8.3.4
- Laravel Framework 8.83.27
- mysql 15.1 

## ER図
/Users/kawanosora/coachtech/laravel/test-laravel/index.drawio.png

## URL
- phpMyAdmin: http://localhost:8080/
- 開発環境： http://localhost/
