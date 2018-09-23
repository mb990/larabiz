@extends('layouts.app')

@section('content')
 <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h3 class="text-info">Create new listing</h3>

            </div>

            <div class="panel-body">
               {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
		    	{{ Form::bsText('name', '', ['placeholder' => 'Company name']) }}
		    	{{ Form::bsText('address', '', ['placeholder' => 'Company address']) }}
		    	{{ Form::bsText('website', '', ['placeholder' => 'Company website']) }}
		    	{{ Form::bsText('email', '', ['placeholder' => 'Company email']) }}
		    	{{ Form::bsText('phone', '', ['placeholder' => 'Company phone']) }}
		    	{{ Form::bsTextArea('info', '', ['placeholder' => 'Company info']) }}		    	
		    	{{ Form::bsSubmit('Create', ['class' => 'center-block btn btn-primary']) }}
			{!! Form::close() !!}
            <form action="/home/">
                    <input type="submit" value="Cancel" class="btn btn-default center-block"></input>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection