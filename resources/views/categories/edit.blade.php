@extends('layout')
@section('contenu')
    <h2>Nouveau categorie</h2>
    <form action={{ route('categories.update',[$categorie->id]) }} method="POST">
    @method('PUT')
        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <h5><?=$e; ?></h5>            
            @endforeach
        @endif
        @csrf
        <label for="">Nom :
            <input value="{{$categorie->nom}}" class="@error('nom') border border-danger   @enderror" type="text" name="nom" id=""></label>
        @error('nom')
            <span>{{$message}}</span>
        @enderror
        
        <button>Ok</button>
    </form>
@endsection
