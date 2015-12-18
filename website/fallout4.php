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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','2','500', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>

<body>
<table width="920" height="2337" border="0" align="center">
  <tr>
    <th width="193" scope="row"><img src="Fallout_4_box_cover.jpg" width="182" height="228" /></th>
    <td width="449"><p align="center"><strong>Fall Out 4</strong></p></td>
    <td width="268">
    <form action='fallout4.php' method='post'>
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
      <table width="600" height="81" border="0" align="left">
        <tr>
          <th height="77" scope="row">เกมส์นี้พาผู้เล่นไปยังเมืองรกร้างหลังภัยนิวเคลียร์ของกรุงบอสตัน นำเสนอฉากตัวเมืองของ Scollay Square
ที่กลายสภาพมาเป็นพื้นที่ตลาดกลางเมือง ชานเมืองอันแห้งแล้ง หรืออาคารรกร้างที่เหลือเพียงแค่อดีต
 ภายในเกมส์ผู้เล่นสวมบทบาทเป็นชายหนุ่มที่ได้รับเลือกเป็นประชาชนใน Vault ที่ทางรัฐบาลริเริ่มขึ้น
 จะสังเกตได้ว่า เกมภาคนี้จะถ่ายทอดในช่วงที่บ้านเมืองเป็นสุขจนถึงภัยนิวเคลียร์ครั้งใหญ่สู่ผืนประเทศ
 อเมริกา และนำเสนอเหตุการณ์กว่า 200 ปีให้หลังกับเหตุการณ์ล้างโลก สิ่งมีชีวิตทั้งหมดกลายพันธุ์
 เป็นสัตว์ประหลาด รวมถึงกลุ่มโจรผู้บ้าคลั่งที่หวังปองร้ายผู้รอดชีวิต ด้านกราฟิกเกมส์ Fallout 4 มีการ
 จัดทำให้ภาพเกมส์คมชัดทันสมัยมากขึ้น ปรับแต่งระบบแสง-เงาอย่างนุ่มนวล ออกแบบอินเตอร์เฟสเกม
 ดูสะอาดตาขึ้น ส่วน AI เกมส์ยังชาญฉลาดอีกเช่นกัน
</th>
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
    <td colspan="3" rowspan="2"><p><img src="Fallout-4-400-hours.jpg" width="714" height="420" /></p>
    <p><img src="fallout-4-protectron_1920.0.jpg" width="725" height="413" /></p>
    <p><img src="Fallout4_E3_GarageRun.png" width="724" height="403" /></p>
    <p><img src="Fallout4_Preston.png" width="727" height="401" /></p></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
