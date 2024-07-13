# Atte

AtteはWeb上で打刻や勤怠データの閲覧ができる勤怠管理システムです

## 作成した目的

人事評価のため

## アプリケーション URL

- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/

## 他のリポジトリ

なし

## 機能一覧

- 会員登録機能
- メール認証機能
- ログイン機能
- ログアウト機能
- 勤務開始機能
- 勤務終了機能
- 休憩開始機能
- 休憩終了機能
- 日付別勤怠情報取得機能
- ユーザー情報取得機能
- ユーザー別勤怠情報取得機能
- ページネーション機能

## 使用技術(実行環境)

- PHP8.3.2
- Laravel8.83.8
- MySQL10.3.39-MariaDB

## テーブル設計
| TH | TH |
| ---- | ---- |
| TD | TD |
| TD | TD |

## ER 図

![alt](erd.png)

## 環境構築

**Docker ビルド**

1. `git clone git@github.com:estra-inc/confirmation-test-contact-form.git`
2. DockerDesktop アプリを立ち上げる
3. `docker-compose up -d --build`

> _Mac の M1・M2 チップの PC の場合、`no matching manifest for linux/arm64/v8 in the manifest list entries`のメッセージが表示されビルドができないことがあります。
> エラーが発生する場合は、docker-compose.yml ファイルの「mysql」内に「platform」の項目を追加で記載してください_

```bash
mysql:
    platform: linux/x86_64(この文追加)
    image: mysql:8.0.26
    environment:
```

**Laravel 環境構築**

1. `docker-compose exec php bash`
2. `composer install`
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.env ファイルを作成
4. .env に以下の環境変数を追加

```text
APP_NAME=Atte

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```
> mailtrapを使用しますので、以下の****部分は、下記サイトを参考に自分のアカウントのコードをコピーして貼り付けてください。
https://fikaweb.jp/dev/mailtrap/

```text
MAIL_MAILER=****
MAIL_HOST=****
MAIL_PORT=****
MAIL_USERNAME=****
MAIL_PASSWORD=****
MAIL_ENCRYPTION=****
MAIL_FROM_ADDRESS=info@example.com
```

5. アプリケーションキーの作成

```bash
php artisan key:generate
```

6. マイグレーションの実行

```bash
php artisan migrate
```

7. シーディングの実行

```bash
php artisan db:seed
```
