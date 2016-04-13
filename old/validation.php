<!DOCTYPE html>
<html>
<title>UMBC | CMSC Advising</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
// Initialize variables to null.
$IDErr = $nameErr = $emailErr = $phoneErr ="";
$ID = $name = $email = $phone ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["ID"])) {
		$IDErr = "Student ID is required";
	} else {
		$ID = test_input($_POST["ID"]);
		if (!preg_match("/^[a-zA-Z]{2}\d{5}$$/",$ID)) {
			$IDErr = "Invalid ID format, correct format example: ab12345";
		}
	}

	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address syntax is valid or not
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailErr = "Invalid email format";
		}
	}

	if (empty($_POST["phone"])) {
		$phoneErr = "Phone number is required";
	} else {
		$phone = test_input($_POST["phone"]);
		if (!preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/",$phone)) {
			$phoneErr = "Invalid phone number format";
		}
	}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>

<!-- The "topTitle" div -->
<!-- Has one span in it to highlght the "UMBC" red in title -->
<div class = "topTitle">
<h1> <span style = "color:red"> UMBC </span> Advising for Computer Science Majors </h1> 
</div>

<!-- NAVIGATION BAR(LEFT-SIDE) with three things: Home, List of Classes, and About tab --> 
<!-- Currently it all the options link to the same html file -->
<ul>
  <li><a href="temp.html">Home</a></li>
  <li><a href="temp.html">All Course List</a></li>
  <li><a href="temp.html">Contact</a></li>
</ul>

<!-- MAIN DIV -->
<!--The main div to put the form in, which will take in all the information--> 
<div class = "mainDiv">

<?php
echo "<h2>Your Information:</h2>";
echo "Student ID: ". $ID."<br>\n";
echo  $IDErr."<br>\n";
echo "Name: ". $name."<br>\n";
echo  $nameErr."<br>\n";
echo "Email: ". $email."<br>\n";
echo  $emailErr."<br>\n";
echo "Phone Number: ". $phone."<br>\n";
echo  $phoneErr."<br>\n";

?>

<?php if($IDErr == "" and $nameErr == "" and $emailErr == "" and $phoneErr == "") {?>
         <h3>Suggested Classes:<h3>




	<h2>Please enter the classes you want to register:</h2>
	<p>Enter the class ID only, example: CMSC201<p>
	<form method="post" action="register.php">
	  Student ID:<br> 
   	  <input type="text" name="ID" value="<?php echo htmlspecialchars($ID); ?>" readonly>
   	  <br>
   	  Name:<br> 
   	  <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" readonly>
   	  <br>
   	  E-mail:<br> 
  	  <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
  	  <br>
  	  Phone:<br>
  	  <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>" readonly>
   	  <br><br>
 	  Class one:<br> 
  	  <input type="text" name="class1">
  	  <br>
          Class two:<br> 
  	  <input type="text" name="class2">
  	  <br>
	  Class three:<br> 
  	  <input type="text" name="class3">
  	  <br>
          Class four:<br> 
  	  <input type="text" name="class4">
 	  <br>
           Class five:<br> 
  	  <input type="text" name="class5">
  	  <br><br>
  	  <input class="submit" type="submit" name="submit" value="Submit"> 
	</form>

<?php  } else {
	echo "<br>\nPlease fill out the required information in order to register.<br>\n";
}
?>

</div>

</body>
</html>
