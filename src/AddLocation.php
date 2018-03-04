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
require 'lib/SelectedLocation.php';
echo $_SESSION['Location'];
?>
<html>
	<!-- Sets the browser tab attributes -->
	<head>
		<title> KLF - MFI </title>
		<link rel = "icon" href = "img/KLFLogo.jpg">
		<style>
			.page {
				text-align: center;
			}
			#instructions {
				font-size: 30px;
			}
			.button {
				font-size: 200px;
			}
		</style>
	</head>
	<body>
		<div id = 'instructions' class = 'page'>
			Please enter the new location:
		</div> <br> <br>
		<form class = 'page' method = 'POST' action = 'lib/InsertLocation.php'>
			<fieldset>
				<input type = 'text' name = 'name' placeholder = 'Location Name' required>
				<input type = 'text' name = 'street' placeholder = 'Location Street' required>
				<input type = 'text' name = 'city' placeholder = 'Location City' required>
				<input type = "text" name = "ZIP" placeholder = "Location Zip" pattern="[0-9]{5}" maxlength="5" required>
			</fieldset> <br> <br>
			<input class = 'button' type = 'submit' value = 'Add Location'> <br> <br>
		</form>
		<form class = 'page' action = 'index.php'>
			<input class = 'button' type = 'submit' value = 'Back'>
		</form>
	</body>
</html>
