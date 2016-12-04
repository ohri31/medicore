<div class="form-group {{ $errors->has('doniram') ? 'has-error' : ''}}">
    <div class="col-md-offset-2 col-md-8 col-sm-12">
    	{!! Form::label('email', 'Email', ['style' => 'margin-left:15px;']) !!}
        {!! Form::text('email', null, ['class' => 'form-control col-md-4 col-sm-12 btnfix', 'placeholder' => 'Vaša email adresa']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}

        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Subscribe', ['class' => 'btn btn-success col-md-12 col-sm-12 col-xs-12 btnfix']) !!}
    </div>
</div>
