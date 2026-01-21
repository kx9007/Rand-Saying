# 醒言 随机一言

#### 介绍
![https://count.getloli.com/@kx9007-saying?name=random-saying&theme=random&padding=7&offset=0&align=top&scale=1&pixelated=1&darkmode=auto](https://count.getloli.com/@kx9007-saying?name=random-saying&theme=random&padding=7&offset=0&align=top&scale=1&pixelated=1&darkmode=auto)
#### 软件架构

PHP，HTML，CSS，JavaScript

#### 安装教程

1.  上传到服务器或者虚拟主机
2.  在api文件夹里上传任意类型文本文件，里面写入一行一个语录
3.  访问api.php就可以获取可选择参数，访问index.php查看文档
4.  也可以去我的博客查看教程

#### 示例链接

1.  https://api.kxlove.top/api/random-saying/saying.php(全随机且返回为文本)
2.  https://api.kxlove.top/api/random-saying/saying.php?type=json(文本随机限制返回为json)
3.  https://api.kxlove.top/api/random-saying/saying.php?type=json&number=2(读取随机文本的第二句)
4.  https://api.kxlove.top/api/random-saying/saying.php?type=json&number=3&text=a.txt(读取a.txt的第3句，使用json返回)

#### 返回示例

1.  {
    "code": 200,
    "msg": "获取成功",
    "result": "熬夜写的代码，上线前被产品一句话推翻"
}