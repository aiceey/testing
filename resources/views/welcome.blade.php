@extends('layout')
<!-- <h1>My {{ $foo }} Website</h1> -->
<h1>My {!! $foo !!} Website</h1>
<ul>
	<?php foreach ($tasks as $task) : ?>
		<li><?= $task; ?></li>
	<?php endforeach; ?>
</ul>

@section('content')
@endsection