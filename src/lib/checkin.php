<!--
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
require "config.php";
$sql_checkin = "SELECT * FROM People WHERE FirstName='" . $_POST['fname'] . "'";
$result_checkin = mysqli_query($connection, $sql_checkin);


// Free result set
// mysqli_free_result($result_checkin);
//     echo "No records matching your query were found.";

if ($result_checkin->num_rows > 0) 
{
    // output data of each row
    while($row = $result_checkin->fetch_assoc()) 
    {
        echo "fname: " . $row["FirstName"]. " lname: " . $row["LastName"]. " DOB" . $row["DateOfBirth"] . "<br>";
    }
} 
// Close connection
mysqli_close($connection);
?>

<html>
	<!-- <script>
		window.onload = returnHome();
		function returnHome() {
			window.location.href = "../index.html";
		}
	</script> -->
</html>