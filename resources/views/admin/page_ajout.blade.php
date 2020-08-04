@extends('admin.layout.admin_default')

@section('content')

    <div class="container-fluid marge">        
        <div class="row justify-content-center flex-wrap flex-md-nowrap align-items-center test">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        @if (\Session::has('failure'))
            <div class="alert alert-danger">
                <p>{{ \Session::get('failure') }}</p>
            </div>
        @endif
            <form action="{{route('actualite_create')}}" method="post" enctype="multipart/form-data">
            @csrf
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <span id="selecte">
                        <label for="select" >Categorie :</label>
                        <select class="custom-select custom-select-sm col-md-12" id="select" name="categorie_id">
                            <option >choisir...</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom}}</option>   
                            @endforeach
                        </select>
                        </span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="titre" >Titre :</label>
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Entre un titre...">
                    </div>
                </div>
                    <div class="row form-group">
                    <div class="col-md-12">
                        <label for="slug" >Slug :</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="entre un slug.. ">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="date" >Date :</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                </div>
                    <div class="row form-group">
                    <div class="col-md-12">
                        <label for="contenu" >Contenu :</label>
                        <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="add" >Ajouter une photo :</label>
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
    @endsection