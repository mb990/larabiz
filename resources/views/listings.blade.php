@extends('layouts.app')

@section('content')
 <div class="row">
    <div class="jumbotron">
            <h1 class="text-center"> Welcome. </h1>
        </div>
    <div class="col-md-8 col-md-offset-2">

        <div class="panel panel-default">
            <div class="panel-heading">
            	Our latest business listings
            </div>

            <div class="panel-body">
               

                @if(count($listings))
                   
                    @foreach($listings as $listing)
                    	<p class="text-success"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></p>
                    @endforeach
                    
                    @else
                    	<p>No new listings.</p>
                @endif
            </div>
        </div>
    </div>
</div>      
@endsection
