<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\authModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authAdminController extends Controller
{
    public function showlogin(){
        return view('admin.auth.login');
    }
    public function checklogin (Request $request){
        // dd($request->all());
            if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
                return redirect()->intended('admin/product');
            }else{
            
                return redirect()->route('formlogin');
            }
    }
    public function formRegister(){
        return view('admin.auth.Register');
    }
    public function PostRegister(Request $request){
        if($request -> isMethod('POST')){
            // dd($request->all());
            authModel::create([
                    'username'=>$request->username,
                    'email'=>$request->email,
                    'role_id'=>1,
                    'password'=>Hash::make($request->password),
            ]);
            return redirect()->route('formlogin');
        }
    }
    
    public function logout(Request $request){
            Auth::logout();
            return redirect()->route('formlogin');  
    }
}
