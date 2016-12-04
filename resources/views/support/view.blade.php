@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row fame">
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/xbox.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/xbox.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/xbox.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/xbox.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/xbox.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/xbox.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
	</div>
	<div class="row odd fame">
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/male.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/male.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/male.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/female.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/female.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
		<div class="col-sm-2 fame-box">
			<img class="img-responsive" src="{{ url('/img/female.png') }}">
		  	<div class="text-center logo-name">John Doe</div>
		</div>
	</div>
	<div class="row fame">
		<div class="col-sm-6 fame-box">
		  	<div class="text-left logo-name font-large buttom-border"><i class="fa fa-user"></i> John Doe <span class="pull-right">DD. Month, YYYY</span></div>
		</div>
		<div class="col-sm-6 fame-box pull-right">
		  	<div class="text-left logo-name font-large buttom-border"><i class="fa fa-user-o"></i> John Doe <span class="pull-right">DD. Month, YYYY</span></div>
		</div>
		<div class="col-sm-6 fame-box">
		  	<div class="text-left logo-name font-large buttom-border" style="color: green;"><i class="fa fa-leaf"></i> Organizacija #1 <span class="pull-right" style="color: gray;">DD. Month, YYYY</span></div>
		</div>
		<div class="col-sm-6 fame-box pull-right">
		  	<div class="text-left logo-name font-large buttom-border" style="color: red;"><i class="fa fa-users"></i> Organizacija #2 <span class="pull-right" style="color: gray;">DD. Month, YYYY</span></div>
		</div>
	</div>
</div>
@endsection
