<?php

namespace App\Http\Controllers\FrontEnd;

use App\Core\ResponseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Service\UserService;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(UserRequest $request)
    {
        $data = $request->input();
        // Tạo tài khoản người dùng 
        $user = UserService::insert($data);
        if (empty($user)) {
            return ResponseService::error('Đăng ký tài khoản thất bại');
        }
        return ResponseService::success([], 'Đăng ký tài khoản thành công');
    }


    public function login(UserLoginRequest $request)
    {
        $data = $request->input();
        // Sử dụng Auth::attempt để kiểm tra thông tin đăng nhập
        // Sử dụng Auth::attempt để kiểm tra thông tin đăng nhập
        if (auth()->attempt($data)) {
            $user = UserService::findByEmail($data['email']);
            // dd(auth()->user());
            return ResponseService::success($user, 'Đăng nhập thành công');
        } 
        return ResponseService::error('Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập của bạn và thử lại.');
    }
}
