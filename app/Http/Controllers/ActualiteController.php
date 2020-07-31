<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actualite;

use App\Categorie_actualite;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie_actualite::all();
        return \view('admin.page_ajout', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('admin.form_test');
    }

    public function create(Request $request)
    {
        $nom = $request['nom'];

        $categorie = new Categorie_actualite();
        $categorie->nom = $nom;
        $categorie->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $imagePath = request('image')->store('uploads','public');
        
        Actualite::create([
            'categorie_id'=>$request->categorie_id,
            'titre'=>$request->titre,
            'slug'=>$request->slug,
            'date'=>$request->date,
            'contenu'=>$request->contenu,
            'image'=>$imagePath
        ]);

        return redirect()->back()->with('success', 'Actualité enregistré avec succès !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = Categorie_actualite::all();
        $actualite = Actualite::find($id);

        return view('admin.edit',compact('categories','actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
