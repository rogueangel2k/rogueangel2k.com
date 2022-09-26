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

<?php /* Header page start */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<title><?php echo $sitetitle  ?></title>
</head>

<body>

<?php /*  Header body */ ?>
<a href="index.php"><img src="images/your_logo.pnb" title="Your title" width="300" height="250" ></a><br /><br />
<button class="button button1" onclick="location.href='index.php'">Home</button>
<button class="button button1" onclick="location.href='index.php?blockid=projects'">Projects</button>

<?php /* Use this button later.
<button class="button button1" onclick="location.href='index.php?blockid=services'">Services</button>
*/ ?>
<button class="button button1" onclick="location.href='index.php?blockid=about'">About</button>
<br />

<hr>
<br />
<?php /* Header page end */ ?>