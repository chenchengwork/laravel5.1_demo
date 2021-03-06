## Laravel5.1.11 Demo

标签（空格分隔）： PHP Laravel

### 应用开发和上线规范
一、修改目录权限：

    chmod -R 777 storage
    chmod -R bootstrap/cache


二、版本控制：

* 配置.gitigore

```javascript
    /vendor
    /node_modules
    Homestead.yaml
    Homestead.json
    .env
    .idea
```

三、团队开发时的注意事项：

* 环境的配置
    * 添加新的环境配置，要在.env.example中有记录，方便其他的开发人员将新配置添加到自己的环境配置中

* 应用service文件的存放位置
    * 所有的service文件都要存放在app/Providers目录下

* service的书写要求
   * 按照“缓载提供者”的要求书写，即将 defer 性质设为 true，并定义一个 provides 方法


四、应用上线操作步骤：

* 配置缓存
    * php artisan config:cache

* 路由缓存
    * php artisan route:clear //移除路由缓存文件

    * php artisan route:cache //生成路由缓存文件

    * 注意：
        * 只有当应用只使用了控制器路由，Laravel 的路由缓存才能使用


五、Laravel5部分实现原理说明

* 缓载提供者
    * 第一次请求过来时会检查bootstrap/cache目录中是否存在services.json文件，

六、Laravel中的常用操作

* 添加新的自动注入

```javascript
   "autoload": {
        "classmap": [
            "database"
        ],
        "psr-4": {
            "App\\": "app/",
            "App\\Models\\": "app/Models"
        }
    }
```
修改根目录下的composer.json文件，如上所示，在psr-4下面新添加 "App\\Models\\": "app/Models" ，然后执行composer install 命令，则app/Models目录中的文件就实现了自动加载

七、项目目录结构说明

    +app
        |- Console
        |- Events
        |- Exceptions
        |- Http
        |- Jobs
        |- Listeners
        |- Policies
        |- Providers
    +bootstrap
        |
    +config
        |
    +database
        |
    +public
        |
    +resource
        |
    +storage
        |
    +tests
        |
    +vendor
