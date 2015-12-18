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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','9','777', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>
<table width="892" height="2604" border="0" align="center">
  <tr>
    <th width="250" height="226" scope="row"><img src="gta5_cover-720x886.jpg" width="210" height="257" /></th>
    <td width="295"> <center>GTA 5</center></td>
    <td width="325">
    <form action='gta5.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
    </td>
  </tr> 
  <tr>
    <th height="87" scope="row">สเปคคอมพิวเตอร์ขั้นต่ำเกมส</th>
    <td colspan="2" rowspan="2"><p>    
      <table width="490" height="270" border="1">
      <tr>
        <th colspan="2" scope="row">• Processor: Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz
          <p> • Memory: 4GB</p>
          <p> • Video Card: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)</p>
          <p> • Sound Card: 100% DirectX 10 compatible</p>
          <p> • HDD Space: 65GB </p></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <th height="149" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="70" scope="row">ข้อมูล</th>
    <td colspan="2" rowspan="2">
    ก็แนวเดียวกับ GTA ภาคก่อนๆ คือมีภารกิจหลัก ภารกิจรองมาให้เราเลือกทำตามใจชอบ ซึ่งฟีเจอร์ที่แปลกจากภาคอื่นคือ
    เราสามารถปรับแต่เมือง Los Santos ได้ด้วย เกมนี้มีสารพัดวิธีในการปล้น ยานพาหนะหลากหลายให้เลือกใช้ แต่การบังคับรถนั้น ยากขึ้นมากทีเดียว ต่อให้คุณเป็นมือโปรในการขับรถจากภาคเก่าๆก็เถอะ ระวังจะตายเอาได้ง่ายๆนะ แถมเกม Grand Theft Auto V (GTA 5) นี้ยังมีตัวละครหลักมากกว่าสามตัวให้เราควบคุมขณะไปทำภารกิจ
    </td>
  </tr>
  <tr>
    <th height="135" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="67" scope="row">ภาพในเกมส์</th>
    <td colspan="2" rowspan="2"> <p> <img src="gta-5-new-cheat-codes-tricks-ps3-xbox-360.jpg" width="729" height="448" /><p>
    <img src="GTA5-grand-theft-auto-32709796-960-540.jpg" width="730" height="407" />    
    <p><img src="gta5-1.jpg" width="727" height="461" />        
    <p><img src="2715612-firstperson1.jpg" width="721" height="435" /></td>
  </tr>
  <tr>
    <th height="581" scope="row">&nbsp;</th>
  </tr>
</table>

</body>
</html>