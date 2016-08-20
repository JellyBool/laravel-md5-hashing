### 为啥写这个 Package
在 [Laravist](https://laravist.com) 上接触很多的从其他地方转到 Laravel 的开发者,他们由于一些诸如旧项目遗留或者习惯的问题,
需要在 Laravel 的项目中使用 MD5 加密的方式,而不是使用 Laravel 本身的的 `password_hash()`

### 用法

```
omposer require jellybool/laravel-md5-hashing
```

或者在你的 `composer.json` 的 require 部分中添加:
```
 "jellybool/laravel-md5-hashing": "1.0.*"
```

下载完毕之后,直接配置 `app/config.php` 的 `providers`:
```
//Illuminate\Hashing\HashServiceProvider::class,
JellyBool\Hashing\HashServiceProvider::class,
```
就是替换原来的 Hash,对于 Facades ,也是一样的:
```
//'Hash' => Illuminate\Support\Facades\Hash::class,
'Hash' => JellyBool\Hashing\Facades\Hash::class,
```
这样就大功告成了。在 Laravel 5.1 , 5.2 , 5.3 三个大版本测试通过,有任何问题可以直接提 issue 或 pr。
