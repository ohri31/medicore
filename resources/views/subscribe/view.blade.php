@extends('layouts.app')

@section('content')
<!-- Cover image and call to action -->
<div class="cover-image" style="background-image: none;">
  <div class="col-md-offset-2 col-md-8 col-sm-12">
    <h1 align="center" style="color: #424242;">Pretplata</h1>
    <span class="opis" style="color: #424242">Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. </span>
      <div class="clearfix"></div>

      	<hr style="border-color:#e7e7e7;width:20%;margin-top:25px;"/>
      	
    {!! Form::open(['url' => '/subscribe', 'class' => 'form-horizontal', 'files' => true]) !!}
		  @include ('subscribe.form')
    {!! Form::close() !!}

		
  </div>
</div>
<!-- Endof cover image and call to action -->

<div class="container">
    <div class="row">




    </div>
</div>
@endsection
