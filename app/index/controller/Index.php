<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this->assign('title','质量管理系统');
        return $this->fetch();
    }
}
