@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12" style="margin-top:30px;">
                <div class="panel panel-info">
                    <div class="panel-heading">Informacije o donaciji</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Doniram </th><td> {{ $donation->doniram }} </td></tr>
                                    <tr><th> Opis </th><td> {{ $donation->opis }} </td></tr>
                                    <tr><th> Kolicina </th><td> {{ $donation->kolicina }} </td></tr>
                                    <tr><th> Ime i prezime </th><td> {{ $donation->ime }} {{ $donation->prezime }} </td></tr>
                                    <tr><th> Kontakt e-mail </th><td> {{ $donation->email }} </td></tr>
                                    <tr><th> Kontakt telefon </th><td> {{ $donation->telefon }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pull-left" style="color:#2ab27b;margin-bottom:15px;">
                          <i class="fa fa-globe"></i> Dostupna donacija
                        </div>

                        <!--<div class="pull-left" style="color:#b2b02a;margin-bottom:15px;">
                          <i class="fa fa-clock-o" aria-hidden="true"></i> Čeka se verifikacija
                        </div>-->
                        <!--<div class="pull-left" style="color:#b2b02a;margin-bottom:15px;">
                          <i class="fa fa-times-circle-o" aria-hidden="true"></i> Nije verifikovano
                        </div>
                        <div class="pull-left" style="color:#2ab27b;margin-bottom:15px;">
                          <i class="fa fa-check-circle-o"></i> Verifikovana donacija
                        </div>-->

                        <a class="btn btn-success pull-right col-sm-12 col-xs-12 col-md-3" style="margin-left:15px;margin-bottom:15px;" href="javascript:zatrazi_donaciju()">Zatraži donaciju</a>
                        <a class="btn btn-danger pull-right col-sm-12 col-xs-12 col-md-3" href="javascript:zatrazi_donaciju()">Prijavi donaciju</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
