# Fob.DiAuraFilterModuleDemo

Aura.Filter カスタムルールを使うサンプルアプリケーション

## Requirement

- PHP 7.1 later

## Usage

-  [Hello リソース](https://github.com/kumamidori/Fob.DiAuraFilterModuleDemo/blob/master/src/Resource/App/Hello.php)のクエリーパラメータ `name` に対する入力チェックでカスタムルールを使う

- カスタムルール定義は [こちら](https://github.com/kumamidori/Fob.DiAuraFilterModuleDemo/blob/master/etc/config/modules/app/di_aura_filter.yaml)

-  name `kuma_nana` はサービスバリデーションに成功する：  
`php ./bin/app.php get 'app://self/hello?name=kuma_nana'`

- name `invalid` はサービスバリデーションでエラーになる：
`php ./bin/app.php get 'app://self/hello?name=invalid`


## Links

Aura.Filter カスタムバリデータクラスでDIが使えるようにするモジュール

[kumamidori/DiAuraFilterModule](https://github.com/kumamidori/DiAuraFilterModule)
