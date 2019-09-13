<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffersFormValidation;
use App\models\Article;
use App\models\Category;
use App\models\Offer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function main()
    {
        return view('layouts.main');
    }
    public function index()
    {
        return view('index');
    }
    public function apartment()
    {
        $apartment = Offer::orderBy('id' , 'DESC')->paginate(6);
        return view('apartment', compact('apartment'));
    }
    public function registration()
    {
        return view('registration');
    }
    public function AddOffer()
    {
        $users = User::get();
        $categories = Category::get();
        return view('add-offer', compact("users", "categories"));
    }

    public function SubmitAddOffer(OffersFormValidation $request)
    {

        $offer = new Offer();
        $offer->title = $request->input('title');
        $offer->price = $request->input('price');
        $offer->currency = $request->input('currency');
        $offer->description = $request->input('description');
        $offer->user_id = Auth::user()->id;
        $offer->category_id = $request->input('categories-id');
        $offer->save();

        if($request->hasFile('image')) {

            $file = $request->file('image');
            $path = "public/offers/{$offer->id}";
            if(!Storage::exists($path)){
                Storage::makeDirectory($path);
            }
            $file->move(storage_path("app/$path"),$file->getClientOriginalName());
            $offer->images = $file->getClientOriginalName();
            $offer->save();
        }

        return redirect()->route('apartment');
    }
    public function addArticle()
    {
        $users = User::get();
        return view('add-article', compact("users"));
    }

    public function submitAddArticle(Request $request)
    {
        $article = new Article();
        $article->name = $request->input('name');
        $article->description = $request->input('description');
        $article->user_id = Auth::user()->id;
        $article->save();
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $path = "public/articles/{$article->id}";
            if(!Storage::exists($path)){
                Storage::makeDirectory($path);
            }
            $file->move(storage_path("app/$path"),$file->getClientOriginalName());
            $article->images = $file->getClientOriginalName();
            $article->save();
        }

        return redirect()->route('articles');
    }

    public function editOffer($offer_id)
    {
        $users = User::get();
        $categories = Category::get();
        $offer = Offer::find($offer_id);
        return view('edit-offer', compact('offer','users', 'categories'));
    }

    public function submitEditOffer(OffersFormValidation $request, $offer_id)
    {
        $offer = Offer::find($offer_id);
        $offer->title = $request->input('title');
        $offer->price = $request->input('price');
        $offer->currency = $request->input('currency');
        $offer->description = $request->input('description');
        $offer->category_id = $request->input('categories-id');
        $offer->save();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = "public/{$offer->id}";
            Storage::makeDirectory($path);
            if ($offer->images && is_file(storage_path("app/$path/$offer->images"))){
                unlink(storage_path("app/$path/$offer->images"));
            }
            $file->move(storage_path("app/$path"),$file->getClientOriginalName());
            $offer->images = $file->getClientOriginalName();
            $offer->save();
        };

        return redirect()->route('apartment');
    }

    public function deleteOffer($offer_id)
    {
        $offer = Offer::find($offer_id);
        $offer->delete();
        return redirect()->route('apartment');
    }

    public function showOffer($offer_id)
    {
        $offer = Offer::find($offer_id);
        $user = User::find($offer->user_id);
        $category = User::find($offer->category_id);

        return view('view-offer', compact('offer','user'));
    }


    public function articles()
    {
        $articles = Article::orderBy('id' , 'DESC')->paginate(6);
        return view('articles', compact('articles'));
    }

    public function editArticle($article_id)
    {
        $users = User::get();
        $article = Article::find($article_id);
        return view('edit-article', compact('article','users'));
    }

    public function deleteArticle($article_id)
    {
        $article = Article::find($article_id);
        $article->delete();
        return redirect()->route('articles');
    }

    public function submitEditArticle(Request $request, $article_id)
    {
        $article = Article::find($article_id);
        $article->name = $request->input('name');
        $article->description = $request->input('description');
        $article->user_id = Auth::user()->id;
        $article->save();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $path = "public/articles/{$article->id}";
            if(!Storage::exists($path)){
                Storage::makeDirectory($path);
            }
            $file->move(storage_path("app/$path"),$file->getClientOriginalName());
            $article->images = $file->getClientOriginalName();
            $article->save();
        };

        return redirect()->route('articles');
    }

    public function searchOffer(Request $request)
    {

        $apartment = Offer::where('title', 'like', '%' . $request->input('search') . '%')->orderBy('id','DESC')->paginate(10);
//        $article = Article::where('title', 'like', '%' . $request->input('search') . '%')->orderBy('id','DESC')->paginate(10);

        return view('apartment', compact('apartment'));
//        return view('apartment', compact('apartment','article'));

    }

    public function showArticle($article_id)
    {
        $article = Article::find($article_id);
        $user = User::find($article->user_id);

        return view('view-article', compact('article','user'));
    }

}


