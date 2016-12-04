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
          Fabrika sreće je servis koji pruža uvid u registar donacija namijenjenih kao pomoć socijalno ugroženima osobama i grupama. Ono što karakteriše servis koji pruža Fabrika sreće jeste jednostavan i brz način unosa informacija o donaciji, kao i pregledan i efikasan pronalazak istih od strane humanitarnih organizacija. Naš prvenstveni cilj jeste da povežemo i olakšamo humanitarnim organizacijama proces pronalaska sredstava i resursa kako bi adekvatno pružile pomoć svim ljudima koji se nalaze u ugroženoj skupini.
        </div>
        <div class="col-md-6 col-sm-12">
          <h2>Supporter club</h2>
          Dio Supporter club-a Fabrike sreće možete postati na dva načina: direktnom donacijom finansijskih sredstava u cilju pomoći radu i funkcionisanju servisa ili donacijom određenih sredstava (finansijskih/materijalnih) u humanitarne svrhe putem našeg servisa. Članovi Supporter club-a će svoje ime imati objavljeno na našoj Hall of fame stranici i bit će istaknuti kao humanitarci i učesnici u procesu pomaganja socijalno ugroženima i obespravljenima.
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
          Jedan od načina da pomognete radu i promociji Fabrike sreće jeste da implementirate naš widget na svojoj web stranici/servisu te na taj način olakšate proces prijavljivanja donacije u naš registar. Također, implementacijom widgeta na svojoj web stranici pomažete u procesu promocije i jačanja mreže humanitaraca i humanitarnih organizacija na području Bosne i Hercegovine.
            <br /><br />
          <b>Code snippet:</b>
            <br /><br />
          <code>
            &lt;iframe width="WIDTH" height="HEIGHT" src="{{ url('frameplugin') }}"&gt;

            &lt;/iframe&gt;
          </code>
            <br /><br />
          <i>WIDTH i HEIGHT podesite prema karakteristikama Vaše stranice.</i>
        </div>

        <!--
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
      -->
      </div>
  </div>
</div>
@endsection
