<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class InjectParametre
{
    
    public function handle(Request $request, Closure $next)
    {
        $currentDate = date('Y-m-d H:i:s');
        $request->merge(['currentDate' => $currentDate]);
        

        return $next($request);
    }
}

