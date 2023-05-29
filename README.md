# **《夏目友人帐》系列动漫一览**

 

## **项目简介**

作为夏目友人帐的忠实观众，为国内没有一个几种分享夏目友人帐动漫信息的网站而感到遗憾。对此，本次设计并搭建了夏目友人帐信息交互网站雏形。实现了用户登录与注册、剧中人物介绍、系列作品、图片分享几个主要功能，并串联各个页面，实现页面的跳转交互。下面将分为以上几个部分分别介绍。



## 一、用户登录与注册

### 1. 用户登录

#### 1.1 界面设计

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image002.jpg)

图1-1 登录界面

登录界面作为网站给用户的第一印象，设计时我希望更多的是简介，突出重点——登录与注册。于是在设计时没有添加其他任何元素，整个网页只有一个登录窗口。

为了进一步突出简洁的特点，设计时将输入框、提示框等边框全部取消，但为了保留窗口的视觉效果，设置了0.6的透明度作为背景色，这样既保留了透视的效果，也实现了窗体突出的目的。

在字体设置上，尽可能看起来简约大方，除了“用户名”、“密码”两个提示词外，所有的字体均设置为浅灰色。

边距上，为了不让窗口显得特别臃肿，缩小了部分边距。



#### 1.2 登录功能

通过传递input中的内容，查询表格是否存在用户名以及密码一致的信息，若存在，则登录成功，进入网站首页，若失败，则返回登录界面。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image003.png)

图1-2 登录功能实现（部分代码）

由于平时在使用其他网站时，可能会出现跳转失败的现象，于是在这里，我添加了跳转失败下，通过链接手动跳转，或提示报错并手动跳转。



### 2. 用户注册

#### 1.1 界面设计

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image006.jpg)

图1-3 用户注册界面

设计思路与登录界面相同，添加email信息作为账户找回密码时的个人证明信息。

#### 1.2 注册功能

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image008.jpg)

图1-4 数据库设计

数据库中有唯一表“users”，记录用户名、密码、绑定邮箱，其中，我讲username列设为“unique”，防止重复添加信息。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image010.jpg)

图1-5 注册功能实现（部分代码）

通过传递input中的内容，向users数据库插入数据。若插入成功，则跳转到首页，失败则跳转到注册界面。



## 二、网站首页（导航）设计

### 1. 首页界面

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image012.jpg)

图2-1 网站首页（导航）界面

首页设计时，首先决定了要采用动态壁纸，后续使用mp4静音播放实现。在其他界面中也继续沿用改界面作为背景。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image014.jpg)

图7 动态背景实现

### 2. 导航栏

为了实现界面的跳转，导航栏的设计变得十分重要。在设计导航栏时，首先将颜色设计得贴近背景色，然后为了让导航栏看起来没有那么单调，在中间添加了一个logo作为修饰。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image016.jpg)

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image018.jpg)

图2-2 导航栏的鼠标交互

在鼠标放置于导航栏某一模块时，该模块背景色改为红色，当主表位于中间的logo图时，弹出方框，连接到首页。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image020.jpg) ![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image022.jpg) ![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image024.jpg) 

图2-3 鼠标交互设计（css实现）



## 三、人物介绍板块

### 1. 界面设计

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image026.jpg)

图3-1 人物介绍界面

在这个板块设计时，希望设计出卡片的感觉，原先设计的是鼠标单击后添加一个卡牌翻页的效果，但后面没能做出来，有点可惜。

由于页面较长，对于该页面，需要修改mp4中的属性，以实现图片的窗口自适应。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image028.jpg)

图3-2 动态背景属性修改

### 2. 人物卡牌设计

设计时希望能够体现角色的信息，同时又不让网页显得字数特别密集，在尝试添加翻牌动画失败后，选择了将图片向上缩小的动画效果。该效果同样绑定鼠标事件，对鼠标位置做出响应，而不需要使用点击。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image030.jpg)

图3-3 角色卡牌（左：响应状态，右：正常状态）

仅仅粘贴图片无法体现出卡牌的效果，为此，我添加了底部以及边框的阴影，使得卡牌更加立体。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image032.jpg)![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image034.jpg)![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image036.jpg)

图3-4 动画实现（css程序）

此外，通过多次调试，将鼠标事件动画调至一个较为舒适的速度。并添加了一个“了解更多”，有待后续拓展完善，提高了网站的可拓展性。



## 四、人物介绍板块

### 1. 界面设计

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image038.jpg)

图4-1 系列作品界面

同样的，采用一种类似卡牌的效果添加了阴影边框，制作“系列作品”界面。由于时间限制，素材收集较耗时间，只做了4个作品作为示例，主要展示功能的实现及其效果。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image040.jpg)

图4-2 卡片鼠标事件响应动画

对于每个图片，都添加了鼠标事件响应，分别为根据鼠标位置放大、展开图片，点击后跳转到子页面。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image042.jpg)

图4-3 卡片子页面

对每张“系列作品”的图片，添加链接到子页面，页面中主要显示电影或TV版的介绍信息。

为保证页面跳转逻辑，在“点击返回”中添加了超链接，可返回至“系列作品”板块。



## 五、图片分享板块

### 1. 界面设计

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image044.jpg)

图5-1 图片分享界面

为了尽可能让页面简约，采用轮播形式播放图片，具体实现如下。

![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image046.jpg) ![img](https://github.com/ForcedStuffy/Natsume-s-Book-of-Friends/blob/main/01/clip_image048.jpg)

图5-2 图片轮播代码实现（部分）



## 总结

### 1. 特色

#### 1.1 动态与交互

不论是背景的mp4文件、鼠标交互事件还是图片自动轮播，都突出了“动态”这一理念。充分利用了网页的动态性和交互性。

#### 1.2 可拓展性

设计了email信息，可用于用户信息核实；设计了任务卡中“查看更多”控件，可以继续设计更多网页。另外卡片展示功能较为完善，可以通过li列表继续添加卡片。
