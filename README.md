# アプリケーション名
* post_application
※（simple-boadとなっているが変更する事）

# DEMO
撮影中

# Features
* laravel学習用にTwitter風のアプリケーションを開発。
* 入力した投稿データをデータベースに保存
* データベースに保存された投稿を一覧表示

# Requirement
* PHP7.2
* Composer 1.10.7
* Laravel 5.8
* SQLite3

## PHPインストール
FW/MWが必要とするphpをインストールします。

* yumのアップデート

sudo yum -y update


* PHPインスール

sudo yum -y install php72 php72-mbstring php72-pdo


* PHPインストール確認

php --version


## composerインストール
PHPのライブラリ依存関係を管理する「Composer」をインストールします。

* composerダウンロード

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"


* composerインストール

sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer


* バージョン確認
バージョン情報が表示されていればインストールは完了です。

composer -V


## Laravelインストール
雛形となるlaravelアプリケーションを構築します。

* composerからlaravelインストール

composer create-project --prefer-dist laravel/laravel post_application "5.8.*"


## mySQL
* MAMPを利用
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

# 起動
* laravelアプリケーションフォルダに移動して起動

php artisan serve


* テーブル更新等があった際は適宜マイグレーションを行う

php artisan migrate

# アプリケーション名
* post_application
※（simple-boadとなっているが変更する事）

# DEMO
撮影中

# Features
* laravel学習用にTwitter風のアプリケーションを開発。
* 入力した投稿データをデータベースに保存
* データベースに保存された投稿を一覧表示

# Requirement
* PHP7.2
* Composer 1.10.7
* Laravel 5.8
* mysql5.7.26 (MAMPを利用)

## PHPインストール
FW/MWが必要とするphpをインストールします。

* yumのアップデート

sudo yum -y update


* PHPインスール

sudo yum -y install php72 php72-mbstring php72-pdo


* PHPインストール確認

php --version


## composerインストール
PHPのライブラリ依存関係を管理する「Composer」をインストールします。

* composerダウンロード

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"


* composerインストール

sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer


* バージョン確認
バージョン情報が表示されていればインストールは完了です。

composer -V


## Laravelインストール
雛形となるlaravelアプリケーションを構築します。

* composerからlaravelインストール

composer create-project --prefer-dist laravel/laravel post_application "5.8.*"


## mySQL
MAMPを利用します。
MAMPは[公式ページ](https://www.mamp.info/en/windows/)からダウンロードします。

* envファイル設定

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret


# 起動
* laravelアプリケーションフォルダに移動して起動

php artisan serve


* テーブル更新等があった際は適宜マイグレーションを行う

php artisan migrate
