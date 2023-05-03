<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nouveau produit</h1>
    <form action="{{url('/article')}}" method="post">
        @csrf
        <input type="text" name="libelle" id=""><input type="text" name="prix" id="">
        <button>Ajouter </button>
    </form>
    
</body>
</html>