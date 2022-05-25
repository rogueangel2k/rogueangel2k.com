<!-- Requiring config.php -->
<?php require 'config.php'; ?>
<?php $blockid = ""; ?>
<!-- Checking for maintenance mode on or off if on display message and stop else continue whole page -->
<?php if ($maintenancemode == "on") : ?>
<link rel="stylesheet" href="/css/style.css">
<title><?php echo $sitetitle  ?> | Maintenance Mode On</title>
<br />
<center><?php echo $maintenancemessage; ?></center>
<?php endif ?>

<!-- If maintenance mode is off continue main page -->
<?php if ($maintenancemode == "off" ) : ?>

<link rel="stylesheet" href="/css/style.css">
<?php include 'header.php'; ?>

<!-- Block 1 code start -->
<?php if ($_GET['blockid'] == "" ) : ?>
<!-- Main page start -->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitetitle  ?> | Home</title>
</head>
<body>
<center>
<!-- Main page body and blocks of php and everything else -->
Welcome to your page. This is the main block for the page.
<br/>
<!-- End main page body -->
</center>
</body>
</html>
<!-- Main page end -->
<?php endif ?>
<!-- Block 1 code stop -->

<!-- Block projects code start -->
<?php if ($_GET['blockid'] == "projects" ) : ?>
<!-- Main page start -->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitetitle  ?> | Projects</title>
</head>
<body>
<center>
<!-- Main page body and blocks of php and everything else -->
This is listed as a projects page, but check the block id above and title name and you can make it whatever you want.
<!-- End main page body -->
</center>
</body>
</html>
<!-- Main page end -->
<?php endif ?>
<!-- Block projects code stop -->

<!-- Block about code start -->
<?php if ($_GET['blockid'] == "about" ) : ?>
<!-- Main page start -->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitetitle  ?> | About</title>
</head>
<body>
<center>
<!-- Main page body and blocks of php and everything else -->
This is listed as an about page, but check the block id above and title name and you can make it whatever you want.
<!-- End main page body -->
</center>
</body>
</html>
<!-- Main page end -->
<?php endif ?>
<!-- Block about code stop -->

<!-- Block resume code start -->
<?php if ($_GET['blockid'] == "resume" ) : ?>
<!-- Main page start -->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $sitetitle  ?> | Résumé</title>
</head>
<!-- Main page body and blocks of php and everything else -->
<body>
<center>
This is listed as a resume page, but check the block id above and title name and you can make it whatever you want.

</center>
</body>
</html>
<!-- Main page end -->
<?php endif ?>
<!-- Block resume code stop -->


<!-- Including footer.php -->
<?php include 'footer.php'; ?>

<!-- End maintenance mode check on or off -->
<?php endif ?>