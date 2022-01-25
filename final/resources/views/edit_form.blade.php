@extends("index")

@section("content")
<form action="{{ route("edit") }}" method="post">
    @csrf

    <label>
        <span>Name</span> <br>
        <input type="text" name="name" value="{{ $car->name }}">
    </label> <br>

    <label>
        <span>Model</span> <br>
        <input type="text" name="model" value="{{ $car->model }}">
    </label> <br>

    <label>
        <span>Release Date</span> <br>
        <input type="datetime" name="release_date" value="{{ $car->release_date }}">
    </label> <br>

    <label>
        <span>Engine</span> <br>
        <input type="number" name="engine" value="{{ $car->engine }}">
    </label> <br>

    <label>
        <span>Ganbjeba</span> <br>
        <input type="number" name="ganbajeba" value="{{ $car->ganbajeba }}">
    </label> <br>

    <label>
        <span>Price</span> <br>
        <input type="number" name="price" value="{{ $car->price }}">
    </label> <br>

    <input type="hidden" name="id" value="{{ $car->id }}">

    <input type="submit" value="Submit">
</form>
@endsection