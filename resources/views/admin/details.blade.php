@extends('admin.layout.admin_default')

@section('content')

    <div class="container">

        <div class="categorie">
            <h2>Details de {{$actualite->titre}}</h2>
        </div>
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
        <div class="row">
        <div class="col-5">
            <img style="height:262.5px;" src="{{asset('storage').'/'.$actualite->image}}" class="w-100 mt-4 rounded-circle">
        </div>
        <div class="col-7 droite">
        <div class="list-group">
        <div class="list-item"><span stryle="font-weight:800;">Titre:</span><span style="font-size:1em;"> {{$actualite->titre}}</span></div><br>
        <div class="list-item"><span stryle="font-weight:800;">slug</span><span style="font-size:1em;"> {{$actualite->slug}}</span></div><br>
        <div class="list-item"><span stryle="font-weight:800;">Catégorie:</span> <span style="font-size:1em;">{{$actualite->categorie->categorie}}</span></div><br><br>
        <div class="list-item"><span stryle="font-weight:800;">Description:</span><span style="font-size:1em;"> {{$actualite->contenu}}</span></div><br>
    </section>
    </div>

@endsection