@extends('layouts.app')
@section('titolo', 'homepage')

@section('content')
    <div class="section-one">
        <div class="container">
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
    </div>

    <div class="section-two">
        <div class="container">
            <div class="section-two-title">
                <h3>I nostri numeri</h3>
                <div class="infographics">
                    <div class="single-info">
                        <div>
                            <img src="https://www.boolean.careers/images/icons/person.png" alt="logo_studenti">
                            <span class="info-description"> 700 +</span>
                            <p>GLI STUDENTI CHE FINO AD OGGI HANNO SEGUITO IL CORSO ONLINE DI BOOLEAN.</p>
                        </div>
                    </div>
                    <div class="single-info">
                        <div>
                            <img src="https://www.boolean.careers/images/icons/pacman.png" alt="logo_percentuali">
                            <span class="info-description"> 98 %</span>
                            <p>LA PERCENTUALE DEI NOSTRI STUDENTI CHE ORA LAVORA IN CAMPO TECH.</p>
                        </div>
                    </div>
                    <div class="single-info">
                        <div>
                            <img src="https://www.boolean.careers/images/icons/rettangolo.png" alt="logo_stipendi">
                            <span class="info-description"> 23.000 €</span>
                            <p>LO STIPENDIO MEDIO LORDO DI PARTENZA DEGLI STUDENTI ASSUNTI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
