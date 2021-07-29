@extends('template.welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$ingredient->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$ingredient->nom}}</h5>
        <p class="card-text">{{$ingredient->quantitee}}</p>
        <form action="{{route('delete', $ingredient->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
        </div>
    </div>
@endsection