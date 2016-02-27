## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Laravel5部分实现原理说明
1.缓载提供者
第一次请求过来时会检查bootstrap/cache目录中是否存在services.json文件，

### 应用开发和上线规范
一、修改目录权限：
    chmod -R 777 storage
    chmod -R bootstrap/cache

二、版本控制：
    1.配置.gitigore
        /vendor
        /node_modules
        Homestead.yaml
        Homestead.json
        .env
        .idea

三、团队开发时的注意事项：
    1.环境的配置
        添加新的环境配置，要在.env.example中有记录，方便其他的开发人员将新配置添加到自己的环境配置中

    2.应用service文件的存放位置
        所有的service文件都要存放在app/Providers目录下

    3.service的书写要求
        按照“缓载提供者”的要求书写，即将 defer 性质设为 true，并定义一个 provides 方法


四、应用上线操作步骤：
    1.配置缓存
        php artisan config:cache

    2.路由缓存
        php artisan route:clear //移除路由缓存文件

        php artisan route:cache //生成路由缓存文件

        注意：
            只有当应用只使用了控制器路由，Laravel 的路由缓存才能使用



