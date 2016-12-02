@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12" style="margin-top:30px;">
              <div class="panel panel-info">
                <div class="panel-heading">Filter pretrage</div>
                <div class="panel-body">
                  <form action="" method="get">
                    <div class="form-group">
                      <label>Lokacija:</label>
                      <input name="lokacija" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Tip donacije:</label>
                      <input name="tipdonacije" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Ključna riječ:</label>
                      <input name="keyword" type="text" class="form-control" />
                    </div>
                    <input type="submit" class="btn btn-primary btnfix col-sm-12" value="Pretraži" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-12" style="margin-top:30px;">
                <div class="panel panel-info">
                    <div class="panel-heading">Donations</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                          @foreach($donations as $item)
                            <div class="donation-item">
                              <h4>{{ $item->doniram }}</h4>
                              <span class="opis">{{ $item->opis }}</span>
                              <div class="info">
                                <div class="item">
                                  <i class="fa fa-map-marker"></i> {{ $item->lokacija }}
                                </div>
                                <div class="item">
                                  <i class="fa fa-area-chart"></i> {{ $item->kolicina }}
                                </div>
                                <div class="item">
                                  <i class="fa fa-external-link"></i> <a href="{{ url('donations/'.$item->id) }}">Detaljne informacije</a>
                                </div>

                                <div class="clearfix"></div>
                              </div>
                              <div class="clearfix"></div>
                            </div>
                          @endforeach

                          <div class="pagination-wrapper"> {!! $donations->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
