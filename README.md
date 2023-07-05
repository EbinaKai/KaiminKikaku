# KaiminKikaku Web site

仙台高等専門学校広瀬キャンパスの4年の授業「融合型PBL」で作成した作品です。

| PATH | DESCRIPTION |
| --- | --- |
| `/index.php`  | TOPページ |
| `/quality.php` | 睡眠の質の向上について |
| `/risk.php`  | 睡眠の危険性について |
| `/study.php`  | 睡眠と勉強の関係 |
| `/community.php`   | 睡眠関係についてのコミュニティ案内 |
| `/implementation.php`  | 企業向けページ |
| `/quiz.php`  | 睡眠に関するクイズ |

## Dockerによる仮想環境の作成

1. [DockerDesktopの公式サイト](https://www.docker.com/products/docker-desktop/)から使用しているOSに合ったバージョンをダウンロード
2. インストーラーを使ってアプリをインストールする。
3. インストールの成功を確認  
  ```docker --version```
4. `./IntegratedPBL_G8` にいることを確認する  
5. コンテナをcomposeする  
  ```docker-compose up -d```
6. [Webサーバー](http://localhost:8080)にアクセスする。
