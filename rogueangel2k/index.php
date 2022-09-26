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

<?php // <!-- Requiring config.php for all portions of all pages --> ?>
<?php require 'config.php'; ?>

<?php // <!-- Checking for maintenance mode on or off if on display message and stop else continue on to the whole page --> ?>
<?php if ($maintenancemode == "on") : ?>

<a href="/"><img src="images/jolly_halo.png" alt="Always Fly From the Inside!" width="300" height="250" ></a><br /><br />
<?php echo $maintenancemessage; ?>
<?php endif ?>
<?php // <!-- End maintenance mode on message --> ?>

<?php // <!-- If maintenance mode is off continue main page --> ?>
<?php if ($maintenancemode == "off" ) : ?>

<?php // Including header.php ?>
<?php include 'header.php'; ?>

<?php // <!-- Block 1 code start - This is the main block which has no block ID set --> ?>
<?php if ($_GET['blockid'] == "" ) : ?>
<?php // <!-- Main page start --> ?>

<?php // <!-- Main page body and blocks of php and everything else --> ?>
Welcome to your page. This is the default paragraph that pulls up when someone simply accesses index.php without any query strings at the end.
<?php // <!-- End main page body --> ?>
<?php // <!-- Main page end --> ?>
<?php endif ?>
<?php // <!-- Block 1 code stop --> ?>

<?php // <!-- Block projects code start --> ?>
<?php if ($_GET['blockid'] == "projects" ) : ?>
<?php // <!-- Main page start --> ?>

<?php // <!-- Main page body and blocks of php and everything else --> ?>
Your project info here.

<?php // <!-- End main page body --> ?>
<?php // <!-- Main page end --> ?>
<?php endif ?>
<?php // <!-- Block projects code stop --> ?>

<?php // <!-- Block about code start --> ?>
<?php if ($_GET['blockid'] == "about" ) : ?>
<?php // <!-- Main page start --> ?>
Your about info here.

<?php // <!-- End main page body --> ?>
<?php // <!-- About page end --> ?>
<?php endif ?>
<?php // <!-- Block about code stop --> ?>


<?php // <!-- Including footer.php --> ?>
<?php include 'footer.php'; ?>

<?php // <!-- End maintenance mode check on or off --> ?>
<?php endif ?>