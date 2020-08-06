@extends('admin.layout.admin_default')

@section('content')

<br>

<div class="table responsive">
    <table class="table table-striped table-bordered table-over" >
        <thead>
            <th>N°</th>
            <th>Titre</th>
            <th>Slug</th>
            <th>Date</th>
            <th>Catégorie</th>
            <th>Photo</th>
            <th>Detail</th>
            <th>Modifier</th>
            <th>Suprimer</th>
        </thead>
        <tbody>
            <?php $i=0; ?>
                @foreach($actualites as $actualite)
            <?php $i++; ?>
            <tr>
            <td>{{$i}}</td>
            <td>{{$actualite->titre}}</td>
            <td>{{$actualite->slug}}</td>
            <td>{{$actualite->date}}</td>
            <td>{{$actualite->categorie->nom}}</td>
            <td><img src="{{asset('storage').'/'.$actualite->image}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
            <td><a href="{{route('details',['actualite'=>$actualite->titre,'id'=>$actualite->id])}}" class="btn btn-success">Détail</a></td>
            <td><a href="{{route('edit',['actualite'=>$actualite->id])}}" class="btn btn-primary">Modifier</a></td>
            <td><a href="{{route('destroy',['actualite'=>$actualite->id])}}" class="btn btn-danger" >Supprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection