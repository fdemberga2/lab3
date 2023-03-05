<!DOCTYPE HTML>  
<html>
<head>
<link href="css/Validation.css" rel="stylesheet">
</head> 
<body>
  <div class="BG"></div>
    <div class="Padds">
    </div>
  </div>
  <br><br><br><br><br>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["NAME"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["NAME"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["EMAIL"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["EMAIL"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["WEBSITE"])) {
    $website = "";
  } else {
    $website = test_input($_POST["WEBSITE"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["COMMENT"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["COMMENT"]);
  }

  if (empty($_POST["GENDER"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["GENDER"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Want to join my masterclass?</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="validation">  
  Name:
  <br><br>
  <input type="text" name="NAME">
  <?= csrf_field() ?>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail:
  <br><br>
  <input type="text" name="EMAIL" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website:
  <br><br>
  <input type="text" name="WEBSITE" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment:
  <br><br>
  <textarea name="COMMENT" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="GENDER" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="GENDER" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="GENDER" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <h3>Wanna see who else has been here? Click the link below!</h3>
  <a href="masterclass">Click Here</a>
</form>
</body>
</html>