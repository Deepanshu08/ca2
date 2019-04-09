<html>
<head>
	<title>Form</title>
</head>
<body>
	<h1>Create</h1>
	<fieldset>
		<legend>Course Details</legend>
		<form method="post" action="/">

			{{ csrf_field() }}
			Course Title:<br>
			<input type="text" name="title" placeholder="title of the course" required="" />
			<br/>
			Course Description:<br>
			<textarea name="description" rows="15" cols="15" placeholder="Course Description" required=""></textarea>
			<br/>
			<button name="btn1">Submit</button>
		</form>
	</fieldset>
</body>
</html>