@extends('base')

@section('content')
    <h1>Articles</h1>
    
    <div class="row">
        <div class="col-3">
            sidebar
        </div>

        <div class="col">
            @foreach($articles as $article) 
            <a href="{{ route("article", ['id' => $article['id']]) }}">
                <div class="card mb-3">
                    <div class="wrapper">
                        <img class="card-img-top" src="https://www.littlethings.info/wp-content/uploads/2014/04/dummy-image-green-e1398449160839.jpg" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['name'] }}</h5>
                        <p class="card-text">{{ $article['content'] }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection