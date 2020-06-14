# 云端留言板

极其简单的留言板，不需要太多网页技能。

[项目地址](https://github.com/BackMountainDevil/Cloud-message-board-PHP)

[展示地址](https://blog.csdn.net/weixin_43031092/article/details/106753262)

# 简介

## 依赖技术

PHP：Pdo操作数据库

SQL：数据库基本操作

 HTML：表单验证、超链接标签

## 目标

任何人可以注册登录，登录之后可以留言和查看留言，未登录状态下也支持查看留言

## 待完善地方

1.  注册（login.php）存在一处问题，导致后面留言无法显示user_id，只需在注册后将user_id存入session即可，参考signin.php

# 更上一层楼

1.  密码采用MD5加密存储，但是很容易逆向破解，不知道怎么破？？？
2.  数据库账号密码就这么放在配置文件中没问题吗？？？？
3.  账号注销功能
4.  留言删除功能
5.  留言分页功能（比如一页显示50条留言）
6.  CSS美化

# 文件解释

kblog.sql	数据库建库建表文件

database.php	数据库配置文件，需要自行设置

index.php	首页，不需要登录就能查看留言