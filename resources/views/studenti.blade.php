@extends('layouts.app')
@section('titolo', 'Studenti')

@section('content')
    <div class="card-group">
        @foreach ($data as $student)
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ $student['img']}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ $student['nome']}}</h5>
                <p class="card-text">{{ $student['descrizione']}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach

    </div>
@endsection
