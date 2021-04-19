<?php


namespace App\Repositories\Admin\Auth;


use App\Repositories\Admin\Common\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Fortify;

class LoginRepository extends BaseRepository
{
    public function login($request)
    {
        $credentials = $request->all();
        $is_remember = $request->active ? 1 : 0;

        if(Auth::attempt([Fortify::username()=>$credentials['username'], 'password'=>$credentials['password']], $is_remember)){
            //登录成功
            return $this->successReturn('登录成功');
        }else{
            //登录失败
            return $this->failReturn('账号或密码错误');
        }
    }
}
