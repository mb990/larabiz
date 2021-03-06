@extends('layouts.app')

@section('content')
 <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard <span class="pull-right"><a class="btn btn-xs btn-success" href="/listings/create">Create new</a></span></div>

            <div class="panel-body">
               

                @if(count($listings))

                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{$listing->name}}</td>
                            <td></td>
                            <td>                              
                                {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::bsSubmit('Delete', ['class' => 'pull-right btn btn-xs btn-danger']) }}
                                {!! Form::close() !!}</a>
                                <a href="/listings/{{$listing->id}}/edit" class=" pull-right btn btn-xs btn-info">Edit</a>
                                <a href="/listings/{{$listing->id}}" class=" pull-right btn btn-xs btn-default">View</a>
                            </td> 
                        </tr>
                        @endforeach
                       
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>      
@endsection
