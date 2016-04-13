<!DOCTYPE html>
<html>
<title>UMBC | CMSC Advising</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!-- The "topTitle" div -->
<!-- Has one span in it to highlght the "UMBC" red in title -->
<div class = "topTitle">
<h1> <span style = "color:red"> UMBC </span> Advising for Computer Science Majors </h1> 
</div>

<!-- NAVIGATION BAR(LEFT-SIDE) with three things: Home, List of Classes, and About tab --> 
<!-- Currently it all the options link to the same html file -->
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="contact.html">Contact</a></li>
</ul>

<!-- MAIN DIV -->
<!--The main div to put the form in, which will take in all the information--> 
<div class = "mainDiv">
<h2>Registration Info:</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="validation.php">
   Student ID:<br> 
   <input type="text" name="ID">
   <span class="error">* <?php echo $IDErr;?></span>
   <br>
   Name:<br> 
   <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   E-mail:<br> 
   <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br>
   Phone:<br>
   <input type="text" name="phone">
   <span class="error">* <?php echo $phoneErr;?></span>
   <br><br>
   <b>Classes Taken:(check any class you have taken)</b><br><br>
   <b>Required Computer Science Courses:</b><br>
   <input type="checkbox" name="classTaken[]" value="CMSC201">CMSC201 (4.00) Computer Science I for Majors <br>
   <input type="checkbox" name="classTaken[]" value="CMSC202">CMSC202 (4.00) Computer Science II for Majors <br>
   <input type="checkbox" name="classTaken[]" value="CMSC203">CMSC203 (3.00) Discrete Structures<br>
   <input type="checkbox" name="classTaken[]" value="CMSC304">CMSC304 (3.00) Social and Ethical Issues in Information Technology<br>
   <input type="checkbox" name="classTaken[]" value="CMSC313">CMSC313 (3.00) Computer Organization & Assembly Language Program<br>
   <input type="checkbox" name="classTaken[]" value="CMSC331">CMSC331 (3.00) Principles of Programming Language<br>
   <input type="checkbox" name="classTaken[]" value="CMSC341">CMSC341 (3.00) Data Structures<br>
   <input type="checkbox" name="classTaken[]" value="CMSC411">CMSC411 (3.00) Computer Architecture<br>
   <input type="checkbox" name="classTaken[]" value="CMSC421">CMSC421 (3.00) Principles of Operating Systems<br>
   <input type="checkbox" name="classTaken[]" value="CMSC441">CMSC441 (3.00) Design and Analysis of Algorithms<br>
   <input type="checkbox" name="classTaken[]" value="CMSC447">CMSC447 (3.00) Software Design and Development<br>

   <br><b>Required Mathematics Courses:</b><br>
   <input type="checkbox" name="classTaken[]" value="MATH151">MATH151 (4.00) Calculus and Analytic Geometry I<br>
   <input type="checkbox" name="classTaken[]" value="MATH152">MATH152 (4.00) Calculus and Analytic Geometry II<br>
   <input type="checkbox" name="classTaken[]" value="MATH221">MATH221 (3.00) Introduction to Linear Algebra<br>
   
   <br><b>Required Statistics Courses:</b><br>
   <input type="checkbox" name="classTaken[]" value="STAT355">STAT355 (4.00) - Introduction to Probability and Statistics for Scientists and Engineers<br>

   <br><b>Required Science Courses: (Computer science majors must take 12 credits in science courses. Two courses must be from one of the following sequences)</b><br>
<input type="checkbox" name="classTaken[]" value="BIOL100">BIOL100 - Concepts of Biology (4.00)<br>
<input type="checkbox" name="classTaken[]" value="BIOL301">BIOL301 - Ecology and Evolution (3.00)<br><br>
<input type="checkbox" name="classTaken[]" value="BIOL141">BIOL141 - Foundations of Biology: Cells, Energy and Organisms (4.00)<br>
<input type="checkbox" name="classTaken[]" value="BIOL142">BIOL142 - Foundations of Biology: Ecology and Evolution (4.00)<br><br>
<input type="checkbox" name="classTaken[]" value="CHEM101">CHEM101 - Principles of Chemistry I (4.00)<br>
<input type="checkbox" name="classTaken[]" value="CHEM102">CHEM102 - Principles of Chemistry II (4.00)<br><br>
<input type="checkbox" name="classTaken[]" value="PHYS121">PHYS121 - Introductory Physics I (4.00)<br>
<input type="checkbox" name="classTaken[]" value="PHYS122">PHYS122 - Introductory Physics II (4.00)<br>    

   <br><b>Computer Science Electives 200 level Courses:</b><br>
   <input type="checkbox" name="classTaken[]" value="CMSC232">CMSC232 (2.00) Advanced Java Techniques<br>
   <input type="checkbox" name="classTaken[]" value="CMSC291">CMSC291 (1.00 - 4.00) Special Topics in Computer Science<br>
   <input type="checkbox" name="classTaken[]" value="CMSC299">CMSC299 (1.00 - 4.00) Independent Study in Computer Science<br><br>

   <br><b>Computer Science Electives 300 level Courses:</b><br>
   <input type="checkbox" name="classTaken[]" value="CMSC352">CMSC352 (3.00) Women, Gender, and Information Technology<br>
   <input type="checkbox" name="classTaken[]" value="CMSC391">CMSC391 (1.00 - 4.00) Special Topics in Computer Science<br><br>

   <br><b>Computer Science Electives 400 level Courses:</b><br>
<input type="checkbox" name="classTaken[]" value="CMSC404">CMSC404 (3.00) The History of Computers and Computing<br>
<input type="checkbox" name="classTaken[]" value="CMSC426">CMSC426 (3.00) Principles of Computer Security<br>
<input type="checkbox" name="classTaken[]" value="CMSC427">CMSC427 (3.00) Wearable Computing<br>
<input type="checkbox" name="classTaken[]" value="CMSC431">CMSC431 (3.00) Compiler Design Principles<br>
<input type="checkbox" name="classTaken[]" value="CMSC432">CMSC432 (3.00) Object-Oriented Programming Languages and Systems<br>
<input type="checkbox" name="classTaken[]" value="CMSC433">CMSC433 (3.00) Scripting Languages<br>
<input type="checkbox" name="classTaken[]" value="CMSC435">CMSC435 (3.00) Computer Graphics<br>
<input type="checkbox" name="classTaken[]" value="CMSC436">CMSC436 (3.00) Data Visualization<br>
<input type="checkbox" name="classTaken[]" value="CMSC437">CMSC437 (3.00) Graphical User Interface Programming<br>
<input type="checkbox" name="classTaken[]" value="CMSC442">CMSC442 (3.00) Information and Coding Theory<br>
<input type="checkbox" name="classTaken[]" value="CMSC443">CMSC443 (3.00) Cryptology<br>
<input type="checkbox" name="classTaken[]" value="CMSC444">CMSC444 (3.00) Information Assurance<br>
<input type="checkbox" name="classTaken[]" value="CMSC446">CMSC446 (3.00) Introduction to Design Patterns<br>
<input type="checkbox" name="classTaken[]" value="CMSC448">CMSC448 (3.00) Software Engineering II<br>
<input type="checkbox" name="classTaken[]" value="CMSC451">CMSC451 (3.00) Automata Theory and Formal Languages<br>
<input type="checkbox" name="classTaken[]" value="CMSC452">CMSC452 (3.00) Logic for Computer Science<br>
<input type="checkbox" name="classTaken[]" value="CMSC453">CMSC453 (3.00) Applied Combinatorics and Graph Theory<br>
<input type="checkbox" name="classTaken[]" value="CMSC455">CMSC455 (3.00) Numerical Computations<br>
<input type="checkbox" name="classTaken[]" value="CMSC456">CMSC456 (3.00) Symbolic Computation<br>
<input type="checkbox" name="classTaken[]" value="CMSC457">CMSC457 (3.00) Quantum Computation<br>
<input type="checkbox" name="classTaken[]" value="CMSC461">CMSC461 (3.00) Database Management Systems<br>
<input type="checkbox" name="classTaken[]" value="CMSC465">CMSC465 (3.00) Introduction to Electronic Commerce<br>
<input type="checkbox" name="classTaken[]" value="CMSC466">CMSC466 (3.00) Electronic Commerce Technology<br>
<input type="checkbox" name="classTaken[]" value="CMSC471">CMSC471 (3.00) Introduction to Artificial Intelligence<br>
<input type="checkbox" name="classTaken[]" value="CMSC473">CMSC473 (3.00) Introduction to Natural Language Processing<br>
<input type="checkbox" name="classTaken[]" value="CMSC475">CMSC475 (3.00) Introduction to Neural Networks<br>
<input type="checkbox" name="classTaken[]" value="CMSC476">CMSC476 (3.00) Information Retrieval<br>
<input type="checkbox" name="classTaken[]" value="CMSC477">CMSC477 (3.00) Agent Architectures and Multi-Agent Systems<br>
<input type="checkbox" name="classTaken[]" value="CMSC478">CMSC478 (3.00) Introduction to Machine Learning<br>
<input type="checkbox" name="classTaken[]" value="CMSC479">CMSC479 (3.00) Introduction to Robotics<br>
<input type="checkbox" name="classTaken[]" value="CMSC481">CMSC481 (3.00) Computer Networks<br>
<input type="checkbox" name="classTaken[]" value="CMSC483">CMSC483 (3.00) Parallel and Distributed Processing<br>
<input type="checkbox" name="classTaken[]" value="CMSC484">CMSC484 (3.00) Java Server Technologies<br>
<input type="checkbox" name="classTaken[]" value="CMSC486">CMSC486 (3.00) Mobile Telephony Communications<br>
<input type="checkbox" name="classTaken[]" value="CMSC487">CMSC487 (3.00) Introduction To Network Security<br>
<input type="checkbox" name="classTaken[]" value="CMSC491">CMSC491 (3.00) Special Topics in Computer Science<br>
<input type="checkbox" name="classTaken[]" value="CMSC493">CMSC493 (3.00) Capstone Games Group Project<br>
<input type="checkbox" name="classTaken[]" value="CMSC495">CMSC495 (3.00) Honors Thesis<br>
<input type="checkbox" name="classTaken[]" value="CMSC498">CMSC498 (3.00) Independent Study in Computer Science for CMSC Interns and Coop Students<br>
<input type="checkbox" name="classTaken[]" value="CMSC499">CMSC499 (1.00 - 4.00) Independent Study in Computer Science<br>
    <br><br>
   <input class="submit" type="submit" name="submit" value="Submit"> 
</form>

</div>

</body>
</html>
