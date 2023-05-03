@extends('layout')
@section('contenu')
    <h2>Nouveau produit</h2>
    <form action={{ route('produits.update',[$produit->id]) }} method="POST">
    @method('PUT')
        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <h5><?=$e; ?></h5>            
            @endforeach
        @endif
        @csrf
        <label for="">Libelle :
            <input value="{{$produit->libelle}}" class="@error('libelle') border border-danger   @enderror" type="text" name="libelle" id=""></label>
        @error('libelle')
            <span>{{$message}}</span>
        @enderror
        <label for="">Prix :
            <input value="{{$produit->prix}}" type="text" name="prix" id=""></label>
        <button>Ok</button>
    </form>
@endsection
