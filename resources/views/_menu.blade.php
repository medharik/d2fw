<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{route('produits.index')}}>Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('produits/create') }}>Nouveau</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{route('categories.index')}}>Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('categories/create') }}>Nouvelle categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>