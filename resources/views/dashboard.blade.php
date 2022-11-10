
@extends ('layouts.app')
@section ('content')

<div class="clearfix mb-4">
  <h1 class="float-start fs-3 fw-bold" >Dashboard </h1>
</div>


<div class="d-flex justify-content-evenly">
<div class="card">
  <h5 class="card-header fw-bold">Articles</h5>
  <div class="card-body">
    <p class="card-text">Créer, éditer et supprimer des articles</p>
    <a href="{{route( 'admin.posts.index')}}" class="btn btn-primary">Gestion des articles</a>
  </div>
</div>

<div class="card">
  <h5 class="card-header fw-bold">Catégories</h5>
  <div class="card-body">
    <p class="card-text">Créer, éditer et supprimer des catégories</p>
    <a href="{{route( 'admin.posts.index') }}" class="btn btn-primary">Gestion des catégories</a>
  </div>
</div>


<div class="card">
  <h5 class="card-header fw-bold">Tags</h5>
  <div class="card-body">
    <p class="card-text">Créer, éditer et supprimer des tags</p>
    <a href="{{route( 'admin.tags.index') }}" class="btn btn-primary">Gestion des tags</a>
  </div>
</div>


</div>
</div>


@endsection