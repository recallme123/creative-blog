@extends("layouts.app")
@section('content')
<div class=clearfix mb-4>
    <h1 class="float-start">Modification d'un article: </h1>
    <a href="{{route('admin.posts.index')}}" class ="btn-primary float-end">retour</a>
</div>
@include('partials.validation')
<form action ="{{ route('admin.posts.update', $post)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="title" class="form-lael">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')?? $post ->title}}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description : </label>
        <textarea class="form-control" id="description" rows="3" name="description">{{old('description')?? $post->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image">Image</label>
        <input type="file" class="forms-contriol-file" id="image" name="image">
    </div>

    @if($post->image!= null)
    <img src="{{asset('images/' . $post->image)}}" alt="Image" style="width:200px" class="d-block mb-3">
    @endif

<div class="mb-3">
    <div class="form-group">
        <label for="category" class="form-label">Catégorie: </label>
        <select class="form-control" id="category_id" name="category_id">
            <option value="">Aucune</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}" @if($category->id ==old('category_id')) selected @endif>{{ $category->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="mb-3">
    <div class="form-group">
        <label for="tag" class="form-label">Tags: </label>
        <select class="form-control" multiple id="tags" name="tags[]">
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}" 
                
                @if(
                    in_array($tag->id, old('tags', $post->tags->pluck('id')->toArray()))
                    )
                    {{-- @selected --}}
                @endif
        >
            {{$tag ->name}}
                    
            </option>
            @endforeach
        </select>
    </div>
</div>



    <div class="mb-3">
        <div class="form-check">
            <input type="hidden" name="published" value="0">
            <input class="form-check-input" type="checkbox" id="published" name="published"  value="1"

            @if(old('published', $post->published))
            checked

            
            @endif
            >
            <label class="form-check-label" for="published"> Publié </label>
        </div>
    </div>
        
    </div>
    <button class="btn btn-primary position-absolute top-50 start-50 translate-middle">Enregister</button>

    </form>
    

    @endsection


