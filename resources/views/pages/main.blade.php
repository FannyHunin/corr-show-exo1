@extends('template.welcome')

@section('content')
    <h1>Home</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Ingrédient</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataAll as $item)
            <tr>
                <th scope="row"><a href="{{route('show',$item->id)}}">{{$item->nom}}</a></th>
                <td>
                    <form action="{{route('delete', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection