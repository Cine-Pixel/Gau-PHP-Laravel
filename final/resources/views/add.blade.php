@extends("index")

@section("content")
<form action="{{ route("add") }}" method="post">
    @csrf

    <label>
        <span>Name</span> <br>
        <input type="text" name="name">
    </label> <br>

    <label>
        <span>Model</span> <br>
        <input type="text" name="model">
    </label> <br>

    <label>
        <span>Release Date</span> <br>
        <input type="date" name="release_date">
    </label> <br>

    <label>
        <span>Engine</span> <br>
        <input type="number" name="engine">
    </label> <br>

    <label>
        <span>Ganbjeba</span> <br>
        <input type="number" name="ganbajeba">
    </label> <br>

    <label>
        <span>Price</span> <br>
        <input type="number" name="price">
    </label> <br>

    <input type="submit" value="Submit">
</form>
@endsection