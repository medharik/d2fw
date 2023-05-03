@extends('layout')
@section('contenu')
    <h2>Nouveau produit</h2>
    <form action={{ route('produits.store') }} method="POST" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <h5><?=$e; ?></h5>            
            @endforeach
        @endif
        @csrf
        <label for="">Libelle :
            <input class="@error('libelle') border border-danger   @enderror" type="text" name="libelle" id=""></label>
        @error('libelle')
            <span>{{$message}}</span>
        @enderror
        <label for="">Prix :
            <input type="text" name="prix" id=""></label>
        <label for="">Categorie :
            <select type="text" name="categorie_id" id="">
            @foreach ($categories as $c)
                <option value="{{$c->id}}">{{$c->nom}}</option>
            @endforeach
            </select>

            </label>
        <label for="">Image :
            <input type="file" name="chemin" id=""></label>
        <button>Ok</button>
    </form>
@endsection
