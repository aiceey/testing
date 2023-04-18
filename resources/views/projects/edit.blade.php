@extends('layout')

@section('content')
	<h1>Edit Project</h1>

	<form method="POST" action="/projects/{{ $project->id }}">
		@method('PATCH')
		@csrf
		<!-- {{ method_field('PATCH') }} <!-- HIDDEN patch 
		{{ csrf_field() }} -->
		<div class="field">
			<label class="label">Title</label>

			<div>
				<input class="form-control" type="text" placeholder="Title" name="title" value="{{ $project->title }}">
			</div>
		</div>

		<div class="field">
			<label class="label">Description</label>

			<div >
				<textarea type="text" name="description" class="form-control" > {{ $project->description }}</textarea>
			</div>
		</div>
		<br>
		<div class="row">
			<div>
				<button type="submit" class="btn btn-primary btn-block btn-lg"> Update Project</button>
			</div>
		</div>
	</form>

	<form method="POST" action="/projects/{{ $project->id }}">
		@method('DELETE')
		@csrf
		<!-- {{ method_field('DELETE') }} <!-- HIDDEN patch 
		{{ csrf_field() }} -->

		<div class="row">
			<div>
				<button type="submit" class="btn btn-danger btn-block btn-lg text-white"> Delete Project</button>
			</div>
		</div>
		
	</form>
@endsection