# How to use git to develop with members

## 1. リポジトリをコピーする（最初だけ）
`git clone https://github.com/EbinaKai/KaiminKikaku`

## 2. 変更を取得する
`git pull origin main`

## 3. 変更履歴を保存する
`git add *`

## 4. コメントを書き込む
`git commit -m "[status] message here!!"`

---

### コメントの書き方
テンプレート -> `[status] messag here!!`

| [status] | mean |
| --- | --- |
| [add] | 新規ファイルの追加 |
| [update] | 既存ファイルを変更 |
| [remove] | ファイルの削除 |
| [fix] | バグの修正 |

---

## 5. 変更をアップロードする
`git push origin main`
