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

  <link rel="stylesheet" href="css/themes/tourtess-theme.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />

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