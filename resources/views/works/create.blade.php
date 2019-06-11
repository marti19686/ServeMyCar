@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                <!-- Formularz -->
                @include('works.form_errors')

                {!! Form::open(['url'=>'works', 'class'=>'form-horizontal']) !!}

                @include('works.form', ['buttonText'=>'Dodaj zlecenie'])

                {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop