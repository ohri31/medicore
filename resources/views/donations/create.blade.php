@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="panel panel-info" style="margin-top:30px;">
                <div class="panel-heading"><i class="fa fa-info" aria-hidden="true"></i> Uputstvo za kreiranje</div>
                    <div class="panel-body">

                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non purus et massa rhoncus commodo at vel quam. In a aliquam lectus. Suspendisse nisi mauris, euismod nec facilisis sit amet, faucibus ut ante. Nam ante velit, dictum a ultricies a, convallis in massa. Aenean pharetra vehicula placerat.
                        <hr />
                      Mauris molestie tristique libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Mauris molestie tristique libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        <hr />
                        Mauris molestie tristique libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Mauris molestie tristique libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-12">
              <div class="panel panel-info" style="margin-top:30px;">
                <div class="panel-heading">Kreirajte ponudu donacije</div>
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
    </div>
@endsection
