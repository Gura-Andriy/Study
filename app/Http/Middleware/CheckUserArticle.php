<?php

namespace App\Http\Middleware;

use App\models\Article;
use App\models\Offer;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserArticle
{

    public function handle($request, Closure $next)
    {
        $idOffer = $request->route()->parameter('id_article');
        $offer = Article::find($idOffer);
        if (Auth::user() && $offer && Auth::user()->id == $offer->user_id)
        {
            return $next($request);
        }
        return redirect()->route('index');
    }
}
