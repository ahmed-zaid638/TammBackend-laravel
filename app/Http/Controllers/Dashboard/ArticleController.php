<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use DateTime;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }
    public function create()
    {
        return view('dashboard.articles.create');
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName() . '.' . $request->file("image")->getClientOriginalExtension();;
            $request->file('image')->storeAs('public/articles', $filename);
            $validatedData['image'] =  "articles/" . $filename;
        }
        Article::create($validatedData);
        return redirect()->route('dashboard.articles.index')->with('success', 'Article created successfully.');
    }
    public function show($id)
    {
        $rticle = Article::findOrFail($id);
        return view('dashboard.articles.show', compact('article'));
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('dashboard.articles.edit', compact('article'));
    }
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {

            $filename = $request->file('image')->getClientOriginalName() . '.' . $request->file("image")->getClientOriginalExtension();;
            $request->file('image')->storeAs('public/articles', $filename);
            $validatedData['image'] =  "articles/" . $filename;
        }
        $article = Article::findOrFail($id);
        $article->update($validatedData);

        return redirect()->route('dashboard.articles.index')->with('success', 'Article updated successfully.');
    }
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('dashboard.articles.index')->with('success', 'Article deleted successfully.');
    }
}
