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
			.button {
			    border: 2px solid black;
			    font-size: 20px;
			    height: 50px;
			    width: 300px;
			}
			.button:hover, .button:active {
			    background-color: black;
			    color: white;
			}
			.button:focus {
			    outline: 0;
			}
		</style>
	</head>
	<body>
		<h2> Register as a New User: </h2> <br>	
		<form method="POST" action = "lib/InsertPeopleAndHousehold.php">
			<fieldset>
				<legend><h4> Household Address </h4></legend> <br>
				<input type="text" name="street" placeholder="Street Address" required> 
    			<input type="text" name="city" placeholder="City" required>
				<input type="text" name="zipcode" placeholder="Zip Code" pattern="[0-9]{5}" maxlength="5" required> <br>
	
			</fieldset><br>
    		Household member 1 
  			<div id="dynamicInput">
          		<fieldset>
    				<legend><h4>Household member information:</h4></legend> <br>
    				Name: <input type="text" name="fname[]" placeholder="First name" required>    
   					<input type="text" name="lname[]" placeholder="Last name" required> 
					Date of Birth: <input type="date" name = "DOB[]" required >
				</fieldset>	<br>
			</div>
			<input class = "button" type="button" value="Add household member" onClick="addInput('dynamicInput');"> <br>
			<div align="center">
				<input class = "button" type="submit" value="Submit">
				<input class = "button" type="reset" value="Reset" >
     		</div>
		</form>
		<script>
			var counter = 1;
			function addInput(divName){
	        	var newdiv = document.createElement('div');
			  	var g = document.createElement('button');
	          	newdiv.innerHTML = "<br>" + "Household member " + (counter + 1) +" <br><fieldset><legend><h4>Household member information:</h4></legend> <br>Name: <input type='text' name = 'fname[]' placeholder='Firstname' required> <input type='text' name='lname[]' placeholder='Last name' required> Date of Birth: <input type='date' name = 'DOB[]'></fieldset>" + "<br> <input class = 'button' type='button' value='Remove household member' onclick='removeElement('')><br><br>";
			  	counter++;
			  	newdiv.setAttribute("id", "id_" + counter);
	          	document.getElementById(divName).appendChild(newdiv);
			}
		</script>
	</body>
</html>
