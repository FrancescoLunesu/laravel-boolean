@extends('layouts.app')
@section('titolo', 'homepage')

@section('content')
    <div class="section-one">
        <div class="jumbotron-boolean">
            <div class="jumbotron-title">
                <h2>Cambia la tua vita.</h2>
                <h2>Entra in Boolean.</h2>
            </div>
            <div class="jumbotron-subtitle">
                <h4>Segui il corso, diventi un web developer e trovi lavoro</h4>
            </div>
            <div class="jumbotron-body">
                <ul>
                    <li><i class="fas fa-angle-right"></i> 6 mesi di corso full time, online e in diretta</li>
                    <li><i class="fas fa-angle-right"></i> Nessuna competenza di programmazione richiesta</li>
                    <li><i class="fas fa-angle-right"></i> Se non trovi lavoro ti rimborsiamo</li>
                </ul>
            </div>
            <div class="jumbotron-button">
                <button type="button" name="Candidati-ora"> Canditati Ora</button>
            </div>
        </div>
        <div class="animated-logo">
            <img src="https://www.boolean.careers/images/visual/homeHeader.gif" alt="animated_logo_boolean">
        </div>
    </div>
@endsection
