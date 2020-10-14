@extends('layouts.app')
@section('titolo', 'Studenti')

@section('content')

    <div class="container">
        <div class="studentspage-title">
            <h3>I nostri ex- studenti su LinkedIn</h3>
            <h5>Tu ci metti l'impegno, noi tutta la trasparenza. Siamo pronti a scommettere su di te.</h5>
        </div>
        <div class="schede-studenti">
            @foreach ($data as $key => $student)
            <div class="card-deck shadow-lg p-3 m-5 bg-white rounded">
                  <div class="card">
                    <img class="card-img-top rounded-circle" src="{{ $student['img']}}" alt="Card image cap">
                    <div class="card-body">
                      <a href="{{ route('Student.show', ['id' => $key] ) }}"> <h5 class="card-title">{{ $student['nome']}} {{ $student['eta']}}</h5> </a>
                      <h5 class="card-text"> Assunt{{ ($student['genere'] == 'f') ? 'a': 'o'}} da {{ $student['azienda'] }}</h5>
                      <p class="card-text">{{ $student['descrizione']}}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
