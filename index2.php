<!DOCTYPE HTML>
<html>
<body>

<h2>
<?php 

$name = $_POST['name'];
$program = $_POST['program'];
$year = $_POST['year'];
$surname = $_POST['surname'];

echo $name.' '.$surname.','.' '.'welcome to the University of Zimbabwe. 
We hope you are going to study, graduate and attain a degree in'.' '.$program.' '.'by the year'.' '.$year + 4;

?>
</h2>
</body>
</html>
