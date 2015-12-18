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

<?PHP
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$Fname = trim($_POST['Fname']);
		$Lname = trim($_POST['Lname']);
		$Email = trim($_POST['Email']);
		$phonenumber = trim($_POST['phonenumber']);
		$Address = trim($_POST['Address']);
		$CARD_NUMBER = trim($_POST['CARD_NUMBER']);
		$repass = trim($_POST['repassword']);
		
		
		
		$query1 = "SELECT * from GAME_USER where USERNAME = '$username'";
		$parseRequest = oci_parse($conn, $query1);
		oci_execute($parseRequest);
		$row1 = oci_fetch_array($parseRequest, OCI_RETURN_NULLS+OCI_ASSOC);
		
		if($row1['USERNAME'] == NULL){
			echo "SUCSESS" ;
			$query = "INSERT INTO GAME_USER (USERNAME,PASSWORD,FNAME,LNAME,EMAIL,PHONENUMBER,ADDRESS,CARD_NUMBER) VALUES ('$username','$password','$Fname','$Lname','$Email','$phonenumber','$Address','$CARD_NUMBER')";
	
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);
		}
		else{
				echo "USERNAME HAVE BEEN USED" ;
			}
	}
	oci_close($conn);
?>

<?PHP
	if(isset($_POST['back'])){
		echo '<script>window.location = "login.php";</script>';
	};
?>


<style type="text/css">
body {
	background-image: url(caffeine-1920x1080-best-games-2015-game-horror-sci-fi-pc-ps4-xbox-one-6779.jpg);
}
body,td,th {
	color: #FFF;
}
</style>
<body topmargin="150">
<table width="367" height="432" border="1" align="center">
  <tr>
    <td><table width="152" border="0" align="center">
  <tr>
  
    <td><form action='regis.php' method='post'>
	Username <br>
	<input name='username' type='input'><br>
	Password<br>
	<input name='password' type='password'><br>
    
    firstname<br>
    <input name='Fname' type='input'><br>
    Lastname<br>
    <input name='Lname' type='input'><br>
    Email<br>
    <input name='Email' type='input'><br>
    Phonenumber<br>
    <input name='phonenumber' type='input'><br>
    Address<br>
    <input name='Address' type='input'><br>
    Cradit ID<br>
    <input name='CARD_NUMBER' type='input'><br>
	<input name='submit' type='submit' value='submit'> 
    <input name='back' type='submit' value='Back' />
</form></td>
  </tr>
</table></td>
  </tr>
</table>

</body>
</html>

