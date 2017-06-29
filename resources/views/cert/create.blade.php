
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Create a new Certificate</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="padding: 5px;">
    <h1>Hello, world!</h1>
    <form method="POST" action="{{route('certs.store')}}" role="form">
		{{csrf_field()}}
		<div class="form-group">
			<label for="full_name">Full name :</label>
			<input type="text" name="full_name" id="full_name" class="form-control">
		</div>

		<div class="form-group">
			<label for="matric_no">Matriculation No.:</label>
			<input type="text" name="matric_no" class="form-control" id="matric_no">
		</div>

		<div class="form-group">
			<label for="class">Class:</label>
			<input type="text" name="class" class="form-control" id="class">
			<p class="help-block">This is the class the user graduated with like 1/ 21/ 22 or 3</p>
		</div>

		<div class="form-group">
			<label for="dept">Department:</label>
			<input type="text" name="dept" class="form-control" id="dept">
		</div>

		<div class="form-group">
			<label for="year">Year:</label>
			<input type="year" name="year" class="form-control" id="year">
		</div>

		
		<button type="submit" class="btn btn-primary">Generate Key</button>
		
	</form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>