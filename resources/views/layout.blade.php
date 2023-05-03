<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>layout</title>
</head>
<body>
    @include('_menu')
    @section('alerte')
        
    @if (session('notice'))
    <div class="alert alert-{{session('class')}}">
        {{session('notice')}}            
    </div>
    @endif
    @endsection
    @yield('contenu')
    
</body>
</html>