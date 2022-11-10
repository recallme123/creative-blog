@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="mb-4 fw-bold">Les articles créatives: </h1>
        <div>
            <a class="btn btn-primary mt-1" href="{{ route('admin.posts.create') }}">Créer</a>
        </div>
    </div>

<div class="list-group w-auto mb-4">
    @if (!($posts->isEmpty()))
        @foreach ( $posts as $post )
            <div class="d-flex gap-2 w-75 justify-content-between align-items-center">
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                    <div>
                        @if($post->category!=null)       
                        <span class="badge rounded-pill bg-dark text-light d-inline-block mb-3">{{$post->category->name}}</span>
                        @endif

    @if(!$post->tags->isEmpty())
        <p class="mb-1">
            <small>Tags : </small>
        @foreach ($post->tags as $tag)
            <span class="bagde rondded-pill bg-info text-light d-inline-block">{{$tag->name}}</span>
        @endforeach
        </p>
        @endif
    <h6 class="mb-0">{{$post->title}}</h6>
        <p class="mb-0 opacity-75">{{$post->description}}</p>
            </div>
                @if($post->published)
                    <span class="badge bg-success">Publié</span>
                @else
                    <span class="badge bg-warning tewt-dark">Non publié</span>
                @endif
                    <small class="opacity-50 text-nowrap">{{$post -> created_at}}</small>
                </a>
                <a href="{{ route('admin.posts.edit', $post)}}" class="d-inline-block ms-2">
                    <i class="bi bi-pencil-fill"></i>
                </a>
                    <div>
                        <form method="post" action="{{route('admin.posts.destroy', $post)}}">
                            @csrf
                            {{ method_field('DELETE') }}
                            
                            <button class="btn px-0 text-danger" onclick="if(!confirm('Voulez vous vraiment supprimer cet article?')) {return false;}">
                            <i class = "bi bi-trash3-fill "></i>
                            </button>

                    </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection