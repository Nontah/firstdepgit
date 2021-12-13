<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class ConsultCatPro
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
     if (Auth::user() && Auth::user()->consultCat == 1)
        {
         return $next($request);   
        } 
        return redirect('user')->withStatu("Statut : vous n'avez pas les droits nécésaires pour acceder a cette resource! Veuiller contacter votre administrateur! ");
    }    
}
