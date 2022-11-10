@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="mb-4">Ajout d'article: </h1>
            <div>
                <a class="btn btn-primary mt-1" href="{{ route('admin.posts.index') }}">Retour</a>
            </div>
    </div>

    @include('partials.validation')

    <form class="row mb-4" method="post" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col">
            <label class="form-label" for="title">Titre</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Titre" required>
        </div>
        <div class="col">
            <label class="form-label" for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="slug" required>
        </div>
        <div class="col">
            <label class="form-label" for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
        </div>
        <div class="mb-3">
            <label for="image">Image : </label>
                <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="category" class="form-label">Catégorie : </label>
                    <select class="form-control" id="category_id" name="category_id">
                        <option value="">Aucune</option>
                    @foreach ($categories as $category )
                        <option value="{{$category->id}}"@if($category->id == old('category_id')) selected @endif>{{$category ->name}}</option>
                    @endforeach
                    </select>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-grop">
                <label for="tags" class="form-label">Tags : </label>
                    <select class="form-control" multiple id="tags" name="tags[]">
                    @foreach ($tags as $tag )
                        <option value="{{$tag->id}}"@if(in_array($tag->id, old('tags', []))) selected @endif>{{$tag ->name}}</option>
                    @endforeach
                    </select>
            </div>
        </div>
        
    
        <div class="mb-3">
            <div class= "form-check">
                <input type="hidden" name="published" value="0">
                <input class="form-check-input" type="checkbox" id="published" value="1" @if(old('published')) checked @endif>
                <label class="form-check-label" for="published">
                Publié
                </label>
            </div>
        <div class="col-12">
            <button type="submit"class="btn btn-primary mt-1">Valider</button>
        </div>
    </form>
</div>
@endsection
