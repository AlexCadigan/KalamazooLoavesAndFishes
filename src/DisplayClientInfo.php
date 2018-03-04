<!--
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
-->
<?php
require "lib/config.php";
$sql_checkin = "SELECT * FROM People WHERE (FirstName='" . $_POST['fname'] . "') AND (LastName='" . $_POST['lname'] . "') AND (DateofBirth='" . $_POST['DOB'] . "') LIMIT 1";
$result_checkin = mysqli_query($connection, $sql_checkin);
// if the results are non empty
if ($result_checkin->num_rows > 0) {
  // fetch householdID
  $result = $result_checkin -> fetch_assoc();
  $householdID = $result['HouseholdID'];
  // display household information
  $household_query = mysqli_query($connection, "SELECT Street, City, ZIP, Size FROM Households WHERE ID='" . $householdID . "' LIMIT 1");
  while ($hh = $household_query->fetch_assoc()) {
    echo "Household Address: " . $hh['Street'] . " " . $hh['City'] . " " . $hh['ZIP'] . "<br>";
    echo "Household Size: " . $hh['Size'] . "<br><br>";
  }
  $members_query = mysqli_query($connection, "SELECT FirstName, LastName, DateOfBirth FROM People WHERE HouseholdID='" . $householdID . "'");
  // display table of household members
  echo "<table>";
  echo "<tr><th>First Name</th><th>Last Name</th><th>Date of Birth</th></tr>";
  while($row = $members_query->fetch_assoc()) {
    echo "<tr><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['DateOfBirth'] . "</tr>";
  }
  echo "</table>";
}
else {
  echo "No records matching your query were found.";
}
// Close connection
mysqli_close($connection);
?>
<html>
	<script>
		function returnRegister() {
			window.location.href = "../HomePage.php";
		}
	</script>
</html>
