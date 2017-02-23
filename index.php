<?php require('calculate.php'); ?>

<!DOCTYPE html>

<html>
	  <head>
		    <title>BMI Calculator</title>
		    <meta charset='utf-8'>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
		    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
		    <link href='styles.css' rel='stylesheet'>
	  </head>

	  <body>
  	    <div class='container'>
			      <h1>BMI Calculator</h1>
			      <img src="bmi.jpg" alt="BMI Image"/>

			      <form method='GET' action='index.php'>
				    <fieldset>
  				      <div class="form-group">
  					       <label for='weight'>* Weight(lbs)</label>
						       <input type='text' id='weight' name='weight'  placeholder='Weight' autocomplete='off' class="form-control" value='<?php if(isset($_GET['weight'])) echo $_GET['weight'] ?>'><br>
					      </div>

  				      <div class="form-group">
						        <label for='height'>* Height(inches)</label>
						        <input type='text' id='height' name='height' placeholder='Height' autocomplete='off' class="form-control" value='<?php if(isset($_GET['height'])) echo $_GET['height'] ?>'><br>
  				      </div>

					      <div class="form-group">
						        <label for='age'>* Age</label>
						        <input type='text' id='age' name='age' placeholder='Age' autocomplete='off' class="form-control" value='<?php if(isset($_GET['age'])) echo $_GET['age'] ?>'><br>
					      </div>

					      <div class="form-group">
						         <label>Gender:</label>
  					         <label ><input type='radio' name='gender' value='male' <?php if($gender == 'male') echo 'CHECKED'?>>Male</label>
  					         <label ><input type='radio' name='gender' value='female' <?php if($gender == 'female') echo 'CHECKED'?> >Female</label>
  				      </div>

  				      <div class="form-group">
						        <label>Activity level:</label>
  					        <label ><input type='radio' name='activity' value='sedentary' <?php if($activity == 'sedentary') echo 'CHECKED'?>> Sedentary</label>
  					        <label ><input type='radio' name='activity' value='moderate' <?php if($activity == 'moderate') echo 'CHECKED'?>> Moderate</label>
  					        <label><input type='radio' name='activity' value='active' <?php if($activity == 'active') echo 'CHECKED'?>> Active</label>
  				      </div>

					      <div class="form-group">
						         <label><input type='checkbox' name='calories' value='calories' <?php if($form->isChosen('calories')) echo 'CHECKED' ?>>Include calorie requirement</label>
  				      </div>

  				      <div class="form-group">
						        <button type='submit' class='btn btn-primary btn-small'>Calculate</button>
  				      </div>
				    </fieldset>
  		  		</form>
			  </div>
				<?php if($form->isSubmitted()): ?>
            <?php if($errors): ?>
		            <div class='alert alert-danger'>
			              <ul>
				                <?php foreach($errors as $error): ?>
					                  <li><?=$error?></li>
				                <?php endforeach; ?>
			              </ul>
		            </div>

    		    <?php else: ?>
		            <div class='alert alert-success'>Your BMI is <?=$bmi?></div>
		            <?php if($calChecked): ?>
			               <div class='alert alert-success'>Your required calorie intake is <?=$calories?></div>
		            <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

		</body>
</html>
