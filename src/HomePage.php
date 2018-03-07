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
		<style>
			.page {
				text-align: center;
			}
			#title {
				font-size: 40px;
			}
			.instructions {
				text-align: center;
				font-size: 30px;
			}
			button {
			    border: 2px solid black;
			    font-size: 20px;
			    height: 50px;
			    width: 250px;
			}
			button:hover, button:active {
			    background-color: black;
			    color: white;
			}
			button:focus {
			    outline: 0;
			}
		</style>
	</head>
	<body>
		<div id = 'title' class = 'page'>
			Welcome to Kalamazoo Loaves and Fishes - Mobile Food Initiative!
		</div> <br> <br>
		<div class = 'instructions'>
			Click here if you are a new client: <br> <br>
			<button onclick = 'displayRegisterPage()'> Register </button>
		</div> <br> <br>
		<div class = 'instructions'>
			Click here if you are a returning client: <br> <br>
			<button onclick = 'displayCheckInPage()'> Check-In </button>
		</div> <br> <br>
		<div class = 'instructions'>
			Employees/Volunteers Only: <br> <br>
			<button onclick = 'displayLocationPage()'> Change Location </button>
		</div> 
		<script> 
			function displayRegisterPage() { 
				window.location.href = "RegisterPage.php";
			}
			function displayCheckInPage() {
				window.location.href = "CheckInPage.php";
			}
			function displayLocationPage() {
				window.location.href = "index.php";
			}
		</script>
	</body>
</html>
