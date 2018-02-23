<!--
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
-->
<?php
require "config.php";
$householdSize = count($_POST['fname']);
for ($index = 0; $index < $householdSize; $index ++) {
	// HouseholdID cannot be added until we have entered something into the households table because we need to query that table to get the householdID
	mysqli_query($connection, "INSERT INTO People (HouseholdID, DateRegistered, FirstName, LastName, DateOfBirth) VALUES (0, CURDATE(), '" . $_POST['fname'][$index] . "', '" . $_POST['lname'][$index] . "', '" . $_POST['DOB'][$index] . "')");
}
mysqli_close($connection); ?>
<!-- Redirects to the "submit a form" page -->
<html>
	<script>
		window.onload = returnHome();
		function returnHome() {
			window.location.href = "../index.html";
		}
	</script>
</html>
