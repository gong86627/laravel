<?php
namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\Admin\Auth\LoginRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class LoginController extends Controller
{
    /**
     * 登录页面
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Admin.Auth.login');
    }

    /**
     * 登录
     */
    public function login(LoginRequest $request)
    {
        $res = (new LoginRepository())->login($request);
        return Response::json($res);
    }
}
