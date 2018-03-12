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
        
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
		
	</head>
	<body>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">KLF Mobile Food Initiative</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
       <li><a href="CheckInPage.php">Check-In</a></li>
		  <li><a href="RegisterPage.php">Register</a></li>
		  <li><a href="index.php">Change Location</a></li>
		  <li><a href="#about">About</a></li>
    </ul>
  </div>
</nav>
		<div align="center" class="container">
        <form class="form-horizontal" method="POST" action = 'lib/InsertLocation.php'>
			<h2>Please enter the new location: </h2>
		<div class="form-group">
		
			
				<input class="form-control" type = 'text' name = 'name' placeholder = 'Location Name' required>
				<input class="form-control" type = 'text' name = 'street' placeholder = 'Location Street' required>
				<input class="form-control" type = 'text' name = 'city' placeholder = 'Location City' required>
				<input class="form-control" type = "text" name = "ZIP" placeholder = "Location Zip" pattern="[0-9]{5}" maxlength="5" required>
			
            </div>
			<div class="form-group">        
    
        <button type="submit" class="btn btn-default">Enter</button>
      
    </div>
   
    
		</form>
         
		<form class = 'page' action = 'index.php'>
			
            <button type="submit" class="btn btn-default" value ='Back'>Back</button>
		</form>
        
   
	</body>
</html>
