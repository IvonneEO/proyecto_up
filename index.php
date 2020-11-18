<!DOCTYPE HTML>
<html>
<head>

	<script>
	function validateForm()
	{
	  var x = document.forms["myForm"]["name"].value;
	  if (x == "")
		{
	    alert("Name must be filled out");
	    return false;
	  }
		var y = document.forms["myForm"]["email"].value;
	  if (y == "")
		{
	    alert("Email must be filled out");
	    return false;
	  }
		var x = document.forms["myForm"]["geder"].value;
	  if (x == "")
		{
	    alert("Gender must be filled out");
	    return false;
	  }
	}
	</script>


<style>
.error {color: #FF0000;}
</style>
</head>
<body>



<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form name="myForm" method="post" onsubmit="return validateForm()" action="welcome.php">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>



</body>
</html>
