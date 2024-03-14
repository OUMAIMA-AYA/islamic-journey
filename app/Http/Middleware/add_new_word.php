<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class add_new_word
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $succes = 'inscription reussite !'; // Correction de la variable à $success
        $request->merge(['success' => $succes]); // Utilisation de $success
        
        return $next($request);
    }
}
