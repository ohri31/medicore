@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Donations</div>
                    <div class="panel-body">

                        <a href="{{ url('/donations/create') }}" class="btn btn-primary btn-xs" title="Add New Donation"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Doniram </th><th> Opis </th><th> Kolicina </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($donations as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->doniram }}</td><td>{{ $item->opis }}</td><td>{{ $item->kolicina }}</td>
                                        <td>
                                            <a href="{{ url('/donations/' . $item->id) }}" class="btn btn-success btn-xs" title="View Donation"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/donations/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Donation"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/donations', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Donation" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Donation',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $donations->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection