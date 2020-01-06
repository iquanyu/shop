<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\OperationLog;
use Illuminate\Support\Facades\Auth;

class AdminOperationLog
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
        if(Auth::check()){
          $user_id = (int) Auth::id();
        }else{
          $user_id = 0;
        }

        $input = $request->all();

        $log = new OperationLog();
        
        $log->user_id = $user_id;
        $log->path    = $request->path();
        $log->method  = $request->method();
        $log->ip      = $request->ip();
        $log->input   = json_encode($input, JSON_UNESCAPED_UNICODE);;

        $log->save();

        return $next($request);
    }
}
