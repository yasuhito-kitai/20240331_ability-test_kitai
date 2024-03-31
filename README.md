# お問い合わせフォーム

## 環境構築
1.git@github.com:yasuhito-kitai/ability-test_20240331kitai.git

2.docker-compose up -d -build

※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

Laravel環境構築

　1.docker-compose exec php bash

　2.composer install

　3.env.exampleファイルから.envを作成し、環境変数を変更

　4.php artisan key:generate

　5.php artisan migrate

　6.php artisan db

## 使用技術
・PHP 8.3.3

・Laravel 8.83.27

・mysql 8.0.26

## URL
・開発環境：http://localhost/

・phpMyAdmin：http://localhost:8080/# 20240331_ability-test_kitai
