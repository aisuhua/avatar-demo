# 用户头像生成示例

本示例的目的是仿造 [GitHub][1] 一样能动态生成各种尺寸的用户头像。该示例采用 [Nginx][2] 的 [image_filter][3] 模块来生成不同尺寸的头像。

我们将通过以下地址格式访问 64、128 和 180 像素的用户头像。

```
http://avatar.example.com/u/10086?s=64
http://avatar.example.com/u/10086?s=128
http://avatar.example.com/u/10086?s=180
```

## 安装

PHP 5 以上版本，项目根目录有一个 Nginx 配置示例，可参考使用，另外 storage/avatar 目录是用户头像上传后的存储位置，所以必须有可写权限。

UI 部分是参考[别人做好的头像示例][4]。

## 后记

如需了解更多有关 [image_filter][3] 的使用示例，可参考我的 [wiki][5]。
 
读者实际上也可以尝试使用 [ngx_small_light][6] 第三方模块来生成头像（图片缩略图），更多信息可查询[图片缩略图][7]。


[1]: https://github.com/
[2]: http://nginx.org/
[3]: http://nginx.org/en/docs/http/ngx_http_image_filter_module.html
[4]: https://zhuanlan.zhihu.com/p/27866168
[5]: https://github.com/aisuhua/wiki/tree/master/thumb2
[6]: https://github.com/aisuhua/wiki/tree/master/thumb