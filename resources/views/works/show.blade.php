@extends('master')
@section('content')

    <div class="col-xs-12 videos-header card">
        <h2>{{$work->title}}</h2>
    </div>

    <div class="row">

        <!-- left col. -->
        <div class="col-xs-12 col-md-12 single-video-left">

            <div class="card">

                <div class="single-video-content">
                    <h4>Pełny opis naprawy</h4>
                    <p>{{$work->description}}</p>
                    <h5>Dane kontaktowe klienta</h5>
                    <p>{{$work->client_name}}</p>
                    <p>{{$work->client_contact}}</p>
                    <span class="upper-label">Dodał</span>
                    <span class="video-author">{{ $work->user->name }}</span>
                    <div class="edit-button">
                        @if(Auth::User() == true && Auth::User()->id == $work->user_id)
                        <a href="{{ action('WorksController@edit', $work->id) }}" class="btn btn-success btn-lg">
                            Edytuj Zlecenie
                        </a>
                        <a href="{{ action('WorksController@delete', $work->id) }}" class="btn btn-danger btn-lg">
                                Zakończ Zlecenie
                        </a>                        
                    @endif
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>

@stop