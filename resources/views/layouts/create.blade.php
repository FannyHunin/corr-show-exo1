@extends('template.welcome')

@section('content')
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ingrédient</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Quantitée</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="quantitee">
        <label for="exampleInputPassword1" class="form-label">Url image</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection