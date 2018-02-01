### 原型设计模式
> 使用克隆技术来复制实例化对象，新对象是通过复制原型实例创建的，在这里，实例（instance）是指实例化具体类。原型设计模式的目的是通过使用克隆以减少实例化对象的开销

> 原型模式是先创建好一个原型对象，然后通过clone原型对象来创建新的对象，适用于大对象的创建，因为创建一个大对象需要很大的开销，如果每次new就会消耗很大，原型模式仅需内存拷贝即可

> 主要角色：
- Prototype（抽象原型角色）：声明一个克隆自身的接口
- Concrete Prototype(具体原型角色)：实现一个克隆自身的操作