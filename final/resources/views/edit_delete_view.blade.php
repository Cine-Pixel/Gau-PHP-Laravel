@extends("index")

@section("content")
    <h1>List of cars</h1>

    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Model</td>
                <td>Release Date</td>
                <td>Engine</td>
                <td>Ganbajeba</td>
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
             <td>
                <form action="{{ route('delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $car->id }}">  
                    <input type="submit" value="Delete">
                </form>
            </td>

            <td>
                <form action="{{ route('edit') }}" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{ $car->id }}">  
                    <input type="submit" value="Edit">
                </form>
            </td>
        </tr>
    @endforeach

    </table>
@endsection