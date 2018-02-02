### 状态设计模式
> 当一个对象的内在状态改变时允许改变其行为，这个对象看起来像是改变了其类。状态模式主要解决的是当控制一个对象状态的条件表达式国语复杂时的情况。把状态的判断逻辑转移到表示不同状态的一系列类中，可以把复杂的判断逻辑简化

> 如果 state 传入的值不同，则会得到不同的行为。其实就是根据不同的条件，执行不同的逻辑。

#### 角色
- Context: 环境类。它需要在代码中传给具体的 State 类，这样State类才能改变它。他保存有当前的状态。
- State: 抽象的状态接口 。让具体的状态都要实现这个接口，Context依赖接口进行编程。
- ConcreteState： 具体的状态类。专门用于处理某一个状态，如果处理不了就转发出去。

#### 试用场景
- 一个对象的行为取决于他的状态，并且它必须在运行时刻根据状态改变他的行为
- 一个操作中含有庞大的分支结构，并且这些分支决定于对象的状态
- 如果代码中的状态相对固定。比如一个电商中购买商品的流程：未支付、已过期、待发货（已支付）、已发货、已收货。那么这种状态基本上定下来不会有太大变化，状态发生在内部中，顺序固定，不需要客户端进行处理。

#### 优点
- 状态模式将与特定状态相关的行为局部化，并且将不同状态的行为分割开来
- 所有状态相关的代码都存在于某个ConcereteState中，所以通过定义新的子类很容易地增加新的状态和转换
- 状态模式通过把各种状态转移逻辑分不到State的子类之间，来减少互相间的依赖

#### 缺点
- 导致过多的ConcreteState子类

#### UML图

```
Context     ->    state(Handle())
Request()           ↓
    ↓        ConcreteStsteA ConcreteStsteB
state->handle()   Handle()    Handle()
````

### 应用 恶意下单，触犯规则
> 在短时间内下单5次为恶意下单，超过8次静默