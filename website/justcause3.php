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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','4','1200', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>
<table width="564" height="2154" border="0" align="center">
  <tr>
    <th width="167" height="202" scope="row"><img src="just-cause-3.jpg" width="192" height="263" /></th>
    <td width="189"><p align="center"><strong>JUSTCUASE3</strong></p></td>
    <td width="190">
    <form action='justcause3.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
    </td>
  </tr>
  <tr>
    <th height="144" scope="row">สเปคคอมพิวเตอร์ขั้นต่ำเกมส</th>
    <td colspan="2" rowspan="2"><p>&nbsp;</p>
      <table width="426" height="162" border="1" align="left">
        <tr>
          <th scope="row">• OS: Vista SP2, Win 7 SP1, Win 8.1 (64-bit Operating System Required) <br />
• CPU: Intel Core i5-2500K, 3.3 Ghz | AMD Phenom II X6 1075T 3 Ghz <br />
• Memory: 6GB RAM <br />
• Graphics: NVIDIA GeForce GTX 670 (2GB) | AMD Radeon HD 7870 (2GB)  <br />
• DirectX:  Version 11 <br />
 </th>
        </tr>
    </table></td>
  </tr>
  <tr>
    <th height="41" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="27" scope="row"><p>เนื้อเรื่อง</p></th>
    <td colspan="2" rowspan="2">
    เนื้อเรื่องเกมจะเกิดขึ้นบนเกาะซึ่งมีกว่าสี่ร้อยตารางไมล์ของภูมิประเทศที่จะให้สำรวจได้อิสระ Just Cause 3 
มีความหลากหลายของภูมิประเทศที่แตกต่างกันแม้กระทั่งดำดิ่งลงไปเปิดเผยใต้ท้องทะเลลึกเช่นเดียวกับยอด
 ภูเขาที่สูงที่สุด ผู้เล่นยังมียานพาหนะจำนวนมากให้ใช้ ตัวละครของเรายังมีอุปกรณ์คู่หูที่แสนจะสะดวกอย่าง 
Wingsuit หรือตะขอเกี่ยว โลกแห่ง Just Cause 3 เต็มไปด้วยภารกิจรองและกิจกรรมมากมายให้ได้ค้นหา
 แม้มันจะไม่จำเป็นเพื่อให้จบเกม ตัวเกมจะเน้นแอคชั่นในแบบเปลี่ยนแปลงได้ตามต้องการ, Rico ไม่ได้เน้น
 การรอบเร้นในภารกิจมากนัก ระเบิดรอบทิศ กองของศพที่เกลื่อนกลาดและการทำลายของทั่วไปเป็นวิธีการที่
 พระเอกของเราจะสำเร็จภารกิจมากกว่า สร้างความหายนะและเข้ายึดครองฐานทัพ อู่ต่อเรือ เรือนจำและสถานี
 ตำรวจ, โรดริเกมีคลังแสงของอาวุธให้เลือกใช้ตั้งแต่ปืน, ปืน AT และการโจมตีทางอากาศเป็นเพียงบางส่วน
 ของเครื่องมือที่ผู้เล่นสามารถใช้เพื่อปลดปล่อยสาธารณรัฐเมดิชิ
  
    </td>
  </tr>
  <tr>
    <th height="177" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="121" scope="row">ภาพในเกมส์</th>
    <td colspan="2" rowspan="2"><p><img src="01.jpg" width="621" height="354" /></p>
    <p>&nbsp;</p>
    <p><img src="Parachute_over_town_1.0.jpg" width="627" height="353" /></p>
    <p>&nbsp;</p>
    <p><img src="2795924-2015-02-0200_56_44-ju47ry1.png" width="629" height="364" /></p>
    <p>&nbsp;</p>
	<p><img src="2795971-jc3_screenshot_freefallbase1_11_1418315493.12.2014.jpg" width="629" height="364" /></p>
	<p>&nbsp;</p>
	<p><img src="just_cause_3_8.jpg" width="627" height="353" /></p>
	</td>
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