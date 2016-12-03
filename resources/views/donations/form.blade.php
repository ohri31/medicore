<div class="form-group {{ $errors->has('doniram') ? 'has-error' : ''}}">
    {!! Form::label('doniram', 'Donacija', ['style' => 'margin-left:15px;']) !!}
    <div class="col-md-12">
        {!! Form::select('doniram', array(
            'FINANCIJSKA_POMOC'       => 'Financijska pomoć', 
            'HRANA'                   => 'Hrana',
            'SRED_ZA_LINCNU_HIGIJENU' => 'Sredstva za ličnu higijenu',
            'SRED_ZA_CISCENJE'        => 'Sredstva za čišćenje',
            'ODJECA'                  => 'Odjeća',
            'OBUCA'                   => 'Obuća',
            'SPORTSKA_OPREMA'         => 'Sportska oprema',
            'ZASTITNA_OPREMA'         => 'Zaštitna oprema',
            'BIJELA_TEHNIKA'          => 'Bijela tehnika',
            'PRIBOR_ZA_RADIONICE'     => 'Pribor za radionice',
            'DJECIJE_IGRACKE'         => 'Dječije igračke',
            'OSTALO'                  => 'Ostalo'
            ), null, ['class' => 'form-control']) 
        !!}
        {!! $errors->first('doniram', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('opis') ? 'has-error' : ''}}">
    {!! Form::label('opis', 'Opis', ['style' => 'margin-left:15px;']) !!}
    <div class="col-md-12">
        {!! Form::textarea('opis', null, ['class' => 'form-control', 'placeholder' => 'Opišite količinu i stanje Vaše donacije.']) !!}
        {!! $errors->first('opis', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kolicina') ? 'has-error' : ''}}">
    {!! Form::label('kolicina', 'Kolicina', ['style' => 'margin-left:15px;', 'placeholder' => 'Odredite količnu donacijskih sredstava']) !!}
    <div class="col-md-12">
        {!! Form::text('kolicina', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kolicina', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lokacija') ? 'has-error' : ''}}">
    {!! Form::label('lokacija', 'Lokacija', ['style' => 'margin-left:15px;']) !!}
    <div class="col-md-12">
        {!! Form::select('lokacija', array(
                'SARAJEVO'   => 'Sarajevo',
                'ZENICA'     => 'Zenica',
                'BANJA_LUKA' => 'Banja Luka',
                'MOSTAR'     => 'Mostar',
                'TUZLA'      => 'Tuzla',
                'BIHAC'      => 'Bihać',
                'TRAVNIK'    => 'Travnik',
                'MOSTAR'     => 'Mostar',
                'NEUM'       => 'Neum',
                'DOBOJ'      => 'Doboj',
                'OTHER'      => 'Drugo'

            ), null, ['class' => 'form-control']) 
        !!}
        {!! $errors->first('lokacija', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('ime') ? 'has-error' : ''}}">
    {!! Form::label('ime', 'Ime', ['style' => 'margin-left:15px;', 'placeholder' => 'Vaše ime']) !!}
    <div class="col-md-12">
        {!! Form::text('ime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ime', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('prezime') ? 'has-error' : ''}}">
    {!! Form::label('prezime', 'Prezime', ['style' => 'margin-left:15px;', 'placeholder' => 'Vaše prezime']) !!}
    <div class="col-md-12">
        {!! Form::text('prezime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prezime', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['style' => 'margin-left:15px;', 'placeholder' => 'Vaša e-mail adresa']) !!}
    <div class="col-md-12">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telefon') ? 'has-error' : ''}}">
    {!! Form::label('telefon', 'Telefon', ['style' => 'margin-left:15px;', 'placeholder' => 'Vaš kontakt telefon (+387 6x xxx xxx)']) !!}
    <div class="col-md-12">
        {!! Form::text('telefon', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefon', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-12">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Objavi donaciju', ['class' => 'btn btn-success pull-right']) !!}
    </div>
</div>
