@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12 custom-form">
                      @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/donations', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('donations.form')

                        {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
