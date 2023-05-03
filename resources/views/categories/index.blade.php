@extends('layout')
@section('contenu')
    <h2>liste des categories </h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom


                </th>
                <th scope="col">prix</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $p)
                <tr>
                    <th scope="row">{{ $p->id }}
                    </th>
                    <td>{{ $p->nom }}
                    <br>
                    {{count($p->produits)}}
                    @foreach ($p->produits as $c)
                        <span class="badge badge-primary bg-primary">
                          {{$c->libelle}}
                        </span>
                    @endforeach
                    </td>

                    <td>
                        <form class="d-inline" action={{ route('categories.destroy', [$p->id]) }} method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">S</button>
                        </form>
                        <a href={{ route('categories.edit', [$p->id]) }} class="btn btn-warning">M</a>
                        <a href={{ route('categories.show', [$p->id]) }} class="btn btn-info">C</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
