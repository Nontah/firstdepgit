<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class ConsultProduit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if (Auth::user() && Auth::user()->consultPrd == 1)
        {
         return $next($request);   
        } 
        return redirect('user')->withStatu("Statut : vous n'avez pas les droits nécésaires pour acceder à cette resource! Veuiller contacter votre administrateur! ");
    }
}
