@extends('layout')
@section('contenu')
    @isset($produit)
        <h2>Modification du produit {{ $produit->libelle }}</h2>
    @else
        <h2>Nouveau produit</h2>
    @endisset
    <div class="col-md-6 mx-auto p-3">
@if ($erreors->any())
    @foreach ($errors->all() as $e)
        <div class="alert alert-danger">{{$e}}</div>
    @endforeach
@endif
        @isset($produit)
            {!! Form::model($produit, ['route' => ['produits.update', $produit->id], 'files' => true,'method' => 'put']) !!}
        @else
            {!! Form::open(['route' => 'produits.store', 'files' => true]) !!}
        @endisset
        <div class="mb-3">
            {!! Form::label('libelle', 'Libellé', ['class' => 'form-label']) !!}
            {!! Form::text('libelle', null, ['class' => 'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label('prix', 'Prix', ['class' => 'form-label']) !!}
            {!! Form::text('prix', null, ['class' => 'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label('categorie_id', 'Categorie', ['class' => 'form-label']) !!}
            {!! Form::select('categorie_id', App\Models\Categorie::pluck('nom','id'),null, ['class' => 'form-control']) !!}
        </div>
        <div class="mb-3">
            {!! Form::label('categorie_id', 'Categorie', ['class' => 'form-label']) !!}
            {!! Form::file('chemin', null, ['class' => 'form-control']) !!}
            @if (isset($produit))
            <br>
                <img src="{{asset($produit->chemin)}}" alt="" width="200">
            @endif
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Valider</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
