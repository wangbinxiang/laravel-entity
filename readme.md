# 汇众联合后端

## Road map

---

## 文档

## 开发

### 开发环境

### 开发规范

#### 代码结构


```text
laravel
│   readme.md
├── app
│   ├── Console
│   │     └── Kernel.php 计划任务文件
│   ├── Exceptions 异常
│   ├── Http
│   │    ├── Controllers 控制器
│   │    ├── Middleware 中间件
│   │    └── Kernel.php
│   ├── Providers
│   └── Modules
│         └── Member
│               ├── Exceptions 异常
│               ├── Models 模型
│               ├── Http
│               │     ├── Controllers 控制器
│               │     ├── Middleware 中间件
│               │     └── routes.php 路由
│               ├── Provider 服务提供者
│               ├── Resources 模版
│               ├── Policies 授权策略
│               └── Services 服务
├── bootstrap
├── config
├── public
├── routes
├── database
├── resources
├── storage
├── Tests
│   server.php
│   package.json
│   composer.json
└──
```


## 部署

