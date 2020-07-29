<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create newsletter in laravel 5.7</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">  
    </head>
    <body>
        <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        @if (\Session::has('failure'))
            <div class="alert alert-danger">
                <p>{{ \Session::get('failure') }}</p>
            </div><br />
        @endif
        <div class="container-fluid mt-4">
            <form action="{{route('actualite_create')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row form-group">
                        <div class="col-md-6">
                            <span class="text_color">Categorie existe :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="" checked>
                            <label class="form-check-label text_color" for="inlineRadio1">Oui</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="">
                            <label class="form-check-label text_color" for="inlineRadio2">Non</label>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <span id="selecte">
                        <label for="select" class="text_color ">Categorie :</label>
                        <select class="custom-select custom-select-sm" id="select" name="categorie_id">
                            <option >choisir...</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom}}</option>   
                            @endforeach
                        </select>
                        </span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="titre" class="text_color">Titre :</label>
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Entre un titre...">
                    </div>
                    <div class="col-md-6">
                        <label for="slug" class="text_color">Slug :</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="entre un slug.. ">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="date" class="text_color">Date :</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="contenu" class="text_color">Contenu :</label>
                        <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="add" class="text_color">Ajouter une photo :</label>
                        <input type="file" name="image" id="add" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success w-40">Enregistrer</button>&nbsp&nbsp&nbsp
                        <button type="submit" class="btn btn-danger w-40">annuler</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>