@extends('admin.layout.admin_default')

@section('content')

    <div class="container-fluid marge">        
        <div class="row justify-content-center flex-wrap flex-md-nowrap align-items-center test">
            <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
            @csrf
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="titre" >Titre :</label>
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Entre un titre..." value="{{ $produit->titre ? $produit->titre: '' }}">
                    </div>
                </div>
                    <div class="row form-group">
                    <div class="col-md-12">
                        <label for="slug" >Slug :</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="entre un slug.. " value="{{ $produit->slug ? $produit->slug: '' }}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="date" >Date :</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $produit->date ? $produit->date: '' }}">
                    </div>
                </div>
                    <div class="row form-group">
                    <div class="col-md-12">
                        <label for="contenu" >Contenu :</label>
                        <textarea name="contenu" id="contenu" cols="30" rows="10" class="form-control" value="{{ $produit->contenu ? $produit->contenu: '' }}"></textarea>
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