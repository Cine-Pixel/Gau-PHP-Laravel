@extends("index")

@section("content")
    <h1>Search cars</h1>

    <form action="" method="get">
        <label>
            <span>Release Date</span> <br>
            <input type="date" name="date1">
            <input type="date" name="date2">
        </label> 
        <br>
        <br>

        <label>
            <span>ganbajeba price</span> <br>
            <input type="number" name="ganbajeba">
        </label>
        <br>
        <br>

        <input type="submit" value="Search">
    </form>


    <h1>List of Cars</h1>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Model</td>
                <td>Release Date</td>
                <td>Engine</td>
                <td>Ganbajeba price</td>
                <td>Price</td>
            </tr>
        </thead> 

    @foreach ($cars as $car)
        <tr>
            <td>{{ $car->name }}</td> 
            <td>{{ $car->model }}</td> 
            <td>{{ $car->release_date }}</td> 
            <td>{{ $car->engine }}</td> 
            <td>{{ $car->ganbajeba }}</td> 
            <td>{{ $car->price }}</td> 
        </tr>
    @endforeach

    </table>
@endsection