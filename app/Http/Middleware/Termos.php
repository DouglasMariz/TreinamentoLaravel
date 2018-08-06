<?php

namespace App\Http\Middleware;

use App\Aluno;
use Closure;

class Termos
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
        $aluno = Aluno::find(1);
        if(empty($aluno->termos)) {
            flash('Por favor assine os termos')->warning();
            return redirect()->route('home');
        }

        return $next($request);
    }
}
