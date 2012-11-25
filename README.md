## gitの練習を兼ねて
モジュールをはcomposerで管理し、.gitignoreに/vendor/を記載してgitで管理しないように。  
initApplication.shを(rootがいい。。)叩けば以下が処理される。

- composerでモジュールを解決
- sqlite3のdbファイルを生成
- その他準備

### 参考

http://qpleple.github.com/silex-bootstrap