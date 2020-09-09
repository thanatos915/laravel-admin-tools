## 脚手架介绍

脚手架集成了众多的 Laravel 出色的库，方便快速搭建一个项目。

- [Dingo API Laravel Api 开发必备工具包](https://github.com/dingo/api).
- [Laravel Swagger API 文档常用](https://github.com/darkaonline/l5-swagger).
- [dcat Admin 比较不错的后台管理模块](http://www.dcatadmin.com).
- [laravel-wechat 微信开发相关工具包](https://github.com/overtrue/laravel-wechat).
- [jwt-auth 用户授权必备jwt token](https://github.com/tymondesigns/jwt-auth).


## 安装使用

1. git clone 或者 下载项目到本地
2. 修改 .env 文件
```shell script
cp .env.example .env
# 生成 token
php artisan key:generate --ansi
php artisan jwt:secret
# 配置数据库
# 安装后台
php artisan admin:install
```

## Docker启动
项目集成了7.4的 docker 可以直接启动
```shell script
# 如果是 mac 需要使用 docker-sync 来改善磁盘
docker-sync start -c docker/docker-sync.yaml

# 如果使用了 docker-sync 需要执行
docker-compose -f docker/docker-compose.yaml -f docker/docker-compose-dev.yaml up

# 没使用 docker-sync 则执行
docker-compose -f docker/docker-compose.yaml up

```

