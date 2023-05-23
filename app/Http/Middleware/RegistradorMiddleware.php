<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RegistradorMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->roles->contains('name', 'registrador') || !$request->user()->roles->contains('name', 'admin')) {
            // Redirecionar ou retornar resposta de acesso negado
            abort(403);
        }
        return $next($request);
    }
}
