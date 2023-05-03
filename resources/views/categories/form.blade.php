@extends('layout')
@section('contenu')
    <h2>Nouveau produit</h2>
    <form action={{ route('categories.store') }} method="POST" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $e)
                <h5><?=$e; ?></h5>            
            @endforeach
        @endif
        @csrf
        <label for="">Nom :
            <input class="@error('nom') border border-danger   @enderror" type="text" name="nom" id=""></label>
        @error('nom')
            <span>{{$message}}</span>
        @enderror
        
       
        <button>Ok</button>
    </form>
@endsection
