# 快速入門

## 1. github 建立新的 repo

* https://github.com/cwchiu/php-composer-lib

## 2. composer init 初始化專案

* 產生 composer.json

![](http://i.imgur.com/NhuNrf2.png)

![](http://i.imgur.com/DvQREtT.png)

## 3. 新增 src\Hello.php

```
<?php
namespace cwchiu\Lib; 

class Hello {
    private $name;

    public function __construct($name = 'World') {
        $this->name = $name;
    }

    public function hello() {
        return 'Hello ' . $this->name;
    }

}
```

## 4. composer.json 自訂 audoload

```
    "autoload":{
        "psr-4" : {
            "cwchiu\\Lib\\" : "src"
        }
    }
```

## 5. composer update, 更新 audoload 機制

目錄結構變為

![](http://i.imgur.com/QNIWVor.png)

## 6. 新增 test.php 測試程式

```
<?php
    
require 'vendor/autoload.php';

use cwchiu\Lib\Hello;

$a = new Hello('Arick');
echo $a->hello();
```

執行結果

![](http://i.imgur.com/KP9Q5kD.png)

## 7. 全部異動提交到 github

## 8. 上標籤

* git tag -am "v0.0.1" 0.0.1
* git push origin 0.0.1

## 9. 提交套件

* https://packagist.org/packages/submit

![](http://i.imgur.com/v8wcCly.png)
    
![](http://i.imgur.com/qzt5kXm.png)

![](http://i.imgur.com/fDZcaSk.png)




# 提交前使用 github 測試套件

## 1. 建立 project 

compsoer init --type=project

## 2. 修改 composer.json

```
    "repositories":[
        {
            "type":"vcs",
            "url":"https://github.com/cwchiu/php-composer-lib"
        }
    ],
    "require": {
        "cwchiu/php-composer-lib":"dev-master"
    }
```

## 3. 安裝相依套件

composer install

## 4. 新增 test.php 測試程式

```
<?php
    
require 'vendor/autoload.php';

use cwchiu\Lib\Hello;

$a = new Hello('Arick');
echo $a->hello();
```

# 使用套件

## 1. 建立 project 

compsoer init --type=project

## 2. 引入套件

composer require cwchiu/php-composer-lib

## 3. 新增 test.php 測試程式

```
<?php
    
require 'vendor/autoload.php';

use cwchiu\Lib\Hello;

$a = new Hello('Arick');
echo $a->hello();
```

# 補充
* 如果無法正常引用套件, 可在 composer.json 加上 "minimum-stability": "dev",
