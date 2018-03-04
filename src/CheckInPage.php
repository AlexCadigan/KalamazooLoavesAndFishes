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
  		<title> KLF - MFI </title>
		<link rel = "icon" href = "img/KLFLogo.jpg">
	</head>
	<body>
  		<h2 align="center"> Enter Your Information: </h2>
		<form method="POST" action = "DisplayClientInfo.php">
			<fieldset>
				<legend><h4> Please enter your information </h4></legend> <br>
				Name: <input type="text" name="fname" placeholder="First name" required>    
    			<input type="text" name="lname" placeholder="Last name" required> 
				Date of Birth: <input type="date" name = "DOB" required>
			</fieldset><br>
			<input type="submit" value="Enter">
			<input type="reset" value="Reset" >
		</form>
	</body>
</html>