@extends('master')
@section('content')
    
<div class="videos-header card">
    <h2>Moje Zlecenia</h2>
</div>

@if (Session::has('work_created'))
    <div class="alert alert-success  card">
        {{ Session::get('work_created')}}
    </div>
@endif

@if (Session::has('work_edited'))
    <div class="alert alert-primary  card">
        {{ Session::get('work_edited')}}
    </div>
@endif

@if (Session::has('work_deleted'))
    <div class="alert alert-danger  card">
        {{ Session::get('work_deleted')}}
    </div>
@endif

<div class="row">

    @foreach ($works as $work)
        <!-- Single work -->
        <div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            <div class="card-content">
                <a href="{{ url('works', $work->id) }}">
                    <h4>{{$work->title}}</h4>
                </a>
                <p>{{ str_limit($work->description, $limit=30) }}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">{{ $work->user->name }}k</span>
            </div>
            
        </div>
    </div>
    @endforeach
</div>
@stop