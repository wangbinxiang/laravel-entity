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
│   ├── System
│   │     ├── Controllers 基础controller 类
│   │     ├── Models 基础 model 类
│   │     ├── Repositories 基础repository 类及接口
│   │     ├── Services 基础 service 类及接口
│   │     └── Transformers 基础转换类
│   └── Modules
│         ├── Member
│         │     ├── Config 配置
│         │     ├── Console 命令
│         │     ├── Database 数据库操作
│         │     │     ├── factories 数据库填充数据
│         │     │     ├── Migrations 数据库迁移操作
│         │     │     └── Seeders 数据库填充操作
│         │     ├── Http
│         │     │     ├── Controllers 控制器
│         │     │     ├── Middleware 中间件
│         │     │     └── Requests  请求
│         │     ├── Models 模型
│         │     ├── Providers 服务提供者
│         │     ├── Repositories 仓库
│         │     ├── Resources 语言包
│         │     ├── Routes 路由
│         │     ├── Services 服务
│         │     ├── Test 单元测试
│         │     │   composer.json
│         │     │   module.json
│         │     └──
│         └──
├── bootstrap
├── config 全局配置
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

