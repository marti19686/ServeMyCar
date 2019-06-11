@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                <!-- Formularz -->
                @include('works.form_errors')

                {!! Form::model($work, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['WorksController@update', $work->id]]) !!}

                @include('works.form', ['buttonText'=>'Edytuj zlecenie'])

                {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop