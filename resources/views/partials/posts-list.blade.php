{{-- @extends('layouts.app')
@section('content')


@if(! $posts->isEmpty())
<div class="row">
<div class="col-9">
<div class="list-group w-auto mb-4">
@foreach ($posts as $post)
<a href="{{ route('posts.show', ['slug' => $post-›slug, 'id' => $post-›id]) }} class="list-group-item list-group-item-action d-flex gap-3 py-3">

<div class="d-flex gap-2 w-100 justify-content-between">
    <div>
<h6 class="mb-0">{{ $post-›title }} </h6> 
<p class="mb-2 opacity-75"> {{ $post-›description }}</p>
@if ($post-›category != null)
<p class="mb-1">
<small>Catégorie; </small> <span class= "badge rounded-pill bg-dark text-light d-inline-block">{{ $post-›category-›name }} </span>
</p>
@endif
@if(!$post->tags->isEmpty())
<p class="mb-1">
<small>Tags: </small> 
@foreach ($post->tags as $tag)
<span class="badge rounded-pill bg-info text-light d-inline-block">{{ $tag->name}}</span>

@endforeach
</p>
@endif
</div>
<small class="opacity-50 text-nowrap">Le {{ $post->created_at-›format('d/o/Y') }}</small>
</div>
</a> --}}
