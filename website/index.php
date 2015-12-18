
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(caffeine-1920x1080-best-games-2015-game-horror-sci-fi-pc-ps4-xbox-one-6779.jpg);
}
body,td,th {
	color: #FFF;
}
</style>
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
echo "<a href='Logout.php'>Logout</a>"."<br>";
?>

</head>

<body>
<table width="1000" border="0" align="center">
  <tr>
    <th width="997" colspan="6" scope="col"><img src="Untitled-4.png" width="1000" height="350" /></th>
  </tr>
  <tr>
    <td colspan="6"><ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php">หน้าหลัก</a></li>
      <li><a class="MenuBarItemSubmenu" href="#">เกมส์</a>
        <ul>
          <li><a href="FPS.html">FPS</a></li>
          <li><a href="action.html">Action</a></li>
          <li><a href="RPG.html">RPG</a></li>
          <li><a href="adventure.html">Adventure</a></li>
          <li><a href="sport.html">Sport</a></li>
          <li><a href="simulation.html">Simulation</a></li>
          
        </ul>
      </li>
      <li><a href="#">สำหรับคุณ</a></li>
      <li><a class="MenuBarItemSubmenu" href="#">เกมส์แนะนำ</a>
        <ul>
          <li><a href="index.php?a1">คล้ายเกมส์คุณ</a>
            
          </li>
          <li><a href="#">เกมส์มาใหม่</a></li>
          
        </ul>
      </li>
      <li><a href="#">วิธีการสั่งซื้อ</a></li>
      <li><a href="#">ติดต่อเรา</a></li>
<div class = "search">
	<form action = "www.google.com" >
	<input type="text" name "search" placeholder="search Here...">
	<input type="submit"value="search"/>
	</form>
<div>
    </ul></td>
  </tr>
  <tr>
    <td height="499" colspan="1">welcome   <table width="1000" height="270" border="1">
  <tr>
    <th height="264" scope="row">
     <?PHP  if(isset($_GET['fps'])){
		$query =  "SELECT * FROM GAMES WHERE TYPE like '%FPS%'";
	$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);
		// Fetch each row in an associative array
		$row = oci_fetch_array($parseRequest, OCI_RETURN_NULLS+OCI_ASSOC);
	
	$_SESSION['name']= $row['GAMENAME'];
	$_SESSION['class']= $row['TYPE'];
	$_SESSION['price']= $row['PRICE'];
	$_SESSION['company']= $row['GCOMPANY'];
	
	echo $_SESSION['name'];
	echo " "."<br>";
	echo $_SESSION['class'];
	echo " "."<br>";
	echo $_SESSION['price'];
	echo " "."<br>";
	echo $_SESSION['company'];
	
			
	}  ?>
    <form action='index.php' method='post'>
    <?PHP  if(isset($_GET['a1'])){
		
		$query = "select TYPE from GAMES,GAME_HISTORY WHERE GAME_HISTORY.G_ID = GAMES.GAMES_ID";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);
		$tgame = oci_fetch_array($parseRequest, OCI_RETURN_NULLS+OCI_ASSOC);
		$query = "SELECT * FROM GAMES WHERE TYPE = '$tgame[TYPE]'";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);
		// Fetch each row in an associative array
		$row = oci_fetch_array($parseRequest, OCI_RETURN_NULLS+OCI_ASSOC);
	
	$_SESSION['name']= $row['GAMENAME'];
	$_SESSION['class']= $row['TYPE'];
	$_SESSION['price']= $row['PRICE'];
	$_SESSION['company']= $row['GCOMPANY'];
	
	echo $_SESSION['name'];
	echo " "."<br>";
	echo $_SESSION['class'];
	echo " "."<br>";
	echo $_SESSION['price'];
	echo " "."<br>";
	echo $_SESSION['company'];
	
			
	}  ?> </th>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td colspan="6"><img src="down.png" width="1000" height="400" /></td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
