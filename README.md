## 项目介绍
### 项目概述
这是一个基于python和MySQL开发的 企业信息综合管理系统 ，类似于一个小型ERP或企业门户系统。该系统采用经典的Web开发模式，包含前台用户界面和后台管理功能，主要用于管理企业信息、招聘信息、用户信息等核心业务数据。

### 技术架构
- 后端开发语言 ：PHP
- 数据库 ：MySQL
- 前端框架 ：Bootstrap + jQuery
- 富文本编辑器 ：KindEditor 4.1.10
- 前端样式 ：自定义CSS + 响应式设计
- 字符编码 ：GB2312
### 核心功能模块 1. 企业信息管理（Enterprise Infos）
- 数据表 ： enterpriseinfos
- 功能 ：对企业基本信息进行增删改查管理
- 字段 ：企业编号、名称、图片、视频广告、企业类型、所属行业、负责人、联系电话、注册资本、地址、企业简介
- 特色 ：支持点赞（dianzan_d/dianzan_c）和评论功能
- 新增 ：AI智能咨询功能（基于豆包AI） 2. 招聘信息管理（Enterprise Hire）
- 数据表 ： enterprisehire
- 功能 ：管理企业发布的招聘信息
- 字段 ：岗位编号、岗位名称、薪资待遇、资格要求、年龄要求、性别要求、工作经验、工作模式、企业名称、联系电话、企业地址
- 流程 ：支持审核功能（issh字段） 3. 用户信息管理（Users Infos）
- 数据表 ： usersinfos
- 字段 ：账号、姓名、性别、密码、电话、身份证、备注 4. 商品信息管理（Goods Infos）
- 数据表 ： goodsinfos 、 goodstypes
- 功能 ：管理商品信息及商品类型分类 5. 招聘报名管理（Hire Signup）
- 数据表 ： hiresignup
- 功能 ：用户对招聘信息进行报名登记 6. 系统管理
- 管理员表 ： allusers （支持超级管理员和普通管理员）
- 操作记录 ： caozuojilu
- 系统公告/简介/关于我们/联系方式 ： dx 表
- 评论管理 ： pinglun
- 收藏记录 ： shoucangjilu
- 留言板 ： liuyanban
