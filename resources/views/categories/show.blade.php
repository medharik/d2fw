@extends('layout')
@section('contenu')
<h2>Show</h2>
@isset($nom)
    {{$nom}}
@endisset

<h3>{{$categorie->nom}}</h3>


@endsection