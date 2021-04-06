<?php 
require "includes/newclass.inc.php"

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<?php 

$person1 = new NewClass("Adem","22","50 138 037");
echo $person1->name;
 ?>

</body>
</html>