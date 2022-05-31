<?php
// *******************************************************
// ** Written by Cameron Snyder - 2k@rogueangel2k.com 	**
// ** Leave this credit block in tact please.		  	**
// ** Thank you											**
// **													**
// ** Inspiration for my projects are due to my 		**
// ** supportive wife, without whom my dreams would		**
// ** just be dreams. This project and all others are	**
// ** dedicated to my wife and son.						**
// **													**
// ** I love you both more than words can express.		**
// **													**
// *******************************************************
?>

<?php // <!-- Requiring config.php --> ?>
<?php require 'config.php'; ?>
<link rel="stylesheet" href="css/style.css">
<?php // <!-- Checking for maintenance mode on or off if on display message and stop else continue whole page --> ?>
<?php if ($maintenancemode == "on") : ?>
<!DOCTYPE html>
<html lang="en">
<title><?php echo $sitetitle  ?> | Maintenance Mode On</title>
<link rel="stylesheet" href="css/style.css">
<body>
<a href="/"><img src="images/yourlogo.png" alt="Your logo title here" width="300" height="250" ></a><br /><br />
<?php echo $maintenancemessage; ?>
</body>
</html>
<?php endif ?>

<?php // <!-- If maintenance mode is off continue main page --> ?>
<?php if ($maintenancemode == "off" ) : ?>
<?php include 'header.php'; ?>

<?php // <!-- Block 1 code start --> ?>
<?php if ($_GET['blockid'] == "" ) : ?>
<?php // <!-- Main page start --> ?>
<!DOCTYPE html>
<html lang="en">
<title><?php echo $sitetitle  ?> | Home</title>
<link rel="stylesheet" href="css/style.css">
<body>
<?php // <!-- Main page body and blocks of php and everything else --> ?>
Put your main page info here.

This website is fast and efficient. The <a href="https://www.php.net/"><strong>PHP</strong></a> used is light and agile with as few elements as possible to get my point across.<br />
The <a href="https://www.w3schools.com/css/default.asp"><strong>CSS</strong></a> is short and sweet.
<?php // <!-- End main page body --> ?>
</body>
</html>
<?php // <!-- Main page end --> ?>
<?php endif ?>
<?php // <!-- Block 1 code stop --> ?>

<?php // <!-- Block about code start --> ?>
<?php if ($_GET['blockid'] == "about" ) : ?>
<?php // <!-- Main page start --> ?>
<!DOCTYPE html>
<html>
<title><?php echo $sitetitle  ?> | About</title>
<link rel="stylesheet" href="css/style.css">
<body>
<?php // <!-- Main page body and blocks of php and everything else --> ?>
Put your About info here.

<?php // <!-- End main page body --> ?>
</body>
</html>
<?php // <!-- About page end --> ?>
<?php endif ?>
<?php // <!-- Block about code stop --> ?>

<?php // <!-- Including footer.php --> ?>
<?php include 'footer.php'; ?>

<?php // <!-- End maintenance mode check on or off --> ?>
<?php endif ?>