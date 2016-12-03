<div class="row">
  <div class="col-md-6 col-sm-12">
    <div class="">
      <div class="col-sm-12">
        <h3>Info o donaciji</h3>
            <hr />

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
                {!! Form::textarea('opis', null, ['class' => 'form-control', 'placeholder' => 'Opišite količinu i stanje Vaše donacije.', 'style' => 'height:100px']) !!}
                {!! $errors->first('opis', '<p class="help-block">:message</p>') !!}
            </div>
        </div>


        <div class="form-group {{ $errors->has('kolicina') ? 'has-error' : ''}}">
              {!! Form::label('kolicina', 'Količina', ['style' => 'margin-left:15px;', 'placeholder' => 'Odredite količnu donacijskih sredstava']) !!}
              <div class="clearfix"></div>
              <div class="col-md-8">
                  {!! Form::text('kol', null, ['class' => 'form-control', 'placeholder' => 'Kolicina']) !!}
                  {!! $errors->first('kol', '<p class="help-block">:message</p>') !!}
              </div>

              <div class="col-md-4">
                  {!! Form::text('jedinica', null, ['class' => 'form-control', 'placeholder' => 'Jedinica mjere']) !!}
                  {!! $errors->first('jedinica', '<p class="help-block">:message</p>') !!}
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
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <div class="">
      <div class="col-sm-12">
        <h3>Kontakt informacije</h3>
          <hr />

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
          <input type="checkbox" /> Objavi ime donatora nakon uspješne donacije
        </div>
      </div>


      <div class="form-group">
          <div class="col-md-12">

          </div>
      </div>
      <div class="clearfix"></div>
    </div>
    </div>
  </div>

  <div class="col-sm-12 command-line">

    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Objavi donaciju', ['class' => 'button']) !!}
    <a href="#" class="button button-white">Pošalji primjerak na mail</a>
    <div class="clearfix"></div>
  </div>

</div>
