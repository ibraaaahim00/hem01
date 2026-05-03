<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $Articles = Article::all();
        return view('admin.articles.index', compact('Articles'));

    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'date' => ['required','date'],
            'content'=> ['required','string'],
        ]);
        Article::create([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
        ]);
        Article::query()->create($request->all());

        return redirect()->route('admin.articles')->with('sucess','Article created successfully');
    }

    public function edit(Article $article)
    {

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'date' => ['required','date'],
            'content'=> ['required','string'],
        ]);

        $article->update([
            'title' => $request->title,
            'date' => $request->date,
            'content' => $request->content,
        ]);

        return redirect('/admin/articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/admin/articles');
    }
}
