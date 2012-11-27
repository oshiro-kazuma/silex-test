## Gitの練習を兼ねて

### ライブラリはどう管理する？
ライブラリはcomposerで管理し、.gitignoreに/vendor/を記載してgitで管理しないように。  

### 初期準備
ライブラリをバージョン管理に加えない代わりに、実行環境では初回時にライブラリを取得しに行って依存性を解決するように。
initApplication.shを(rootがいい。。)叩けば以下が処理され実行できる環境が用意される。

- composerでモジュールを解決
- sqlite3のdbファイルを生成
- その他準備

何作るかは…決めて…ない！

### wiki書いていこうと思います
https://github.com/ariteku/silex-test/wiki

### demo
http://www.takuan.me/silex-test/web/

### 参考
http://qpleple.github.com/silex-bootstrap
