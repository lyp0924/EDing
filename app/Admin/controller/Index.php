<?php
namespace app\Admin\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        echo 'Hello Admin';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
