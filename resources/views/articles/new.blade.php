<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>{{$titre}}</h2>
  @isset($nb)
  <h6>{{$nb}}</h6>
  @endisset
    <form action="{{url('arti')}}" method="post">
@csrf
        <input type="text" name="libelle" id="" placeholder="libelle">
        <input type="text" name="prix" id="" placeholder="prix">
        <input type="text" name="qte" id="" placeholder="quantite">
        <button>Ajouter le produit</button>
    </form>
</body>

</html>
