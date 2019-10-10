



<div class="card-body">
{{ Form::open(array('route' => array('editMailInformations'), 'method' => 'POST')) }}

<div class="row">
            <div class="col-md-12">
<div class="form-group ">
    {{ Form::label('MAIL_DRIVER', 'MAIL DRIVER*:') }}
    {!! Form::text('MAIL_DRIVER', env('MAIL_DRIVER'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}

 </div>
</div>
</div>

    <div class="row">
            <div class="col-md-8">
<div class="form-group ">
    {{ Form::label('MAIL_HOST', 'Mail Server*:') }}
    {!! Form::text('MAIL_HOST', env('MAIL_HOST'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}

 </div>
</div>

<div class="col-md-2">
<div class="form-group ">
    {{ Form::label('MAIL_PORT', 'Port*:') }}
    {!! Form::text('MAIL_PORT', env('MAIL_PORT'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}

 </div>
</div>

<div class="col-md-2">
<div class="form-group ">
    {{ Form::label('MAIL_ENCRYPTION', 'Encryption*:') }}
    {!! Form::text('MAIL_ENCRYPTION', env('MAIL_ENCRYPTION'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}

 </div>
</div>
</div>

<div class="row">
            <div class="col-md-12">
<div class="form-group ">
    {{ Form::label('MAIL_USERNAME', 'Login Name*:') }}
    {!! Form::text('MAIL_USERNAME', env('MAIL_USERNAME'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}

 </div>
</div>
</div>

<div class="row">
            <div class="col-md-12">
<div class="form-group ">
    {{ Form::label('MAIL_PASSWORD', 'Password*:') }}
    {!! Form::text('MAIL_PASSWORD', env('MAIL_PASSWORD'), ['class' => 'form-control form-control-sm', 'placeholder' => '']) !!}

 </div>
</div>


<div class="mx-auto">
<button class="btn btn-primary btn-sm" type="submit">Salveaza modificarile</button>
</div>

{{ Form::close() }}



