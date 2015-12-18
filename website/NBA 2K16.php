<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url(caffeine-1920x1080-best-games-2015-game-horror-sci-fi-pc-ps4-xbox-one-6779.jpg);
}
body,td,th {
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','6','699', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>
<table width="564" height="2154" border="0" align="center">
  <tr>
    <th width="167" height="202" scope="row"><img src="2878651-harden.jpg" width="192" height="263" /></th>
    <td width="189"><p align="center"><strong>NBA </strong><strong>2</strong><strong>K</strong><strong>16</strong><strong> </strong></p></td>
    <td width="190">
    <form action='NBA 2K16.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
    </td>
  </tr>
  <tr>
    <th height="144" scope="row">สเปคคอมพิวเตอร์ขั้นต่ำเกมส</th>
    <td colspan="2" rowspan="2"><p>&nbsp;</p>
      <table width="426" height="162" border="1" align="left">
        <tr>
          <th scope="row">• OS:  Windows 7 64-bit, Windows 8.1 64-bit or Windows 10 64-bit <br />
• Processor:  Intel Core2 Duo or better (SSE3 or later) <br />
• Memory: 2  GB RAM <br />
• Graphics:  DirectX 10.1 compatible (512 MB) or better <br />
• DirectX:  Version 10 <br />
• Hard  Drive: 50 GB available space <br />
• Sound  Card: DirectX 9.0x compatible </th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="41" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="27" scope="row"><p>ข้อมูล</p></th>
    <td colspan="2" rowspan="2">
    กลับมาแล้วพร้อมประสบการณ์ NBA ที่สมจริงที่สุดแห่งยุค กับ NBA 2K16 
โดดเด่นด้วยประสบการณ์ MyCAREER ใหม่ทั้งหมดที่เขียน กำกับ และผลิตโดยผู้อำนวย
 การสร้างภาพยนตร์ชื่อดัง Spike Lee นำทาง MyPLAYER ของคุณผ่านการเดินทางที่
 สมบูรณ์ของ NBA เข้าครอบครองแฟรนไชส์ NBA อย่างเต็มตัวหรือฝึกฝนความสามารถ
 ของคุณด้วยการแข่งขันออนไลน์กับเหล่าเกมเมอร์จากทั่วโลก   
    </td>
  </tr>
  <tr>
    <th height="177" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="121" scope="row">ภาพในเกมส์</th>
    <td colspan="2" rowspan="2"><p><img src="nba-2k16-base.jpg" width="621" height="354" /></p>
    <p>&nbsp;</p>
    <p><img src="nba-2k16-2.jpg" width="627" height="353" /></p>
    <p>&nbsp;</p>
    <p><img src="nba-2k16-1.jpg" width="629" height="364" /></p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>

</body>
</html>