

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
	background-color: #999;
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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','5','399', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>

<table width="857" height="1978" border="0" align="center">
  <tr>
    <td height="169"><p align="center"><img src="pc_football_manager_2016.jpg" width="142" height="200" /></p></td>
    <td width="417" height="169"><strong> Football Manager2016 </td>
    <td width="233">
    <form action='Footballmanager16.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
     
    </td>
  </tr>
  <tr>
    <td width="193" height="84">สเปคคอมพิวเตอร์ขั้นต่ำเกมส์ </td>
    <td colspan="2" rowspan="2"><p>&nbsp;</p>
      <table width="500" height="270" border="1" align="left">
        <tr>
          <td>OS: Windows Vista, 7, 8, 10 <br />
Processor: Intel Pentium 4 Intel Core AMD Athlon 2.2GHz+ <br />
Memory: 2 GB RAM <br />
Graphics: NVidia GeForce FX 5900 Ultra ATI Radeon 9800 Pro Intel GMA X3100 256MB VRAM <br />
DirectX: Version 9.0c<br />
Hard Drive: 3 GB available space </td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="84">&nbsp;</td>
  </tr>
  <tr>
    <td height="64">เนื้อเรื่อง</td>
    <center>
    <td colspan="2" rowspan="2">Football Manager คือเกมจำลองฟุตบอลที่สมจริงที่สุด ลึกซึ้งที่สุด และอัดแน่นที่สุด คุณจะได้สัมผัสประสบการณ์ที่เหมือนกับการเป็นผู้จัดการทีมจริงๆ 
	ควบคุมทีมของคุณจากมากกว่า 50 ประเทศทั่วโลก คัดเลือกทั้งนักเตะตัวจริงและสำรอง จัดการเรื่องสื่อต่างๆ 
	และแก้ปัญหาของนักเตะในฐานะผู้นำทีม คุณจะได้ดูแลทั้งในเรื่องของการวางชั้นเชิง ประชุมทีม จัดตัวสำรอง
	และแนะนำสั่งสอนลูกทีมอยู่ข้างสนามพร้อมกับติดตามนัดแข่งขันสดผ่านเอนจินสามมิติ</p></td></center>
  </tr>
  <tr>
    <td height="246">&nbsp;</td>
  </tr>
  <tr>
    <td height="61">ภาพในเกมส์</td>
    <td colspan="2" rowspan="2"><p><img src="Initial-Announcement-Manager-on-Touchline-Creation.png" width="625" height="356" /></p>
    <p><img src="fm_2016_9.jpg" width="622" height="373" /></p>
    <p><img src="5d2c6fbec5550a973ab93df72071a0ef.jpg" width="623" height="375" /></p>
	<p><img src="maxresdefault.jpg" width="622" height="373" /></p></td>
  </tr>
  <tr>
    <td height="61">&nbsp;</td>
  </tr>
</table>
</body>
</html>
