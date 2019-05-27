<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CartCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::has('products') && !empty(Session::get('products')))
            return $next($request);
        else
        {
            if(strpos(url() -> previous(), '/cart') !== false)
                return redirect('/')-> with('msg', 'Please add something to your cart first.');
            else
                return redirect() -> back() -> with('msg', 'Please add something to your cart first.');
        }
    }
}
