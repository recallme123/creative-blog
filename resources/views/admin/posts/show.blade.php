@extends("layouts.app")
@section("content")


@if($post->category !=null)
<span class="badge rounded-pill bg-dark text-light d-inline-block mb-3">{{$post ->category->name}}</span>
@endif

<h1>{{ $post->title}}</h1>
<p>{{$post->description}}</p>

@if($post->image !=null)
<img src="{{asset('images/' . $post->image)}}" alt="Image" class="img-fluid">
@endif



@endsection