<?php
namespace app\Index\controller;

use app\Common\controller\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return View::fetch('index');
    }
    public function edit()
    {
        return View::fetch('edit');
    }

    public function hotGoods($name = 'ThinkPHP6')
    {
        return json_decode('[{"goodsId":1,"goodsName":"全心全意","price":178},{"goodsId":2,"goodsName":"榴恋草莓","price":178},{"goodsId":3,"goodsName":"榴莲千层","price":99},{"goodsId":7,"goodsName":"四重奏蛋糕","price":178},{"goodsId":8,"goodsName":"草莓白天使","price":178},{"goodsId":9,"goodsName":"鹏程万里","price":999},{"goodsId":10,"goodsName":"红丝绒甜心","price":99},{"goodsId":11,"goodsName":"潮爆牛煲","price":66},{"goodsId":12,"goodsName":"小食拼盘","price":38},{"goodsId":13,"goodsName":"牛肉丸粿条","price":27},{"goodsId":14,"goodsName":"草粿","price":9}]',true);
    }

    public function inGoods()
    {
        return json_decode('[[{"goodsId":1,"goodsImg":"http://www.dingbing.com.cn/Storage/master/product/images/201811112313157284990.jpg","goodsName":"全心全意","price":178},{"goodsId":2,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p2.jpg","goodsName":"榴恋草莓","price":178},{"goodsId":3,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p3.jpg","goodsName":"榴莲千层","price":99},{"goodsId":4,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p4.jpg","goodsName":"伊丽斯花园","price":128},{"goodsId":5,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p5.jpg","goodsName":"爱尔兰百利甜","price":198},{"goodsId":6,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p6.jpg","goodsName":"盛夏光年","price":398},{"goodsId":7,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p7.jpg","goodsName":"四重奏蛋糕","price":178},{"goodsId":8,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p8.jpg","goodsName":"草莓白天使","price":178},{"goodsId":9,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p9.jpg","goodsName":"鹏程万里","price":999},{"goodsId":10,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p10.jpg","goodsName":"红丝绒甜心","price":99}],[{"goodsId":11,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p11.jpg","goodsName":"潮爆牛煲","price":66},{"goodsId":12,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p12.jpg","goodsName":"小食拼盘","price":38},{"goodsId":13,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p13.jpg","goodsName":"牛肉丸粿条","price":27},{"goodsId":14,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p14.jpg","goodsName":"草粿","price":9}],[{"goodsId":15,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p15.jpg","goodsName":"抹茶珍珠奶盖茶","price":17},{"goodsId":16,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p16.jpg","goodsName":"招牌珍珠奶茶","price":13},{"goodsId":17,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p17.jpg","goodsName":"一颗柠檬红茶","price":16}],[{"goodsId":18,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p18.jpg","goodsName":"牛扒套餐","price":49},{"goodsId":19,"goodsImg":"http://oz36epqiu.bkt.clouddn.com/p19.jpg","goodsName":"双人牛扒套餐","price":69}]]',true);
    }
}
