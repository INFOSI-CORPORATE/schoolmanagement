<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GerenciadorMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->roles->contains('name', 'gerenciador') || $request->user()->roles->contains('name', 'admin')) {
            
        return $next($request);
        }
        // Redirecionar ou retornar resposta de acesso negado
        abort(403);
    }
}
