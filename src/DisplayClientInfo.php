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
<head>
<title>KLF</title>
<link rel = "icon" href = "img/KLFLogo.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar-default {
	background-color: #0a76ac;
	border-color: #6b8adc;
}
.navbar-default .navbar-brand {
	color: #ffffff;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
	color: #fcfcfc;
}
.navbar-default .navbar-text {
	color: #ffffff;
}
.navbar-default .navbar-nav > li > a {
	color: #ffffff;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
	color: #fcfcfc;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	color: #fcfcfc;
	background-color: #6b8adc;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
	color: #fcfcfc;
	background-color: #6b8adc;
}
.navbar-default .navbar-toggle {
	border-color: #6b8adc;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
	background-color: #6b8adc;
}
.navbar-default .navbar-toggle .icon-bar {
	background-color: #ffffff;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
	border-color: #ffffff;
}
.navbar-default .navbar-link {
	color: #ffffff;
}
.navbar-default .navbar-link:hover {
	color: #fcfcfc;
}
</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header"> <a class="navbar-brand" href="#">KLF Mobile Food Initiative</a> </div>
    <ul class="nav navbar-nav">
      <li><a href="HomePage.php">Home</a></li>
      <li><a href="CheckInPage.php">Check-In</a></li>
      <li><a href="RegisterPage.php">Register</a></li>
      <li><a href="index.php">Change Location</a></li>
      <li><a href="#about">About</a></li>
    </ul>
  </div>
</nav>
<div class = "instructions"> Is the following information about yourself and your household correct? </div>
<br>
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
        echo "<form class = 'page' method = 'POST' action = 'lib/InsertCheckIn.php'>
            <fieldset>
                <legend> Household Address: </legend>
                <input type = 'text' name = 'street' value = '" . $hh['Street'] . "' readonly>
                <input type = 'text' name = 'city' value = '" . $hh['City'] . "' readonly>
                <input type = 'text' name = 'ZIP' value = '" . $hh['ZIP'] . "' readonly>
            </fieldset> <br>";
    }
    $members_query = mysqli_query($connection, "SELECT FirstName, LastName, DateOfBirth FROM People WHERE HouseholdID='" . $householdID . "'");
    // display table of household members
    echo "<fieldset>
        <legend> Household Members: </legend>
        <input type = 'text' value = 'First Name' readonly>
        <input type = 'text' value = 'Last Name' readonly>
        <input type = 'text' value = 'Data of Birth' readonly>
    </fieldset>";
    while($row = $members_query->fetch_assoc()) {
        echo "<fieldset>
            <input type = 'text' name='fname[]' value = '" . $row['FirstName'] . "' readonly>
            <input type = 'text' name='lname[]' value = '" . $row['LastName'] . "' readonly>
            <input type = 'text' name='dob[]' value = '" . $row['DateOfBirth'] . "' readonly>
        </fieldset>";
    }
    echo "<br> <br> <input type = 'submit' value = 'Information Correct'>
    </form>
    <div class = 'page'>
        <button onclick = 'displayRegisterPage()'> Information Not Correct </button>
    </div>";
}
else {
    echo "<div class = 'page'>
        No records matching your query were found <br> <br>
        <button onclick = 'displayRegisterPage()'> Register Your Information </button>
    </div>";
}
// Close connection
mysqli_close($connection); ?>
<html>
<script>
            function displayRegisterPage() {
                window.location.href = 'RegisterPage.php';
            }
        </script>
</body>
</html>
