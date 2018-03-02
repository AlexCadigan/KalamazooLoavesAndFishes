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

$sql_checkin = "SELECT * FROM People WHERE (FirstName='" . $_POST['fname'] . "') AND (LastName='" . $_POST['lname'] . "') AND (DateofBirth='" . $_POST['DOB'] . "') LIMIT 1";
$result_checkin = mysqli_query($connection, $sql_checkin);


if ($result_checkin->num_rows > 0) {
    // fetch householdID of the person
    $result = $result_checkin -> fetch_assoc();
    $householdID = $result['HouseholdID'];

    $members_query = mysqli_query($connection, "SELECT FirstName, LastName, DateOfBirth FROM People WHERE HouseholdID='" . $householdID . "'");

    // output data of each row
    while($row = $members_query->fetch_assoc())
    {
        echo
        "<form method='POST' action = 'lib/CheckinResult.php'>
		<fieldset>
		<br>
		First Name:
		<input type='text' name='fname' value='" . $row['FirstName'] . "' placeholder='First name' required>
    	Last Name:
    	<input type='text' name='lname' value='" . $row['LastName'] . "' placeholder='Last name' required>
		Date of Birth:
		<input type='date' name = 'DOB' value='" . $row['DateOfBirth'] . "' required>
		</fieldset><br>
		<input type='submit' value='Correct'>
		<input type='button' value='Not Correct' onClick='returnRegister()'>
		</form>";
    }
}
else {
     echo "No records matching your query were found.";
}

// Close connection
mysqli_close($connection);
?>

<!-- Redirects to the "register" page -->
<html>
	<script>
		function returnRegister() {
			window.location.href = "../register_page.html";
		}
	</script>
</html>
