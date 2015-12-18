<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	background-image: url(caffeine-1920x1080-best-games-2015-game-horror-sci-fi-pc-ps4-xbox-one-6779.jpg);
}
</style>
</head>
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
    
    $uname = $_SESSION['username'];
	$query = "select current_date from dual";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);
		$date = oci_fetch_array($parseRequest, OCI_RETURN_NULLS+OCI_ASSOC);
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','11','222', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>

<body>
<table width="920" height="2337" border="0" align="center">
  <tr>
    <th width="193" scope="row"><img src="Assassins_Creed_Syndicate_AGNOSTIC_Box_Art_1431440045.0.jpg" width="182" height="228" /></th>
    <td width="449"><p align="center"><strong>Assassin's  Creed Syndicate</strong></p></td>
    <td width="268">
    <form action='assasin.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
    </td>
    <td width="2">&nbsp;</td>
  </tr>
  <tr>
    <th height="69" scope="row">&nbsp;</th>
    <td colspan="3" rowspan="3"><p>&nbsp;</p>
      <table width="544" height="190" border="1">
        <tr>
          <th width="504" height="184" scope="row">OS: Windows 7 SP1, Windows 8.1, Windows 10 (64bit  versions)<br />
CPU: Intel Core i5 2400s @ 2.5 GHz or AMD FX 6350 @ 3.9  GHz<br />
RAM: 6GB or more for Windows 7, Windows 8.1, Windows 10<br />
Video: Nvidia GeForce GTX 660 or AMD Radeon R9 270 (2GB  VRAM with Shader Model 5.0)<br />
DirectX: DirectX June 2010 Redistributable<br />
Sound: DirectX compatible sound card with latest drivers</th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="69" scope="row">สเปคคอมพิวเตอร์ขั้นต่ำเกมส์ </th>
  </tr>
  <tr>
    <th height="45" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="23" scope="row">&nbsp;</th>
    <td colspan="3" rowspan="3"><p>&nbsp;</p>
      <table width="200" height="81" border="0" align="left">
        <tr>
          <th height="77" scope="row">เกมนี้ จะเล่าถึงปัญหา &ldquo;ความเหลื่อมล้ำของสังคมทุนนิยม&rdquo; ที่เกิดขึ้นหลังยุคปฏิวัติอุตสาหกรรมที่คนจนถูกนายทุนกดขี่ไม่เว้นแม้แต่เด็กจนๆจึงเกิด แก๊งมาเฟียใต้ดิน มาต่อสู้กับความอยุติธรรม</th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="85" scope="row">เนื้อเรื่อง</th>
  </tr>
  <tr>
    <th height="44" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="71" scope="row">ภาพในเกมส์</th>
    <td colspan="3" rowspan="2"><p><img src="acs-gi-bg1-new.jpg" width="714" height="420" /></p>
    <p><img src="assassins-creed-syndicate-base_3.jpg" width="725" height="413" /></p>
    <p><img src="assassins-creed-syndicate-2.jpg" width="724" height="403" /></p>
    <p><img src="assassins-creed-syndicate-1.jpg" width="727" height="401" /></p></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
