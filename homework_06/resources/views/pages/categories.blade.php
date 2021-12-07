@extends('base')

@section('content')
    <h1>კატეგორიები</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($categories as $category => $id)
        <a href="{{ route('category', ['id' => $id]) }}">
            <div class="col">
                <div class="card bg-dark text-dark card-hover">
                    <img src="https://www.bastiaanmulder.nl/wp-content/uploads/2013/11/dummy-image-square.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center text-center">
                        <h4 class="card-title">{{ $category }}</h4>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
@endsection