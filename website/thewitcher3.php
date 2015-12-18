

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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','12','499', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>
<body>

<table width="857" height="1978" border="0" align="center">
  <tr>
    <td height="169"><p align="center"><img src="1030225_MB_142x200_en_US_^_2014-11-19-13-05-45_9e921d5b22d6a9d02b5712b90458ebf3e1d5ac94.jpg" width="142" height="200" /></p></td>
    <td width="417" height="169"><strong> The Witcher </strong><strong>3: </strong><strong>Wild Hunt</strong></td>
    <td width="233">
    <form action='thewitcher3.php' method='post'>
    <input name='submit' type='submit' value='ซื้อ'>
    </form>
     
    </td>
  </tr>
  <tr>
    <td width="193" height="84">สเปคคอมพิวเตอร์ขั้นต่ำเกมส์ </td>
    <td colspan="2" rowspan="2"><p>&nbsp;</p>
      <table width="340" height="270" border="1" align="left">
        <tr>
          <td>CPU : Intel Core i5-2500K 3.3 GHz or AMD Phenom II X4 940<br />
GPU : Nvidia GeForce GTX 660 or AMD Radeon HD 7870<br />
RAM : 6 GB<br />
OS : 64-bit Windows 7, 8 or 8.1<br />
DirectX 11<br />
HD : 40 GB</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="84">&nbsp;</td>
  </tr>
  <tr>
    <td height="64">เนื้อเรื่อง</td>
    <center>
    <td colspan="2" rowspan="2">กล่าวถึงการผจญภัยตอนใหม่ของ Geralt of Rivia ซึ่งมีเนื้อหาต่อจากภาคที่แล้ว พร้อมรับภารกิจใหม่
      ในสถานการณ์บ้านเมืองกำลังอยู่ในยุคมืด เพื่อกองทัพอันสุดป่าเถื่อนกำลังบุกรุกเข้ามาใน
       Northern
        Kingdoms โดยต้องยับยั้งจากสงครามบ้าคลั่งครั้งนี้
      ให้ได้ จุดเด่นของเกมส์คือสร้างสรรค์โลกในเกมส์
        ที่กว้างขวางมากขึ้นถึง 30 เท่า ใหญ่กว่าภาคที่แล้ว เน้นการผจญภัยในป่าใหญ่ที่เต็มไปด้วยอันตราย
        ทั้งสัตว์ป่าและศัตรู เนื่องจากฉากเกมส์มีความกว้างขวาง ทำให้ต้องควบม้าหรือพายเรือเพื่อใช้เป็นยาน
        พาหนะย่นการเดินทาง หรือเลือกที่จะใช้ Fast Travel ในการประหยัดเวลาเล่นเกมส์ในการข้ามไปยัง
        อีกสถานที่หนึ่ง ภายในเกมส์จะต้องทำภารกิจตามสถานที่ต่างๆและบรรลุภารกิจให้ลุล่วง ในบางครั้งผู้
        เล่นอาจได้รับภารกิจหรือสิ่งตอบแทนเล็กๆน้อยๆเพื่อสามารถกำจัดศัตรูได้ ศัตรูมีตั้งโจรป่า ฝูงหมาป่า
        อันดุร้าย จนถึงมังกรยักษ์ที่มักปรากฎให้เห็นตามภูเขาหรือพื้นที่โล่งกว้าง และในการต่อสู้แต่ละครั้ง
      สามารถออกดาบสู้ระยะประชิด จนถึงใช้เวทย์มนต์ใช้กำราบศัตรู</p></td></center>
  </tr>
  <tr>
    <td height="246">&nbsp;</td>
  </tr>
  <tr>
    <td height="61">ภาพในเกมส์</td>
    <td colspan="2" rowspan="2"><p><img src="34pc3CrvRw-c.png" width="625" height="356" /></p>
    <p><img src="the-witcher-3-wild-hunt-a.jpg" width="622" height="373" /></p>
    <p><img src="the-witcher-3-wild-hunt-b.jpg" width="623" height="375" /></p></td>
  </tr>
  <tr>
    <td height="61">&nbsp;</td>
  </tr>
</table>
</body>
</html>
