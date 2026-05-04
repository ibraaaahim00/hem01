<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function home()
    {
        return view('admin.layouts.layout');
    }


    public function login()
    {
        return view('admin.auth.login');
    }
    public function auth(Request $request)
    {
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $exists=User::query()
            ->where('email',$data['email'])
            ->where('password',$data['password'])
            ->exists();
        if(!$exists){
            return back()->withErrors(['email'=>'this email is not exist'])->withInput();
        }
$user=User::query()
    ->where('email',$data['email'])
    ->where('password',$data['password'])
        ->first();
        auth()->login($user);
        return redirect()->route('admin.home');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
