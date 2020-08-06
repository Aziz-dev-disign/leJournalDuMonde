<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;

use App\Actualite;

use App\Categorie_actualite;

class ActualiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Actualite $actualites)
    {
        
        $actualites = Actualite::all();
        return view('index', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {

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
    public function show(string $actualite, int $id)
    {
        $actualites=Actualite::find($id);
        return view('admin.details',compact('actualites'));
    }


    public function send(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('index')->with('success', 'Inscription reuissi !!');
        }
        return redirect('index')->with('failure', 'Désolé ! adresse e-mail existant ');
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie_actualite::all();
        $actualite = Actualite::findOrFail($id);

        return view('admin.edit',compact('categories','actualite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $actualite=Actualite::findOrFail($id);
            $categorie=$actualite->categorie->nom;
            $data=request()->validate([
                'titre'=> ['required','string'],
                'slug'=> ['required','string'],
                'date'=> ['required','date'],
                'contenu'=> ['required','string'],
                'categorie_id'=> ['required','integer'],
                'image'=> ['image']
              ]);
              if(request('image')){
                $imagePath=request('image')->store('images','public');
                $actualite->update(array_merge($data,['image'=>$imagePath]));
              }
              else{
                
                  $actualite->update($data);
              }
              $id=$actualite->categorie->id;
              return view('admin.edit',compact('id','categorie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite=actualite::find($id);
        $nom_categorie=$actualite->categorie->nom;
        $id=$actualite->categorie->id;
        $actualite->delete();
        return view('admin.liste',['id'=>$id,'categorie'=>$nom_categorie]);
    }
}
