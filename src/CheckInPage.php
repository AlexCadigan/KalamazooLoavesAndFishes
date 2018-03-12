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
<title>Check-in</title>
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
      <li class="active"><a href="CheckInPage.php">Check-In</a></li>
      <li><a href="RegisterPage.php">Register</a></li>
      <li><a href="index.php">Change Location</a></li>
      <li><a href="#about">About</a></li>
    </ul>
  </div>
</nav>
<div align="center" class="container">
  <form  class="form-horizontal" method="POST" action = "DisplayClientInfo.php">
    <h2> Enter your information: </h2>
    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" name="fname" placeholder="First name" required>
        <input class="form-control" type="text" name="lname" placeholder="Last name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Date of Birth:</label>
      <div class="col-sm-10">
        <input class="form-control" type="date" name = "DOB" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Enter</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
