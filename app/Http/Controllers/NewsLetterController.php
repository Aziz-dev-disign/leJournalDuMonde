<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('index')->with('success', 'Inscription reuissi !!');
        }
        return redirect('index')->with('failure', 'Désolé ! adresse e-mail existant ');
            
    }
}
