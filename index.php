<!DOCTYPE html>

<html>

<head>
	<title>BMI Calculator</title>
	<meta charset='utf-8'>

	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
	<link href='styles.css' rel='stylesheet'>
</head>

<body>
  <div class='container'>
	<h1>BMI Calculator</h1>
	<form method='POST' action='inputs.php'>

  <fieldset>
  <div class="form-group">
  <label for='weight'>* Weight</label>
	<input type='text' name='weight'  placeholder='Weight' autocomplete='off' class="form-control"><br>
	</div>

  <div class="form-group">
	<label for='height'>* Height</label>
	<input type='text' name='height' placeholder='Height' autocomplete='off' class="form-control"><br>
  </div>

  <div class="form-group">
	<label>Activity level:</label>
  <label ><input type='radio' name='day' value='sedentary' checked='checked'> Sedentary</label>
  <label ><input type='radio' name='day' value='moderate' > Moderate</label>
  <label><input type='radio' name='day' value='active' > Active</label>
  </div>

	<div class="form-group">
	<label><input type='checkbox' name='calories' value='calories' >Include calorie requirement</label>
  </div>

	<button type='submit' class='btn btn-primary btn-sm'>Calculate</button>

  </fieldset>


    </form>
</body>

</html>
