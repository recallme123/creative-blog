@extends("layouts.app")
@section("content")


@if($post->category !=null)
<span class="badge rounded-pill bg-dark text-light d-inline-block mb-3">{{$post ->category->name}}</span>
@endif



{{-- @if($post->category !=null)
<p class="mb-1">
    <small>Catégorie: </small> <span class="badge rounded-pill bg-dark text-light d-inline-block"›{{$post->category->name}}</span> 
</p>             I
@endif --}}

@if(!$post->tags->isEmpty())
    <p class="mb-1">
        <small>Tags : </small>
    @foreach ($post->tags as $tag)
        <span class="bagde rondded-pill bg-info text-light d-inline-block">{{$tag->name}}</span>
    @endforeach
    </p>
@endif


<h1>{{ $post->title}}</h1>
<p>{{$post->description}}</p>

@if($post->image !=null)
<img src="{{asset('images/' . $post->image)}}" alt="Image" class="img-fluid">
@endif

@endsection