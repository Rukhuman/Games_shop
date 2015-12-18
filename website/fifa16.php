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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','7','999', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>

<body>
<table width="920" height="2337" border="0" align="center">
  <tr>
    <th width="193" scope="row"><img src="FIFA_16_cover.jpg" width="182" height="228" /></th>
    <td width="449"><p align="center"><strong>FIFA 16</strong></p></td>
    <td width="268">
    <form action='fifa16.php' method='post'>
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
          <th width="504" height="184" scope="row">OS: Windows V/7/8/8.1 -64-bit<br />
CPU: Intel Core i3-2100 @ 3.1GHz<br />
RAM: 4GB<br />
Hard Drive Space Required: 15.0 GB<br />
Video Cards: ATI Radeon HD 5770, NVIDIA GTX 650<br />
DirectX 11.0</th>
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
      <table width="500" height="81" border="0" align="left">
        <tr>
          <th height="77" scope="row">FIFA16 เป็นเกมแนว Sport สร้างโดย บ. EA ที่ได้รับสิทธิ์ในการทำเกมฟุตบอลที่คัดมาจากลีคดังๆ 
		  ที่มีอยู่จริง จากทั่วทุกมุมโลก มีการเปลี่ยนแปลงสถิติ ความสามารถนักเตะตามช่วงปีนั้นๆ 
		  ซึ่งโดยรวมมันก็เหมือนกับภาคก่อนๆนั่นละครับ แต่ว่าในแต่ละภาคใหม่ก็จะมีระบบใหม่ๆเพิ่มเติมขึ้นมาทุกปี</th>
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
    <td colspan="3" rowspan="2"><p><img src="fifa-16.jpg" width="714" height="420" /></p>
    <p><img src="1032142_screenhi_930x524_MorganHero.jpg" width="725" height="413" /></p>
    <p><img src="A661-0.jpg" width="724" height="350" /></p>
    </td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
