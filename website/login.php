<?PHP
	session_start();
	// Create connection to Oracle
	$conn = oci_connect("system", "Rukhuman1198", "//localhost/XE");
	if (!$conn) {
		$m = oci_error();
		echo $m['message'], "\n";
		exit;
	} 
?>
welcome
<hr>

<?PHP
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		
		$query = "SELECT * FROM GAME_USER WHERE USERNAME='$username' and PASSWORD='$password'";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);
		// Fetch each row in an associative array
		$row = oci_fetch_array($parseRequest, OCI_RETURN_NULLS+OCI_ASSOC);
		if($row){
			$_SESSION['username'] = $row['USERNAME'];
			$_SESSION['password'] = $row['PASSWORD'];
			$_SESSION['fname'] = $row['FNAME'];
			$_SESSION['lname'] = $row['LNAME'];
			$_SESSION['email']	= $row['EMAIL'];
			$_SESSION['phonenumber'] = $row['PHONENUMBER'];
			$_SESSION['address'] = $row['ADDRESS'];
			$_SESSION['card_number'] = $row['CARD_NUMBER'];
			echo '<script>window.location = "index.php"</script>';
		}else{
			echo "Login fail.";
		}
		
	};
	oci_close($conn);
?>
<style type="text/css">
body,td,th {
	color: #FFF;
}
body {
	background-image: url(caffeine-1920x1080-best-games-2015-game-horror-sci-fi-pc-ps4-xbox-one-6779.jpg);
}
</style>
<body topmargin="350">
<table width="300" height="100" border="1" align="center">
  <tr>
    <td><form action='login.php' method='post'>
	Username <br>
	<input name='username' type='input'><br>
	Password<br>
	<input name='password' type='password'><br>
   
	<input name='submit' type='submit' value='Login'>
    <?PHP
echo "<a href='regis.php'>register</a>"."<br>";
?>
</form></td>
  </tr>
</table>
</body>

