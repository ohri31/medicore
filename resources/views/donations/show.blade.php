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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
