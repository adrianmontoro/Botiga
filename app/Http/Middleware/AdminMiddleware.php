<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $rolename)
    {
      $role = Role::where('name',$rolename)->first();
      if(Auth::user()!=null && Auth::user()->role_id == $role->id){
          return $next($request);
      }
      return redirect()->route('login');
    }

}
