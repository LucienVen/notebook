<?php
namespace app\auth\controller;

use think\Controller;

class Auth extends Controller
{
    public function registered()
    {
        // print_r($this->request->param());
        // 获取参数（email, password, password_again）
        $param_data = [
            'email' => $this->request->param('email'),
            'password' => $this->request->param('password'),
            'password_confirm' => $this->request->param('password_confirm'),
        ];
        
        // 校验
        $validate = new \app\auth\validate\Auth;
        if(!$validate->check($param_data)){
            return json(['code' => 400, 'msg' => $validate->getError()]);
        }

        // 用户注册
        $AuthModel = new \app\auth\model\Auth();
        // 检查email是否已存在
        if (!$AuthModel->checkEmailExist($param_data['email'])) {
            return json(['code' => 400, 'msg' => '该email已注册']);
        }

        // 注册用户



    }

    // 自定义返回函数

}

