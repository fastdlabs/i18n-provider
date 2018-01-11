# i18n

i18可以让你的项目能够满足更多语言环境下的需求，能够有效减少多语言环境下的差异。

除了能够处理多语言情况，还能使用i18n去统一处理错误码的情况。

例如我们去定义一个 10086 的错误码，对应输出错误参数仅需要:

1. 创建语言文件: `zh_cn.yml` => `10086: "API 演示错误"`
    
2. 在输出的时候 `i18n()->trans("10086")` 或者 `trans("10086")` 即能完成对应错误码输出

#### 参考阅读

* [https://en.wikipedia.org/wiki/HATEOAS](https://en.wikipedia.org/wiki/HATEOAS)
* [http://open.weibo.com/wiki/Error_code](http://open.weibo.com/wiki/Error_code)
* [https://open.taobao.com/doc2/detail.htm?articleId=114&docType=1&treeId=null](https://open.taobao.com/doc2/detail.htm?articleId=114&docType=1&treeId=null)

### 贡献

非常欢迎感兴趣，愿意参与其中，共同打造更好PHP生态，Swoole生态的开发者。

如果你乐于此，却又不知如何开始，可以试试下面这些事情：

* 在你的系统中使用，将遇到的问题 [反馈](https://github.com/JanHuang/fastD/issues)。
* 有更好的建议？欢迎联系 [bboyjanhuang@gmail.com](mailto:bboyjanhuang@gmail.com) 或 [新浪微博:编码侠](http://weibo.com/ecbboyjan)。

### 联系

如果你在使用中遇到问题，请联系: [bboyjanhuang@gmail.com](mailto:bboyjanhuang@gmail.com). 微博: [编码侠](http://weibo.com/ecbboyjan)

## License MIT
