<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Create a new  Project</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="Project title" required>
		</div>

		<div>
			<textarea name="description" placeholder="description" required></textarea>
		</div>

		<div>
			<button type="submit">Create Project</button>
		<div>
	</form>

</body>
</html>