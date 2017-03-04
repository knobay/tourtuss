<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tourtuss - do something interesting</title>
    <meta name="viewport" content="initial-scale=1, user-scalable=no, width=device-width">
    <!-- Font awesome -->
 
  <link href="./font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Flags with css -->
    <link href="./css/flag-icon.css" rel="stylesheet">

    <!-- jquery mobile -->


    <link rel="stylesheet" href="./jqm/jquery.mobile-1.4.5.css" />
    <script src="./jquery/jquery-1.11.1.min.js"></script>
    <script src="./jqm/jquery.mobile-1.4.5.min.js"></script>



    <!-- jquery mobile datepicker hack -->
	<link rel="stylesheet" href="/datepicker/jquery.mobile.datepicker.css" />
	<link rel="stylesheet" href="/datepicker/jquery.mobile.datepicker.theme.css" />
	<script src="/datepicker/external/jquery-ui/datepicker.js"></script>
	<script src="/datepicker/jquery.mobile.datepicker.js"></script>
	<script>
		$(function(){
			$( ".date-input-css" ).datepicker();
		})
	</script>


    <!-- autocomplete -->
    <link rel="stylesheet" href="./autocomplete/styles.css" />
    <script src="./autocomplete/jqm.autoComplete-1.5.2-min.js"></script>
	<script src="./automcomplete/code.js"></script>
    <!-- My custom stuff -->
    <link href="css/tourtuss.css" rel="stylesheet">
</head>
<body>
<?php include ('destination.php'); ?>
<?php include ('listing.php'); ?>
<?php include ('experience.php'); ?>
<?php include ('bookings.php'); ?>
<?php include ('book.php'); ?>
<?php include ('maybes.php'); ?>
<?php include ('notifications.php'); ?>
<?php include ('profile.php'); ?>
<?php include ('confirmation.php'); ?>
</body>
</html>