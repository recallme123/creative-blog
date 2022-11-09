@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="mb-4">Ajout de catégorie: </h1>
        <div>
            <a class="btn btn-primary mt-1" href="{{ route('admin.categories.index') }}">Retour</a>
        </div>
    </div>

    @include('partials.validation')

    <form class="row mb-4" method="post" action="{{route('admin.categories.store')}}" >
        @csrf
        <div class="col">
            <label class="form-label" for="Name">Name</label>
            <input type="text" class="form-control" name="name" id="Name" placeholder="Name" required>
        </div>
       
        <div class="col-12">
            <button type="submit"class="btn btn-primary mt-1">Valider</button>
        </div>
    </form>
</div>
@endsection
