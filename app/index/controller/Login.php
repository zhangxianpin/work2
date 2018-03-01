<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        $this->assign('title','兴乐质量管理系统');
        return $this->fetch();
    }
}