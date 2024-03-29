@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Donation {{ $donation->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($donation, [
                            'method' => 'PATCH',
                            'url' => ['/donations', $donation->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('donations.form', ['submitButtonText' => 'Spremi promjene'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
