>  simple notebook web app prower by ThinkPHP 5.1
>
> 个人简单记事本程序，用于框架 ThinkPHP 5.1 的学习





### target

- [ ] 登录注册注销（验证码，登录限制）
- [ ] 用户系统（用户信息，用户留言，用户留言导出）
- [ ] 广场
  * 写留言
  * 看留言

##### TODO 

- [ ] 无限极评论，查看

- [ ] 评论通知系统

- [ ] RestFul API 设计

- [ ] 前后端分离

- [ ] ajax交互

- [ ] 实践把session存入redis或者mysql



##### 版式设计

* 广场 用户



***



### 一些记录

##### ThinkPHP 5.1 容器

个人觉得官方文档有点迷。

但是按照官方文档的意思，预设的容器服务，已经能很好地支持大多数应用的开发（没错，像我这样练手的项目卓卓有余啦~），但是我还是较为喜欢Slim框架那样，对于容器服务的自定义。

另外，或许我对容器有了错误的理解？在Slim中，TP 5.1 对容器的