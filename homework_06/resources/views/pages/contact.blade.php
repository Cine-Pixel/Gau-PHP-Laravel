@extends('base')

@section('content')
    <h1>კონტაქტი</h1>

    <br>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">ელექტრონული ფოსტა</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleFormControlInput1">სათაური</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">შეტყობინება</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection