<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
        if (Auth::check() && Auth::user()->role_id === 2) {
            $_SESSION['account_admin'] = [
                'name'=> Auth::user()->username,
                'image'=> Auth::user()->image,
                'role_ID'=> Auth::user()->role_id,
            ];
            // dd($_SESSION['account_admin']);
            return $next($request); // Cho phép tiếp tục
        }
        
        // Nếu không thỏa mãn điều kiện, chuyển hướng hoặc trả về lỗi
        return redirect('formlogin')->withErrors(['access' => 'Bạn không có quyền truy cập trang này.']);

    }
}
