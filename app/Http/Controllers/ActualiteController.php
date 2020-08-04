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
    public function show($id)
    {
        //
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
