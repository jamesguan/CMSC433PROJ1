<!DOCTYPE html>
<html>
<title>UMBC | CMSC Advising</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
// Initialize variables to null.
$ID = $name = $email = $phone ="";
$classErr = array();
$class = array();
$validClass = array("CMSC201", "CMSC202", "CMSC203", "CMSC304", "CMSC313", "CMSC331", "CMSC341", "CMSC411", "CMSC421", "CMSC441", "CMSC447"
		, "MATH151", "MATH152", "MATH221", "STAT355", "BIOL100", "BIOL301", "BIOL141", "BIOL142", "CHEM101", "CHEM102", "PHYS121"
		, "PHYS122", "CMSC232", "CMSC291", "CMSC299", "CMSC352", "CMSC391", "CMSC404", "CMSC426", "CMSC427", "CMSC431", "CMSC432"
		, "CMSC433", "CMSC435", "CMSC436", "CMSC437", "CMSC442", "CMSC443", "CMSC444", "CMSC446", "CMSC448", "CMSC451", "CMSC452"
		, "CMSC453", "CMSC455", "CMSC456", "CMSC457", "CMSC461", "CMSC465", "CMSC466", "CMSC471", "CMSC473", "CMSC475", "CMSC476"
		, "CMSC477", "CMSC478", "CMSC479", "CMSC481", "CMSC483", "CMSC484", "CMSC486", "CMSC487", "CMSC491", "CMSC493", "CMSC495"
		, "CMSC498", "CMSC499");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$ID = test_input($_POST["ID"]);
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$phone = test_input($_POST["phone"]);

	if (empty($_POST["class1"])) {
		
	} else {
		$class[0] = test_input($_POST["class1"]);
		if (!preg_match("/^[A-Z]{4}\d{3}$/",$class[0])) {
			$classErr[0] = "Error: Invalid class ID format";
		} 
		if(!in_array($class[0], $validClass)){
			$classErr[0] = "Error: Invalid class ID, this class is not exist";

		}
	}

	if (empty($_POST["class2"])) {
		
	} else {
		$class[1] = test_input($_POST["class2"]);
		if (!preg_match("/^[A-Z]{4}\d{3}$/",$class[1])) {
			$classErr[1] = "Error: Invalid class ID format";
		} 
		if ($class[1] == $class[0]){
			$classErr[1] = "Error: same class repeated, please try another class";
		}
                  if(!in_array($class[1], $validClass)){
			$classErr[1] = "Error: Invalid class ID, this class is not exist";

		}
	}

	if (empty($_POST["class3"])) {
		
	} else {
		$class[2] = test_input($_POST["class3"]);
		if (!preg_match("/^[A-Z]{4}\d{3}$/",$class[2])) {
			$classErr[2] = "Error: Invalid class ID format";
		} 
		if ($class[2] == $class[0] or $class[2] == $class[1] ){
			$classErr[2] = "Error: same class repeated, please try another class";
		}
		if(!in_array($class[2], $validClass)){
			$classErr[2] = "Error: Invalid class ID, this class is not exist";

		}
	}

	if (empty($_POST["class4"])) {
		
	} else {
		$class[3] = test_input($_POST["class4"]);
		if (!preg_match("/^[A-Z]{4}\d{3}$/",$class[3])) {
			$classErr[3] = "Error: Invalid class ID format";
		}
		if ($class[3] == $class[0] or $class[3] == $class[1] or $class[3] == $class[2] ){
			$classErr[3] = "Error: same class repeated, please try another class";
			
		}
		if(!in_array($class[3], $validClass)){
			$classErr[3] = "Error: Invalid class ID, this class is not exist";

		}
	}

	if (empty($_POST["class5"])) {
		
	} else {
		$class[4] = test_input($_POST["class5"]);
		if (!preg_match("/^[A-Z]{4}[\s]?\d{3}$/",$class[4])) {
			$classErr[4] = "Error: Invalid class ID format";
		}
		if ($class[4] == $class[0] or $class[4] == $class[1] or $class[4] == $class[2] or $class[4] == $class[3]){
			$classErr[4] = "Error: same class repeated, please try another class";
		}		
		if(!in_array($class[4], $validClass)){
			$classErr[4] = "Error: Invalid class ID, this class is not exist";

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
echo "<h2>Personal Information:</h2>";
echo "Student ID: ". $ID."<br>\n";
echo "Name: ". $name."<br>\n";
echo "Email: ". $email."<br>\n";
echo "Phone Number: ". $phone."<br>\n";

echo "<h2>Class Regiestered Information:</h2>";
$arrlength = count($class);

if($arrlength == 0) {
	echo "You didn't register any class, please fill in the class you want to take.<br>\n";
} else {
	for($x = 0; $x < $arrlength; $x++) {
	  $count = $x + 1;
  	  echo "Class ". $count. " Input: " . $class[$x] . "<br>\n";
   	  echo $classErr[$x]. "<br>\n";
	}
}

if(empty($classErr) and !empty($class)) {
	echo "You have successfully regiestered above classes, and the data is stored in the database.<br>\n";
}elseif(!empty($classErr)) {
	echo "Please follow the error message to edit your input classes in order to regiester.<br>\n";
}

?>

</div>

</body>
</html>
