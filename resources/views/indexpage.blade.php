@extends('master')
@section('body')
	<div class="login container">
	{!! Form::open(['url' => '/store','method' => 'POST']) !!}
			<div class="addr mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			  {!! Form::label('time_in', '',['class'=>'mdl-textfield__label','for'=>'addr1' ,'placeholder'=>'']) !!}
			  {!! Form::text('time_in', '', ['class'=>'mdl-textfield__input','id'=>'addr1', 'placeholder'=>'']) !!}						
			</div>
			<div class="addr mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			  {!! Form::label('time_out', '',['class'=>'mdl-textfield__label','for'=>'addr1' ,'placeholder'=>'']) !!}
			  {!! Form::text('time_out', '', ['class'=>'mdl-textfield__input','id'=>'addr1', 'placeholder'=>'']) !!}			
			</div>
			<div class="addr mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			  {!! Form::label('date', '',['class'=>'mdl-textfield__label','for'=>'datepicker' ,'placeholder'=>'']) !!}
			  {!! Form::text('date', '', ['class'=>'mdl-textfield__input','id'=>'datepicker', 'placeholder'=>'']) !!}	
			</div>		  
       <main class="android-con mdl-layout__content">
       			{!! Form::submit('insert', ['class'=>'android-con mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored form-control' ]) !!}
       			<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored form-control" href="{{ url('/record') }}">
				 	 VIEW RECORD
				</a>
        </main>
	{!! Form::close() !!}
	</div>
@endsection