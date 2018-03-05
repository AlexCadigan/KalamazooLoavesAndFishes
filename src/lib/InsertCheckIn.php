<?php
/*
MIT License

Copyright (c) 2018 Alex Cadigan, Jacob Naranjo, Sarah Sui, Bek Akilov, Emilio Jerez

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

session_start();
require "config.php";

// get household ID from household info
$householdQuery = mysqli_query($connection, "SELECT ID FROM Households WHERE (Street = '" . $_POST['street'] . "') AND (City = '" . $_POST['city'] . "') AND (ZIP = '" . $_POST['ZIP'] . "')");
while ($household = $householdQuery -> fetch_assoc()) {
	$householdID = $household['ID'];
}

// get location ID from session info
$locationQuery = mysqli_query($connection, "SELECT ID FROM Locations WHERE (Name = '". $_SESSION['Location'] . "')");
while ($location = $locationQuery -> fetch_assoc()) {
	$locationID = $location['ID'];
}

// get household size from form
$householdSize = count($_POST['fname']);

for ($index = 0; $index < $householdSize; $index ++) {

	// get person ID from person info
	$personQuery = mysqli_query($connection, "SELECT ID FROM People WHERE (FirstName='". $_POST['fname'][$index] . "') AND (LastName='" . $_POST['lname'][$index] . "') AND (DateOfBirth='" . $_POST['dob'][$index] . "') LIMIT 1");
	while ($person = $personQuery -> fetch_assoc()) {
		$personID = $person['ID'];
	}

	mysqli_query($connection, "INSERT INTO CheckIn VALUES (" . $personID . ", " . $householdID . ", " . $locationID . ", CURDATE())");
}

//mysqli_query($connection, "INSERT INTO CheckIn (HouseholdID, LocationID, CheckInDate) VALUES ('" . $householdID . "', '" . $locationID . "', CURDATE())"); ?>

	<!-- <script>
		window.onload = returnHome();
		function returnHome() {
			window.location.href = "../HomePage.php";
		}
	</script> -->

<html>
<script>
	window.onload = returnHome();
	function returnHome() {
		window.location.href = "../HomePage.php";
	}
</script>

<body>
</body>

</html>
