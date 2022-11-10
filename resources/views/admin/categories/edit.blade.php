@extends("layouts.app")
@section('content')
<div class=clearfix mb-4>
    <h1 class="float-start">Modification d'un article: </h1>
        <a href="{{route('admin.categories.index')}}" class ="btn-primary float-end">retour</a>
</div>

@include('partials.validation')

<form action ="{{ route('admin.categories.update', $category)}}" method="post">
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="Name" class="form-lael">Name</label>
            <input type="text" class="form-control" id="Name" name="name" value="{{old('name')?? $category ->name}}">
    </div>
   
    <button class="btn btn-primary position-absolute top-50 start-50 translate-middle">Enregister</button>

</form>
@endsection


