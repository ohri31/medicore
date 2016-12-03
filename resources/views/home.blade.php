@extends('layouts.app')

@section('content')
<!-- Cover image and call to action -->
<div class="cover-image">
  <div class="col-md-offset-2 col-md-8 col-sm-12">
    <h1>Pomozi socijalno ugroženima</h1>
    <span class="opis">Fabrika sreće je <b>servis</b> koji pruža ljudima mogućnost da brzo i efikasno pristupe procesu doniranja sredstava i pomaganja drugima.</span>
      <div class="clearfix"></div>

      <hr style="border-color:#e7e7e7;width:20%;margin-top:25px;"/>

    <a class="btn btn-success col-md-offset-4 col-md-4 col-sm-12 btnfix" href="{{url('/donations/create')}}">Doniraj</a>
    <a class="btn btn-default col-md-offset-4 col-md-4 col-sm-12 btnfix" href="{{url('/subscribe')}}">Budi aktivan</a>
  </div>
</div>
<!-- Endof cover image and call to action -->

<div class="part">
  <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12" style="text-align:right;">
          <h2>O Fabrici sreće</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ut sem vitae iaculis. Vivamus at lacinia augue, feugiat ultricies justo. Nulla id varius erat. Fusce pharetra felis vitae est molestie, ac blandit felis vestibulum. Sed eget orci in augue scelerisque scelerisque. Vestibulum sollicitudin, metus et iaculis bibendum, nulla augue ornare leo, nec tincidunt orci enim in ligula. Praesent elit elit, tristique a tristique quis, elementum at odio. Quisque orci nulla, pellentesque et euismod sed, convallis pharetra ex. Nullam rhoncus, enim ut suscipit sagittis, erat diam vestibulum nisi, et gravida risus odio sed elit. Praesent volutpat vitae ipsum ac mollis. Donec non posuere dui. Integer diam nunc, laoreet eget ligula porttitor, laoreet condimentum felis. Nullam venenatis nunc augue. Integer vitae sapien orci.
        </div>
        <div class="col-md-6 col-sm-12">
          <h2>Supporter club</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ut sem vitae iaculis. Vivamus at lacinia augue, feugiat ultricies justo. Nulla id varius erat. Fusce pharetra felis vitae est molestie, ac blandit felis vestibulum. Sed eget orci in augue scelerisque scelerisque. Vestibulum sollicitudin, metus et iaculis bibendum, nulla augue ornare leo, nec tincidunt orci enim in ligula. Praesent elit elit, tristique a tristique quis, elementum at odio. Quisque orci nulla, pellentesque et euismod sed, convallis pharetra ex. Nullam rhoncus, enim ut suscipit sagittis, erat diam vestibulum nisi, et gravida risus odio sed elit. Praesent volutpat vitae ipsum ac mollis. Donec non posuere dui. Integer diam nunc, laoreet eget ligula porttitor, laoreet condimentum felis. Nullam venenatis nunc augue. Integer vitae sapien orci.
        </div>
        <div class="clearfix"></div>

      </div>
  </div>
</div>


<div class="part">
  <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-12">
          <img src="{{ url('img/mockup.png')}}" style="width:100%;" />
        </div>
        <div class="col-md-7 col-sm-12" style="margin-bottom:30px;">
          <h2>FS Widget - Build the community!</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fringilla ut sem vitae iaculis. Vivamus at lacinia augue, feugiat ultricies justo. Nulla id varius erat. Fusce pharetra felis vitae est molestie, ac blandit felis vestibulum. Sed eget orci in augue scelerisque scelerisque. Vestibulum sollicitudin, metus et iaculis bibendum, nulla augue ornare leo, nec tincidunt orci enim in ligula. Praesent elit elit, tristique a tristique quis, elementum at odio. Quisque orci nulla, pellentesque et euismod sed, convallis pharetra ex. Nullam rhoncus, enim ut suscipit sagittis, erat diam vestibulum nisi, et gravida risus odio sed elit. Praesent volutpat vitae ipsum ac mollis. Donec non posuere dui. Integer diam nunc, laoreet eget ligula porttitor, laoreet condimentum felis. Nullam venenatis nunc augue. Integer vitae sapien orci.
        </div>


        <div class="col-sm-12" style="padding:0;">
          <div class="col-md-4 col-sm-12">
            <a href="#" class="col-md-12 btn btn-default btnfix"><i class="fa fa-github"></i> Get on Github</a>
          </div>
          <div class="col-md-4 col-sm-12">
            <a href="#" class="col-md-12 btn btn-default btnfix"><i class="fa fa-code"></i>  Get code snippet</a>
          </div>
          <div class="col-md-4 col-sm-12">
            <a href="#" class="col-md-12 btn btn-default btnfix"><i class="fa fa-wordpress"></i>  Wordpress plugin</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
