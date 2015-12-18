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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','1','500', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>

<body>
<table width="920" height="2337" border="0" align="center">
  <tr>
    <th width="193" scope="row"><img src="siege.jpg" width="182" height="228" /></th>
    <td width="449"><p align="center"><strong> TOM CLANCY'S RAINBOW SIX : SIEGE </strong></p></td>
    <td width="268">
    <form action='rainbow6.php' method='post'>
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
          <th width="504" height="184" scope="row">OS: Windows 7, 8, 8.1, x64<br />
CPU: Intel Core i5-2500K or AMD FX-8120 Eight-Core<br />
CPU Speed: 3.3 GHz (Recommended), 2.6 GHz (Minimum)<br />
RAM: 8 GB<br />
GPU: Nvidia GeForce GTX 670 or AMD Radeon HD 7970 / R9 280 X<br />
VRAM: 2 GB</th>
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
          <th height="77" scope="row">เป็นครั้งแรกใน Rainbow Six ที่ผู้เล่นจะได้ต่อสู้ในการโจมตีรูปแบบใหม่คือการล้อมบุก ฝ่ายศัตรูจะมีวิธีในการแปลง
 สภาพแวดล้อมรอบตัวของพวกเขาให้กลายเป็นป้อมปราการ เช่น การวางกับดัก ติดตั้งสิ่งกีดขวาง และการสร้างระบบ
 ป้องกันการบุกของทีม Rainbow เพื่อรับมือกับความท้าทายนี้ ผู้เล่นจะมีอิสระอย่างที่ไม่เคยมีในเกม Rainbow Six
ก่อนหน้าใดๆ ด้วยการใช้แผนที่ยุทธวิธี โดรนสอดแนม และระบบการไต่เคลื่อนที่ในแนวดิ่ง ทีม Rainbow ของคุณ
 จะมีตัวเลือกมากยิ่งกว่าที่เคยเพื่อวางแผน โจมตี และรับมือสถานการณ์เหล่านี้ การทำลายคือหัวใจของการเล่นแบบ
 ล้อมบุก ตอนนี้ผู้เล่นจะสามารถทำลายสภาพแวดล้อมได้อย่างที่ไม่เคยมีมาก่อน กำแพงต่างๆ จะสามารถทำให้แตก
 กระจายได้เพื่อเปิดช่องทางการยิงใหม่ๆ และเพดานกับพื้นก็สามารถทำลายได้เพื่อสร้างทางใหม่สำหรับการบุกเข้ามา
 ทุกสิ่งทุกอย่างในสภาพแวดล้อมจะตอบสนองอย่างสมจริง

</th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="85" scope="row">ข้อมูล</th>
  </tr>
  <tr>
    <th height="44" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="71" scope="row">ภาพในเกมส์</th>
    <td colspan="3" rowspan="2"><p><img src="rainbow-six-siege2.jpg" width="714" height="420" /></p>
    <p><img src="R6S__S08_Sledge_197409.jpg" width="725" height="413" /></p>
    <p><img src="R6S__S09_Tight_197396.jpg" width="724" height="403" /></p>
    <p><img src="R6S_Screenshot_2_196930.jpg" width="727" height="401" /></p>
	<p><img src="R6S-screenshot-new_4_199582.jpg" width="727" height="401" /></p>
	<p><img src="Rainbow-Six-Siege.jpg" width="727" height="401" /></p>
	<p><img src="rainbow6siege_operators.jpg" width="727" height="401" /></p>
	</td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
