## 脆弱性サンプル

とりあえずXSS, SQL Injection, CSRF（もどき）を実装。

## 想定環境

想定環境はMacです。動作には下記が必要です（Macは最初から入ってます）。

* PHP
* SQLite3（SQL Injectionで使用）

## 備考

* CSRFは別オリジンで行うべきですが、今回はSameオリジンです。