<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: "Arial Black", Gadget, sans-serif;
	color: #FFF;
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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','8','569', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>
<table width="937" height="1044" border="0" align="center">
  <tr>
    <th width="228" height="194" scope="row"><img src="151207040200815664.jpg" width="228" height="291" /></th>
    <td width="325"><center>DIRT RALLY </center></td>
    <td width="362">
    <form action='dirtrelly.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
    </td>
  </tr>
  <tr>
    <th height="70" scope="row">สเปคคอมพิวเตอร์ขั้นต่ำเกมส</th>
    <td colspan="2" rowspan="2"><p>&nbsp;</p>
      <table width="542" height="226" border="1">
        <tr>
          <th width="395" colspan="2" scope="row">OS: Windows 7 or Windows 8<br />
Processor: AMD Athlon x2 Dual Core or Intel Core 2 Duo  Processor @ 2.4Ghz<br />
Memory: 4 GB RAM<br />
Graphics: AMD HD5450 or Nvidia GT430 or Intel HD4000 with  1GB of VRAM<br />
Hard Drive: 35 GB available space<br />
Sound Card: DirectX Compatible soundcard</th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="233" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="49" scope="row">ข้อมูล</th>
    <td colspan="2" rowspan="2">
    มาพร้อมกับรถยนต์คันใหม่ขั้นต้นจำนวน 17 คัน บรรจุสนามแข่งขันกว่า 36 สนาม จากแวดล้อมอันหลากหลาย 
 รูปแบบการเล่นเกมส์ยังเป็นลักษณะการแข่งขันเพื่อชิงชัยอันดับหนึ่ง ทำการบังคับรถยนต์แข่งบนสนามอันคดเคี้ยว
 และท้าทายต่อการบังคับ นอกจากนี้ทางผู้พัฒนาเกมส์จะทำการเพิ่มเติมรถยนต์คันใหม่, สนามแข่งใหม่ๆ รวมถึง
 โหมดการเล่นเกมส์ที่สร้างความท้าทายและความสนุกแก่ผู้เล่นมากขึ้น เกมส์นี้ นอกจากจะพัฒนาเรื่องความเสมือน
 จริงของแวดล้อมเกมส์ สมรรถะภาพการขับเคลื่อนก็เป็นองค์ประกอบสำคัญเพื่อให้การเล่นเกมส์มีความสมจริงทุก
 การบังคับจากการแข่งขันแรลลี่ ทั้งนี้ ยังสร้างความท้าทายด้านทักษะการขับเคลื่อนเหล่าผู้เล่นเกมส์ที่ชื่นชอบเกม
 แข่งรถ หรือนักแข่งมืออาชีพ 
    </td>
  </tr>
  <tr>
    <th height="222" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="45" scope="row">ภาพในเกมส์</th>
    <td colspan="2" rowspan="2"><p>&nbsp;</p>
    <p><img src="767_244992137.jpg" width="692" height="430" /></p>
    <p>&nbsp;</p>
    <p><img src="DiRT_Rally_Announce_06-823x436.png" width="695" height="373" /></p>
    <img src="630x.jpg" width="696" height="395" /><p><img src="DIRT-World-RX.jpg" width="694" height="476" /></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>

</body>
</html>