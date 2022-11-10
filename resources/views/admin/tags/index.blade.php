@extends('layouts.app')
@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="mb-4 fs-2 fw-bold">Les tags: </h1>
        <div>
            <a class="btn btn-primary mt-1" href="{{ route('admin.tags.create') }}">Créer</a>
        </div>
    </div>

    <div class="list-group w-auto mb-4">
        @if (!($tags->isEmpty()))
            @foreach ( $tags as $tag )
                <div class="d-flex gap-2 w-75 justify-content-between align-items-center">
                    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                        <div>
                            <h6 class="mb-0">{{$tag->name}}</h6>                          
                        </div>                       
                        <small class="opacity-50 text-nowrap">{{$tag-> created_at}}</small>
                    </a>
                    <a href="{{ route('admin.tags.edit', $tag)}}" class="d-inline-block ms-2">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <div>
                        <form method="post" action="{{route('admin.tags.destroy', $tag)}}">
                            @csrf
                            {{ method_field('DELETE') }}                           
                            <button class="btn px-0 text-danger" onclick="if(!confirm('Voulez vous vraiment supprimer ce atgs?')) {return false;}">
                            <i class = "bi bi-trash3-fill "></i>
                            </button>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection