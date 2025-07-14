<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class ArticleController extends Controller
{
   
    public function index()
    {
            $articles = Article::latest()->paginate(10);
            return view('articles.index', compact('articles'));
        }



        public function home()
        {
            $articles = Article::query()
                ->select('id', 'titre', 'image_path', 'created_at')
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

            return view('home', compact('articles'));
        }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'contenu' => 'required|string'
        ]);

        // Traitement de l'image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            
            // Alternative pour générer un nom unique:
            // $imageName = time().'_'.Str::slug($request->titre).'.'.$request->image->extension();
            // $imagePath = $request->file('image')->storeAs('articles', $imageName, 'public');
        }

        // Création de l'article
        $article = Article::create([
            'titre' => $validated['titre'],
            'image_path' => $imagePath,
            'contenu' => $validated['contenu'],
            'slug' => Str::slug($validated['titre'])
        ]);

        return redirect()->route('articles.index')
                         ->with('success', 'Article créé avec succès!');
    }
    public function welcome()
    {
        $articles = Article::latest()->take(3)->get(['id', 'titre', 'image_path', 'created_at']);
        return view('welcome', compact('articles'));
    }

    public function lecture($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.lecture', compact('article'));
    }
    /**
     * Affiche un article spécifique
     */
  

    public function show($id)
{
    $article = Article::findOrFail($id);
    return view('articles.show', compact('article'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $article = Article::findOrFail($id);

    // Supprimer l'image associée si elle existe
    // if ($article->image && \Storage::exists($article->image)) {
    //     \Storage::delete($article->image);
    // }

    // Supprimer l'article
    $article->delete();

    return redirect()->route('articles.index')
                     ->with('success', 'Article supprimé avec succès.');
}
}
