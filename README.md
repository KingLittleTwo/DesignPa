### 单例模式
> 单例模式，使某个类的对象仅允许创建一个; 单例模式解决的是如何在整个项目中创建唯一对象实例的问题，工厂模式解决的是如何不通过new建立实例对象的方法
- _instance必须声明为静态的私有变量
- 构造函数和析构函数必须声明为私有,防止外部程序new 类从而失去单例模式的意义
- getInstance()方法必须设置为公有的,必须调用此方法 以返回实例的一个引用
- ::操作符只能访问静态变量和静态函数
- new对象都会消耗内存
- 使用场景:最常用的地方是数据库连接。
- 使用单例模式生成一个对象后， 该对象可以被其它众多对象所使用。
- 私有的__clone()方法防止克隆对象

## 创建型设计模式
### 工厂方法模式
> 工厂模式，工厂方法或者类生成对象，而不是在代码中直接new。使用工厂模式，可以避免当改变某个类的名字或者方法之后，在调用这个类的所有的代码中都修改它的名字或者参数。

### 原型设计模式

## 结构型设计模式
### 适配器模式(Adapter) 类和对象
> 将一个类的接口转换成客户希望的另一个接口。Adapter模式使得原来由于接口不兼容而不能一起工作的类可以一起工作
### 桥接模式 (Bridge)
### 组合模式 (Composite)
### 装饰器模式 (Decorator)
### 外观模式 (Pacade)
### 享元模式 (Flyweight)
### 代理模式 (Proxy)
