<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <title>Tourtuss - do something interesting</title>
    <meta name="viewport" content="initial-scale=1, user-scalable=no, width=device-width">
    <!-- Font awesome -->
    <script src="https://use.fontawesome.com/b7a4aa1c5d.js"></script>
    <!-- Flags with css -->
    <link href="./css/flag-icon.css" rel="stylesheet">
    <!-- jquery mobile -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
    <!-- My custom stuff -->
    <link href="css/tourtuss.css" rel="stylesheet">
</head>
<body>
<?php include ('page-destination.php'); ?>
<?php include ('page-experience-listing.php'); ?>
<?php include ('page-experience-detail.php'); ?>
<?php include ('page-bookings.php'); ?>
<?php include ('page-book.php'); ?>
<?php include ('page-maybes.php'); ?>
<?php include ('page-notifications.php'); ?>
<?php include ('page-profile.php'); ?>
<?php include ('page-confirm.php'); ?>
</body>
</html>