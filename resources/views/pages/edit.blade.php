@extends('master')

@section('content')
	{!! Form::model($song) !!}
	<div class='form-group'>
		{!! Form::text
           
		('title', null, ['class'=>'form-control'])!!}
	</div>
	<div class='form-group'>
		{!! Form::textarea
                 
		('lyrics', null, ['class'=>'form-control'])!!}
	</div>
	<div class='form-group'>
		{!! Form::submit
               
		('UpdateSong', null, ['class'=>'btn brn-primary'])!!}
	</div>
	{!!Form::close()!!}
@stop

@section('footer')
        Cristian Vintila
@stop