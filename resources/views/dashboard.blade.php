
@extends ('layouts.app')
@section ('content')

<div class="clearfix mb-4">
<h1 class="float-start fs-3" >Dashboard </h1>
</div>
<div class="d-flex flex-row">
<div class="card me-auto" style="width:18rem">
  <div class="card-body">
<h5 class="card-title fs-2">Articles</h5>
    <p class="card-text">Créer, éditer et supprimer des articles</p>
    <a href="{{route( 'admin.posts.index') }}" class="btn btn-primary">Gestion des articles</a> 
  </div>
</div>

<div class="card me-auto" style="width:18rem">
    <div class="card-body ">
  <h5 class="card-title fs-2">Categories</h5>
      <p class="card-text">Créer, éditer et supprimer des categories</p>
      <a href="{{route( 'admin.categories.index') }}" class="btn btn-primary">Gestion des categories</a> 
    </div>
  </div>

  <div class="card me-auto" style="width:18rem">
    <div class="card-body">
  <h5 class="card-title fs-2">Tags</h5>
      <p class="card-text">Créer, éditer et supprimer des tags</p>
      <a href="{{route( 'admin.tags.index') }}" class="btn btn-primary">Gestion des tags</a> 
    </div>
  </div>
</div>


@endsection