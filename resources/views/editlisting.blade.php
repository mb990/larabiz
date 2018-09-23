@extends('layouts.app')

@section('content')
 <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <a class="btn btn-default center-block" href="/home">Back</a>
            <div class="panel-heading text-center"><h3 class="text-info">Update listing</h3>

            </div>

            <div class="panel-body">
               {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}   
                {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company name']) }}
                {{ Form::bsText('address', $listing->address, ['placeholder' => 'Company address']) }}
                {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company website']) }}
                {{ Form::bsText('email', $listing->email, ['placeholder' => 'Company email']) }}
                {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Company phone']) }}
                {{ Form::bsTextArea('info', $listing->info, ['placeholder' => 'Company info']) }}   
                {{ Form::hidden('_method', 'PUT') }}            
                {{ Form::bsSubmit('Confirm', ['class' => 'btn btn-primary center-block']) }}
            {!! Form::close() !!}
                <form action="/home/">
                    <input type="submit" value="Cancel" class="btn btn-default center-block"></input>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection