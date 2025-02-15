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
use App\Models\Account;
use App\Models\RoleAccount;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    // public function __construct(protected Request $request) {}
    public function CheckAuth()
    {
        $user = Auth::check();
        if (!$user) {
            return view('auth_fail');
        }
        // return view('home', ['auth' => true]);
        return redirect('/home');
    }

    public function SignUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => ['required', 'max:255'],
            'lname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:accounts,email'],
            'birth_day' => ['required', 'date'],
            'phone_number' => ['required', 'digits_between:10,11'],
            'password' => ['required', 'min:8', 'string', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('/sign-up')
                ->withErrors($validator)
                ->withInput();
        }
        Account::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'birth_day' => $request->birth_day,
        ]);
        return view('signup', ['mess' => 'You have sign up successfully!!']);

        // $account = new ModelsAccount();
        // $account->username = $request->username;
        // // Mã hoá mật khẩu rồi lưu vào database
        // $account->password = Hash::make($request->password);
        // if ($account->save()) {
        //     return view('signup')->with('message', 'Tài khoản đã lưu thành công vào database');
        // }
        // return redirect()->back()->with('message', 'Đăng kí tài khoản thất bại');

    }
    public function Login(Request $request)
    {
        $account = Account::where('email', $request->email)->first();
        if (!$account) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'Your email do not exist, please try again']);
        }
        if (!Hash::check($request->password, $account->password)) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['password' => 'Your password is incorrect, please try again']);
        }
        Auth::login($account);
        $request->session()->regenerate();
        // dd(Auth::user(), session()->all());
        return redirect('/home');
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function assignRole()
    {
        // $role = [4,5,6];
        // $accountIds = [7,6,8];
        // foreach($accountIds as $index => $accountId) {
        //     $account = Account::find($accountId); 
        //         if ($account) {
        //             $account->roles()->attach($role[$index]);
        //         }
        // } 
        // Account::find(8)->roles()->detach();
        // Account::find(6)->roles()->attach(6);
    }

    public function checkSuperAdmin()
    {
        // $user = Account::find(Auth::id());

        // $user_roles = [];
        // foreach($user->roles as $role){
        //     $user_roles[] = $role->pivot->role_id;
        // }
        // dd($user_roles);
        $user = Account::find(Auth::id());
        foreach ($user->roles as $role) {
            if ($role->pivot->role_id === 4) {
                return view('superAdmin');
            }
        }
        return redirect()->back()->with('role', 'You do not have the permission to access');
    }

    public function checkAdmin()
    {
        $user = Account::find(Auth::id());
        foreach ($user->roles as $role) {
            if ($role->pivot->role_id === 5) {
                return view('admin');
            }
        }
        return redirect()->back()->with('role', 'You do not have the permission to access');
    }

    public function checkUser()
    {
        $user = Account::find(Auth::id());
        foreach ($user->roles as $role) {
            if ($role->pivot->role_id === 6) {
                return view('user');
            }
        }
        return redirect()->back()->with('role', 'You do not have the permission to access');
    }

    
}
