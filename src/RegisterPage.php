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
		ul {
    		list-style-type: none;
    		margin: 0;
    		padding: 0;
    		overflow: hidden;
    		background-color: #333;
		}

		li {
    		float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}
		
		li a:hover {
		    background-color: #111;
		}
		</style>
	</head>
	<body>
		<ul>
		  <li><a href="CheckInPage.php">Check-In</a></li>
		  <li><a href="RegisterPage.php">Register</a></li>
		  <li><a href="AddLocation.php">Change Location</a></li>
		  <li><a href="#about">About</a></li>
		</ul>
		<h2> Register as a New User: </h2> <br>	
		<form method="POST" action = "lib/InsertPeopleAndHousehold.php">
			<span id="myForm">
			<fieldset>
				<legend><h4> Household Address </h4></legend> <br>
				<input type="text" name="street" placeholder="Street Address" required> 
    			<input type="text" name="city" placeholder="City" required>
				<input type="text" name="zipcode" placeholder="Zip Code" pattern="[0-9]{5}" maxlength="5" required> <br>
	
			</fieldset><br>
    		Household member  
  			<div id="dynamicInput">
          		<fieldset>
    				<legend><h4>Household member information:</h4></legend> <br>
    				Name: <input type="text" name="fname[]" placeholder="First name" required>    
   					<input type="text" name="lname[]" placeholder="Last name" required> 
					Date of Birth: <input type="date" name = "DOB[]" required >
				</fieldset>	<br>
			</div>
			</span>
			<br><br>
			<input type="button" value="Add household member" onClick="addInput('myForm');"> <br>
			<input type="button" value="Add household member" onClick="addInput('dynamicInput');"> <br>
			<div align="center">
				<input type="submit" value="Submit">
				<input type="reset" value="Reset" >
     		</div>
		</form>
		<script>
			var counter = 1;
			function addInput(divName){

	        	var newdiv = document.createElement('span');
	          	newdiv.innerHTML = "<br><br>" + "Household member " +" <br><fieldset><legend><h4>Household member information:</h4></legend> <br>Name: <input type='text' name = 'fname[]' placeholder='Firstname' required> <input type='text' name='lname[]' placeholder='Last name' required> Date of Birth: <input type='date' name = 'DOB[]'></fieldset><br>" ;
	          	var g = document.createElement('button');
	        	var newdiv = document.createElement('div');
			  	var g = document.createElement('button');
	          	newdiv.innerHTML = "<br>" + "Household member " +" <br><fieldset><legend><h4>Household member information:</h4></legend> <br>Name: <input type='text' name = 'fname[]' placeholder='Firstname' required> <input type='text' name='lname[]' placeholder='Last name' required> Date of Birth: <input type='date' name = 'DOB[]'></fieldset>" + "<input type='button' value='Remove household member' onclick='removeElement('')><br><br>";
			  	counter++;
			  	newdiv.setAttribute("id", "id_" + counter);
			  	g.innerHTML= 'Remove Household Member';
			  	g.setAttribute("onclick", "removeElement('myForm','id_" + counter + "')");
			  	newdiv.appendChild(g);
	          	document.getElementById(divName).appendChild(newdiv);
	          	//var g = document.createElement('button');
	          	// g.setAttribute(value,'Remove Household Member');
	          	// document.getElementById(divName).appendChild(g);
			}
			function removeElement(parentDiv, childDiv){
if (childDiv == parentDiv){
alert("The parent div cannot be removed.");
}
else if (document.getElementById(childDiv)){
var child = document.getElementById(childDiv);
var parent = document.getElementById(parentDiv);
parent.removeChild(child);
counter --;
}
else{
alert("Child div has already been removed or does not exist.");
return false;
}
}
		</script>
	</body>
</html>
