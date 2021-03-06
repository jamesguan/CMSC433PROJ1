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
<div class="sidebar">
<ul>
  <li><a href="temp.html">Home</a></li>
  <li><a href="temp.html">All Course List</a></li>
  <li><a href="temp.html">Contact</a></li>
</ul>
</div>


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
   <input type="checkbox" name="CMSC201" value="CMSC201">CMSC201 (4.00) Computer Science I for Majors <br>
   <input type="checkbox" name="CMSC202" value="CMSC202">CMSC202 (4.00) Computer Science II for Majors <br>
   <input type="checkbox" name="CMSC203" value="CMSC203">CMSC203 (3.00) Discrete Structures<br>
   <input type="checkbox" name="CMSC304" value="CMSC304">CMSC304 (3.00) Social and Ethical Issues in Information Technology<br>
   <input type="checkbox" name="CMSC313" value="CMSC313">CMSC313 (3.00) Computer Organization & Assembly Language Program<br>
   <input type="checkbox" name="CMSC331" value="CMSC331">CMSC331 (3.00) Principles of Programming Language<br>
   <input type="checkbox" name="CMSC341" value="CMSC341">CMSC341 (3.00) Data Structures<br>
   <input type="checkbox" name="CMSC411" value="CMSC411">CMSC411 (3.00) Computer Architecture<br>
   <input type="checkbox" name="CMSC421" value="CMSC421">CMSC421 (3.00) Principles of Operating Systems<br>
   <input type="checkbox" name="CMSC441" value="CMSC441">CMSC441 (3.00) Design and Analysis of Algorithms<br>
   <input type="checkbox" name="CMSC447" value="CMSC447">CMSC447 (3.00) Software Design and Development<br>

   <br><b>Required Mathematics Courses:</b><br>
   <input type="checkbox" name="MATH151" value="MATH151">MATH151 (4.00) Calculus and Analytic Geometry I<br>
   <input type="checkbox" name="MATH152" value="MATH152">MATH152 (4.00) Calculus and Analytic Geometry II<br>
   <input type="checkbox" name="MATH221" value="MATH221">MATH221 (3.00) Introduction to Linear Algebra<br>
   
   <br><b>Required Statistics Courses:</b><br>
   <input type="checkbox" name="STAT355" value="STAT355">STAT355 (4.00) - Introduction to Probability and Statistics for Scientists and Engineers<br>

   <br><b>Required Science Courses: (Computer science majors must take 12 credits in science courses. Two courses must be from one of the following sequences)</b><br>
<input type="checkbox" name="BIOL100" value="BIOL100">BIOL100 - Concepts of Biology (4.00)<br>
<input type="checkbox" name="BIOL301" value="BIOL301">BIOL301 - Ecology and Evolution (3.00)<br><br>
<input type="checkbox" name="BIOL141" value="BIOL141">BIOL141 - Foundations of Biology: Cells, Energy and Organisms (4.00)<br>
<input type="checkbox" name="BIOL142" value="BIOL142">BIOL142 - Foundations of Biology: Ecology and Evolution (4.00)<br><br>
<input type="checkbox" name="CHEM101" value="CHEM101">CHEM101 - Principles of Chemistry I (4.00)<br>
<input type="checkbox" name="CHEM102" value="CHEM102">CHEM102 - Principles of Chemistry II (4.00)<br><br>
<input type="checkbox" name="PHYS121" value="PHYS121">PHYS121 - Introductory Physics I (4.00)<br>
<input type="checkbox" name="PHYS122" value="PHYS122">PHYS122 - Introductory Physics II<br>    

   <br><b>Computer Science Electives 200 level Courses:</b><br>
   <input type="checkbox" name="CMSC232" value="CMSC232">CMSC232 (2.00) Advanced Java Techniques<br>
   <input type="checkbox" name="CMSC291" value="CMSC291">CMSC291 (1.00 - 4.00) Special Topics in Computer Science<br>
   <input type="checkbox" name="CMSC299" value="CMSC299">CMSC299 (1.00 - 4.00) Independent Study in Computer Science<br><br>

   <br><b>Computer Science Electives 300 level Courses:</b><br>
   <input type="checkbox" name="CMSC352" value="CMSC352">CMSC352 (3.00) Women, Gender, and Information Technology<br>
   <input type="checkbox" name="CMSC391" value="CMSC391">CMSC391 (1.00 - 4.00) Special Topics in Computer Science<br><br>

   <br><b>Computer Science Electives 400 level Courses:</b><br>
<input type="checkbox" name="CMSC404" value="CMSC404">CMSC404 (3.00) The History of Computers and Computing<br>
<input type="checkbox" name="CMSC426" value="CMSC426">CMSC426 (3.00) Principles of Computer Security<br>
<input type="checkbox" name="CMSC427" value="CMSC427">CMSC427 (3.00) Wearable Computing<br>
<input type="checkbox" name="CMSC431" value="CMSC431">CMSC431 (3.00) Compiler Design Principles<br>
<input type="checkbox" name="CMSC432" value="CMSC432">CMSC432 (3.00) Object-Oriented Programming Languages and Systems<br>
<input type="checkbox" name="CMSC433" value="CMSC433">CMSC433 (3.00) Scripting Languages<br>
<input type="checkbox" name="CMSC435" value="CMSC435">CMSC435 (3.00) Computer Graphics<br>
<input type="checkbox" name="CMSC436" value="CMSC436">CMSC436 (3.00) Data Visualization<br>
<input type="checkbox" name="CMSC437" value="CMSC437">CMSC437 (3.00) Graphical User Interface Programming<br>
<input type="checkbox" name="CMSC442" value="CMSC442">CMSC442 (3.00) Information and Coding Theory<br>
<input type="checkbox" name="CMSC443" value="CMSC443">CMSC443 (3.00) Cryptology<br>
<input type="checkbox" name="CMSC444" value="CMSC444">CMSC444 (3.00) Information Assurance<br>
<input type="checkbox" name="CMSC446" value="CMSC446">CMSC446 (3.00) Introduction to Design Patterns<br>
<input type="checkbox" name="CMSC448" value="CMSC448">CMSC448 (3.00) Software Engineering II<br>
<input type="checkbox" name="CMSC451" value="CMSC451">CMSC451 (3.00) Automata Theory and Formal Languages<br>
<input type="checkbox" name="CMSC452" value="CMSC452">CMSC452 (3.00) Logic for Computer Science<br>
<input type="checkbox" name="CMSC453" value="CMSC453">CMSC453 (3.00) Applied Combinatorics and Graph Theory<br>
<input type="checkbox" name="CMSC455" value="CMSC455">CMSC455 (3.00) Numerical Computations<br>
<input type="checkbox" name="CMSC456" value="CMSC456">CMSC456 (3.00) Symbolic Computation<br>
<input type="checkbox" name="CMSC457" value="CMSC457">CMSC457 (3.00) Quantum Computation<br>
<input type="checkbox" name="CMSC461" value="CMSC461">CMSC461 (3.00) Database Management Systems<br>
<input type="checkbox" name="CMSC465" value="CMSC465">CMSC465 (3.00) Introduction to Electronic Commerce<br>
<input type="checkbox" name="CMSC466" value="CMSC466">CMSC466 (3.00) Electronic Commerce Technology<br>
<input type="checkbox" name="CMSC471" value="CMSC471">CMSC471 (3.00) Introduction to Artificial Intelligence<br>
<input type="checkbox" name="CMSC473" value="CMSC473">CMSC473 (3.00) Introduction to Natural Language Processing<br>
<input type="checkbox" name="CMSC475" value="CMSC475">CMSC475 (3.00) Introduction to Neural Networks<br>
<input type="checkbox" name="CMSC476" value="CMSC476">CMSC476 (3.00) Information Retrieval<br>
<input type="checkbox" name="CMSC477" value="CMSC477">CMSC477 (3.00) Agent Architectures and Multi-Agent Systems<br>
<input type="checkbox" name="CMSC478" value="CMSC478">CMSC478 (3.00) Introduction to Machine Learning<br>
<input type="checkbox" name="CMSC479" value="CMSC479">CMSC479 (3.00) Introduction to Robotics<br>
<input type="checkbox" name="CMSC481" value="CMSC481">CMSC481 (3.00) Computer Networks<br>
<input type="checkbox" name="CMSC483" value="CMSC483">CMSC483 (3.00) Parallel and Distributed Processing<br>
<input type="checkbox" name="CMSC484" value="CMSC484">CMSC484 (3.00) Java Server Technologies<br>
<input type="checkbox" name="CMSC486" value="CMSC486">CMSC486 (3.00) Mobile Telephony Communications<br>
<input type="checkbox" name="CMSC487" value="CMSC487">CMSC487 (3.00) Introduction To Network Security<br>
<input type="checkbox" name="CMSC491" value="CMSC491">CMSC491 (3.00) Special Topics in Computer Science<br>
<input type="checkbox" name="CMSC493" value="CMSC493">CMSC493 (3.00) Capstone Games Group Project<br>
<input type="checkbox" name="CMSC495" value="CMSC495">CMSC495 (3.00) Honors Thesis<br>
<input type="checkbox" name="CMSC498" value="CMSC498">CMSC498 (3.00) Independent Study in Computer Science for CMSC Interns and Coop Students<br>
<input type="checkbox" name="CMSC499" value="CMSC499">CMSC499 (1.00 - 4.00) Independent Study in Computer Science<br>
    <br><br>
   <input class="submit" type="submit" name="submit" value="Submit"> 
</form>

</div>

</body>
</html>
