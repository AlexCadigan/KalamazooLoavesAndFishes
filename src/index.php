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
<html>
	<!-- Sets the browser tab attributes -->
	<head>
		<title> KLF - MFI </title>
		<link rel = "icon" href = "img/KLFLogo.jpg">
		<link rel = "stylesheet" href = "index.css">
	</head>
	<!-- Drop down list of available locations -->
	<body> 
		<div id = 'title' class = 'page'>
			Welcome, KLF Employee/Volunteer!
		</div> <br>
		<div id = 'instructions' class = 'page'>
			Please select the location you will be serving food at today:
		</div> <br> <br> <br>
		<form class = 'page' method = 'POST' action = 'lib/SelectedLocation.php'>
			<select id = 'locations' name = 'Locations'>
</html>
<!-- Quierries the database for the locations -->
<?php
require "lib/config.php";
$query = mysqli_query($connection, "SELECT Name FROM Locations");
while ($location = $query -> fetch_assoc()) {
	echo "<option> " . $location['Name'] . " </option>";
} ?>
<html>
			</select>
			<br> <br> <br> <input class = 'button' type = 'submit' value = 'Enter New Location' formaction = 'AddLocation.php' /> <br> <br> <br>
			<input class = 'button' type = 'submit' value = 'Choose Selected Location' />
		</form>
	</body>
</html>