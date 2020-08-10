<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

use App\Categorie_actualite;

class ActualiteAdminController extends Controller
{

    // /**
    //  * @function construct for authentificate
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
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


    public function liste(Actualite $actualites)
    {
        $actualites = Actualite::with('categorie')->paginate(5);
        return view('admin.liste', compact('actualites'));
    }

    public function test()
    {
        return view('admin.form_test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
    public function show(string $actualite, int $id)
    {
        $actualite = Actualite::find($id);
        return view('admin.details',compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie_actualite::all();
        $actualite = Actualite::find($id);

        return view('admin.edit',compact('categorie','actualite'));
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
        $actualite=Actualite::find($id);
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
        $actualite=Actualite::find($id);
        $actualite->delete();
        return redirect()->route('liste');
    }
}
