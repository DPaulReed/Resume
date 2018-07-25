<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Galada|Orbitron|Cinzel|Cormorant+Garamond|Philosopher" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/contact_style.css">
  <title>Donald Reed - Resume</title>
</head>
<body>



<div class="contact_form">
 <h2>Enter Your Contact Information</h2> 
  <form action="/index.php">
    
	<label for="first_name">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="John">

    <label for="last_name">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Smith">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Please write a brief description..." style="height:200px"></textarea>
	
	<p> Please allow 5 to 6 school years for a reply </p>
    
	<input type="submit" value="Submit">
	<input type="submit" value="Run Away" onclick="window.open('resume.php','_blank')">
  </form>
</div>

</body>
</html>
