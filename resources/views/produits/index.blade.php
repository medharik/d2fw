@extends('layout')
@section('contenu')
    <h2>liste des produits </h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">libelle

              
            </th>
            <th scope="col">prix</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($produits as $p)
                
            <tr>
              <th scope="row">{{$p->id}}
                <img src="{{asset($p->chemin)}}" width="100" alt=""></th>
              <td>{{$p->libelle}}
              Categorie : {{$p->categorie->nom}}
                </td>
              <td>{{$p->prix}}</td>
              <td>
                  <form class="d-inline" action={{route('produits.destroy',[$p->id])}} method="post">
              @method('delete')
              @csrf
                    <button class="btn btn-danger">S</button>  
                </form>
                  <a href={{route('produits.edit',[$p->id])}} class="btn btn-warning">M</a>
              <a  href={{route('produits.show',[$p->id])}} class="btn btn-info">C</a></td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
@endsection