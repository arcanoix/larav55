@extends('layouts/app');

@section('content')


				<div class="container">
					
						{!! Form::open(['url' => '']) !!}
								<div class="form-group">
							        {!! Form::label('title', 'Title:') !!}
							        {!! Form::text('title', null, ['class'=>'form-control']) !!}
							    </div>

							    <div class="form-group">
							        {!! Form::label('description', 'Description:') !!}
							        {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5] ) !!}
							    </div>

							    <div class="form-group">
							        {!! Form::label('image', 'Choose an image') !!}
							        {!! Form::file('image') !!}
							    </div>

							    <div class="form-group">
							        {!! Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )) !!}
							    </div>

							    {!! Form::close() !!}
							    <div class="alert-warning">
							        @foreach( $errors->all() as $error )
							           <br> {{ $error }}
							        @endforeach
							    </div>

						{!! Form::close() !!}
				</div>

			


@endsection