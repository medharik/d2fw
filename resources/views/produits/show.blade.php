@extends('layout')
@section('contenu')
<h2>Show</h2>
@isset($nom)
    {{$nom}}
@endisset

<h3>{{$produit->libelle}}</h3>
<h4>{{$produit->prix}}</h4>

@endsection