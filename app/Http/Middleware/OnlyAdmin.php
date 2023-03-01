<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //sinin kita kasih tau jika akun yg sedang login adl bKN admin
       if(Auth::user()->role_id != 1){ //jika bukan admin maka akan di buang ke booklist
            return redirect('/');
       }

       //yg dilakukann admin
       return $next($request);
        
    }
}