<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog Créative</title>
</head>
<body>
​    
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Blog Créative</span>
            </a>
​
            <ul class="nav nav-pills">                
                <li class="nav-item mr-2"><a href="/" class="nav-link active">Accueil</a></li>                
                <li class="nav-item mr-2"><a href="{{route('admin.dashboard')}}" class="btn btn-outline-primary">Administration</a></li>
                @auth               
                    <li>
                        <form method="POST" action="{{ route ('logout') }}">
                            @csrf                       
                            {{-- <button  class="btn btn-outline-primary"  onclick="event.preventDefault(); this.closeset('form').submit();">Deconnexion</button> --}}
                            <button class=" btn btn-outline-primary nav-item" >Deconnexion</button>
                        </form>
                    </li>
                @endauth            
            </ul>
        </header>
    </div>
​    
    <div class="container" id="news" style="margin-bottom:150px">
        <div class="flex justify-end ">
        </div>
        @include('partials.alert')
    @yield('content')
    </div>
​         
    <div class="container">
        <p>© 2022 Créative - Tous droits réservés</p>
    </div>
    
</body>
</html>