<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('title', 'Zlecenie:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('title',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('descriptiom', 'Dokłądny opis zlecenia:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::textarea('description',null,['class'=>'form-control'])!!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('client_name', 'Nazwa  klienta:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('client_name',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 control-label">
        {!! Form::label('client_contant', 'Dane kontaktowe:') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('client_contact',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($buttonText, ['class'=>'btn btn-primary'])!!}
    </div>
</div>