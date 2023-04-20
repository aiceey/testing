@extends('layout')

@section('content')
<h1>Create a new  Project</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="Project title" class="form-control" value="{{ old('title') }}">
		</div>

		<div>
			<textarea name="description" placeholder="description" class="form-control" value="{{ old('description') }}"></textarea>
		</div>

		<div>
			<button type="submit" class="btn btn-primary btn-block btn-lg">Create Project</button>
		<div>

@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error  }}</li>
				@endforeach
			</ul>
		</div>
@endif
	</form>

@endsection