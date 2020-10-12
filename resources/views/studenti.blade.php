@extends('layouts.app')
@section('titolo', 'Studenti')

@section('content')
    <div class="schede-studenti">
        @foreach ($data as $student)
        <div class="card-deck shadow-lg p-3 m-5 bg-white rounded">
              <div class="card">
                <img class="card-img-top rounded-circle" src="{{ $student['img']}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $student['nome']}} {{ $student['eta']}}</h5>
                  <h5 class="card-text"> Assunto da {{ $student['azienda']}}</h5>
                  <p class="card-text">{{ $student['descrizione']}}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
@endsection
