<!DOCTYPE HTML>
<html>
<body>

<h1 align='center'>
UNIVERSITY OF ZIMBABWE STUDENT REGISTRATION
</h1>

<style>
body {
	background-image:
	url('https://th.bing.com/th/id/OIP.0ilb_ok8k1A5rOEAaBgVJwHaGV?w=229&h=195&c=7&r=0&o=5&pid=1.7');
	background-repeat: no-repeat;
	background-size: cover;
}
</style>

<?php

$name = '';
$surname = '';
$dob = '';
$gender = '';
$marital_status = '';
$reg_number = '';
$user_name = '';
$program = '';
$year = '';



?>
<br>
<form action='index2.php' method='post' id='index2'>
NAME:<input type='text' size='30' name ='name' value='<?php echo $name;?>'>
</br>
<br>
SURNAME: <input type='text' size='25' name ='surname' value='<?php echo $surname;?>'>
</br>
<br>
D.O.B:<input type='integer' size='31' name ='dob' value='<?php echo $dob;?>'>
</br>
<br>
GENDER: <input type='text' size='27' name ='gender' value='<?php echo $gender;?>'>
</br>
<br>
MARITAL STATUS: <input type='text' size='17' name ='marital_status' value='<?php echo $marital_status;?>'>
</br>
<br>
REG NUMBER: <input type='text' size='21' name ='reg_number' value='<?php echo $reg_number;?>'>
</br>
<br>
USER NAME: <input type='text' size='23' name ='user_name' value='<?php echo $user_name;?>'>
</br>
<br>
PROGRAM: <input type='text' size='25' name ='program' value='<?php echo $program;?>'>
</br>
<br>
STARTING YEAR: <input type='integer' size='18' name ='year' value='<?php echo $year;?>'>
</br>
<br>
<form action='index2.php' method='POST'>
<input type='submit' form='index2' name='submit' value='Submit'>
</form>
</br>
</form>
</body>
</html>