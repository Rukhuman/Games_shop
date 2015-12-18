<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','10','111', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>
<table width="787" height="3112" border="0" align="center">
  <tr>
    <th width="311" height="180" scope="row"><img src="86371160_o.jpg" width="311" height="141" /></th>
    <td width="414"><center> The Sims 4</center></td>
    <td width="253">
    <form action='the sims4.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
    </td>
  </tr>
  <tr>
    <th height="86" scope="row">สเปคคอมพิวเตอร์ขั้นต่ำเกมส์ </th>
    <td colspan="2" rowspan="2"><table width="492" height="343" border="1">
        <tr>
          <th width="482" colspan="2" scope="row">
          
 PROCESSOR: 1.8GHz Intel Core2 Duo, AMD Athlon64 Dual-Core 4000+ <p>
 MEMORY: At least 2 GB RAM<p>
 HARD DRIVE: At least 9 GB of free space <p>
 VIDEO CARD: 128 MB of Video RAM and support for Pixel Shader 3.0. Supported Video Cards: NVIDIA GeForce 6600 or better, ATI Radeon X1300 or better, Intel GMA X4500 or better<p>
 SOUND CARD: DirectX 9.0c Compatible<p>
 DIRECTX: DirectX 9.0c compatible </th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="280" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="69" scope="row">ข้อมูล</th>
    <td colspan="2" rowspan="2">
    
The Sims 4 คือเกมจำลองชีวิตที่มีคนตั้งตารอมหาศาล ซึ่งให้คุณเล่นสนุกกับชีวิตได้อย่างที่ไม่เคยมีมาก่อน
 สร้างและควบคุมซิมที่มีความฉลาดมากขึ้นได้ทั้งรูปร่างหน้าตา ลักษณะนิสัย พฤติกรรม และอารมณ์ความรู้สึก
 ของพวกเขา สนุกกับการสร้างสรรค์ใหม่ๆ เมื่อคุณสร้างซิมด้วยเครื่องมือ Create A Sim อันทรงพลังและได้
 ออกแบบบ้านดีไซน์สวยด้วยโหมดสร้างแบบแบ่งตามห้องที่ใช้ง่ายสุดๆ ใช้คุณสมบัติ The Gallery เพื่อจะดู
 แบ่งปัน และดาวน์โหลดคอนเทนต์ใหม่ๆ ได้โดยไม่ต้องออกจากเกมอีกต่อไป, ควบคุมความคิด ร่างกายและ
 จิตใจซิมของคุณแล้วสำรวจการเล่นที่เป็นไปได้แบบใหม่ๆ ในละแวกบ้านที่สดใสมีชีวิตชีวาซึ่งจะทำให้คุณได้
 พบกับเรื่องราวสุดสนุกของชีวิต 

    </td>
  </tr>
  <tr>
    <th height="142" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="91" scope="row">ภาพในเกมส์</th>
    <td colspan="2" rowspan="2"><p><img src="The-Sims-4-release-date.jpg" width="673" height="536" /></p>
    <p>&nbsp;</p>
    <p><img src="930.0x524.0.jpg" width="654" height="420" /></p>
    <p>&nbsp;</p>
    <p><img src="4225.jpg" width="649" height="415" /></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="the-sims-4-screen-2.jpg" width="650" height="363" /></p>
    <p><img src="lykbotpjia2wolnnpxm9.jpg" width="654" height="381" /></p></td>
  </tr>
  <tr>
    <th height="23" scope="row">&nbsp;</th>
  </tr>
</table>

</body>
</html>