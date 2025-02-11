<?php

namespace App\Http\Controllers;

use Dotenv\Store\File\Paths;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Account;
use App\Models\Account as ModelsAccount;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    // public function __construct(protected Request $request) {}

    public function SignUp(Request $request)
    {
        $account = new ModelsAccount();
        $account->username = $request->username;
        // Mã hoá mật khẩu rồi lưu vào database
        $account->password = Hash::make($request->password);
        if ($account->save()) {
            return view('signup')->with('message', 'Tài khoản đã lưu thành công vào database');
        }
        return redirect()->back()->with('message', 'Đăng kí tài khoản thất bại');
    }
    public function Login(Request $request)
    {
        $datas = DB::select('select * from accounts');
        foreach ($datas as $data) {
            if ($data->username === $request->username) {
                if (Hash::check($request->password, $data->password)) {
                    return view('welcome')->with('message', 'Bạn đã đăng nhập thành công');
                }
            }
        }
        return view('login')->with('message', 'Bạn đã đăng nhập thất bại! Vui lòng thử lại');
    }
}
