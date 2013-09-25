<!-- Modify an element in the $languages array. You can take your pick! Once you change it, go ahead and print or echo it to the page. -->
<html>
<head>
	<title>Modifying Array Elements</title>
</head>
<body>
<?php 
$languages = array('HTML/CSS', 'Javascript', 'PHP', 'Python', 'Ruby');
$languages[2] = 'Java';
//now the third element of the array is Java instead of PHP
echo $languages[2];
?>
</body>
</html>