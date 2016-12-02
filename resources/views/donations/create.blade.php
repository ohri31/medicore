@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">

            </div>
            <div class="col-md-9 col-sm-12">
                    <div class="panel-body">

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
    </div>
@endsection
