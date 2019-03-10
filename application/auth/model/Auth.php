<?php

namespace app\auth\model;

use think\Model;

class Auth extends Model
{
    protected function checkEmailExist($email)
    {
        return self::where('email', $email)->limit(1)->find() ? false : true;
    }
}