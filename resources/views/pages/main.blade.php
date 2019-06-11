@extends('master')
@section('content')
<img scr="/img/logo_1.jpg" width="200px" />

    <div class="videos-header card">
        <h2 class="text-center">Chcesz naprawić swoje auto?</h2><br>
        <h4 class="text-center">Znajdź swój serwis i umów się już teraz!</h4><br>
        <button type="button" class="btn btn-outline-success save_button">Zleć naprawę teraz</button>

    </div>

    <div class="videos-header card">
        <h2 class="text-center">Chcesz stworzyć swój warsztat?</h2><br>
        <h4 class="text-center">Utwórz swoją wizytówkę i zacznij już teraz!</h4><br>
        <button type="button" class="btn btn-outline-primary save_button">Zarejestruj się</button>
    </div>

    <div class="videos-header card">
        <h2 class="text-center">Znajdź swój serwis</h2><br>
        <button type="button" class="btn btn-outline-danger save_button">Więcej</button>
    </div>

    <div class="row">
     
        <!-- Single service -->
        <div class="col-xs-12 col-md-6 col-lg-4 single-video">
            <div class="card">
            
                <div class="card-content">
                    <a href="">
                        <center><img src="/img/logo_2.png" width="200" height="120px"></center>
                    </a>
                    <h4>SCDS</h4>
                    <p>Naprawa z dojazdem do klienta</p>
                    <span class="upper-label">Adres</span>
                    <span class="video-author">Poznań, ul.Akacjowa 12</span>
                    <span class="upper-label">Kontak</span>
                    <span class="video-author">832-324-323</span>
                </div>
                
            </div>
        </div>
    
        <!-- Single service -->
        <div class="col-xs-12 col-md-6 col-lg-4 single-video">
            <div class="card">
            
                <div class="card-content">
                    <a href="">
                        <center><img src="/img/logo_1.jpg" width="200" height="120px"></center>
                    </a>
                    <h4>Fast Service</h4>
                    <p>Jesteśmy czynni całą dobę</p>
                    <span class="upper-label">Adres</span>
                    <span class="video-author">Kalisz, ul.Zdrowa 2</span>
                    <span class="upper-label">Kontakt</span>
                    <span class="video-author">743-312-322</span>
                </div>
                
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4 single-video">
            <div class="card">
            
                <div class="card-content">
                    <a href="">
                        <center><img src="/img/logo_3.png" width="200" height="120px"></center>
                    </a>
                    <h4>Ewerpol</h4>
                    <p>Najlepsze opony w mieście</p>
                    <span class="upper-label">Adres</span>
                    <span class="video-author">Wrocław, ul.Nowa 22</span>
                    <span class="upper-label">Kontakt</span>
                    <span class="video-author">423-312-322</span>
                </div>
                
            </div>
        </div>
    </div>
    
@stop