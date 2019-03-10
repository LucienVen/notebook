<?php

namespace app\auth\validate;

use think\Validate;

class Auth extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'email' => 'require|email',
        'password' => 'require|length:8,32',
        'password_confirm' => 'require|confirm'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'email.require' => 'eamil必须',
        'email' => '邮箱格式错误',
        'password' => 'password必须',
        'password.length' => 'password长度区间为8-32个字符',
        'password_confirm' => 'password_confirm必须',
        'password_confirm.confirm' => '两次输入的密码不同',
    ];
}
