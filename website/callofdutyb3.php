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
		$query = "INSERT INTO GAME_HISTORY (US_NAME,G_ID,G_PRICE,DATE_BUY) VALUES ('$uname','3','1000', '$date[CURRENT_DATE]')";
		$parseRequest = oci_parse($conn, $query);
		oci_execute($parseRequest);echo 'ss';
        }
        oci_close($conn);
?>

<body>
<table width="920" height="2337" border="0" align="center">
  <tr>
    <th width="193" scope="row"><img src="Box_Art_PC_BOIII.jpg" width="182" height="228" /></th>
    <td width="449"><p align="center"><strong>Call Of Duty: Black OOP 3</strong></p></td>
    <td width="268">
    <form action='callofdutyb3.php' method='post'>
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
          <th width="504" height="184" scope="row">OS: Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit<br />
Processor: Intel® Core™ i3-530 @ 2.93 GHz / AMD Phenom™ II X4 810 @ 2.60 GHz<br />
Memory: 6 GB RAM<br />
Video: Nvidia GeForce GTX 660 or AMD Radeon R9 270 (2GB  VRAM with Shader Model 5.0)<br />
Graphics: NVIDIA® GeForce® GTX 470 @ 1GB / ATI® Radeon™ HD 6970 @ 1GB<br />
Network: Broadband Internet connection<br />
Sound Card: DirectX Compatible</th>
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
          <th height="77" scope="row">เรื่องราวเกิดขึ้นในปี 2065 เป็น 40 ปีหลังจากการจู่โจมจากยานโดรนควบคุมโดย Raul Menendez ในภาคก่อน
 เพื่อป้องกันไม่ให้เรื่องเดิมเกิดขึ้นอีก โลกจึงได้ตัดสินใจที่จะสร้างระบบป้องกันภัยพิเศษขึ้น แต่ทว่าไม่มีใครเตรียมรับ
 มือกับอันตรายที่จะนำมนุษยชาติไปสู่ความยุ่งเหยิงภายในพริบตา ทั้งสภาพอาการที่เปลี่ยนไป ทรัพยากรที่ร่อยหรอ 
 และความขัดแย้งเกี่ยวกับอุดมการณ์ซึ่งมาจากการเปลี่ยนแปลงทางพันธุกรรมและการปลูกถ่ายได้แบ่งแยกสังคมออก
 เป็นฝ่ายและกลายเป็นเหตุผลของความรุนแรงมากขึ้นของสงคราม<p>

 เมื่อสถานการณ์เริ่มจะค่อยๆเกินการควบคุม ในขณะที่โปรเจคลับๆของทางการทหารได้เปิดเส้นทางสว่าง อย่างไรก็
 ตามแม้เทคโนโลยีที่มีให้ในกองทัพก็ไม่อาจเทียบกับสิ่งที่เรียกว่า NDI ซึ่งเป็นเครือข่ายความคิดขนาดใหญ่ที่เชื่อม
 ต่อกับสมาชิกทุกคนของหน่วย Black Ops ซึ่งจะช่วยให้หน่วยคอมมานโดประสบความสำเร็จแม้สถานกาณ์ที่ยาก
 และลำบากและให้พวกเขาสามารถมีการประสานงานที่เหนือมนุษย์ได้
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
    <td colspan="3" rowspan="2"><p><img src="call-duty-black-ops-3-1429912017-2361945.jpg" width="714" height="420" /></p>
    <p><img src="Street-Battle.jpg" width="725" height="413" /></p>
    <p><img src="black-ops-3.jpg" width="724" height="403" /></p>
    <p><img src="2854896-trailer_blackops3_reveal_20150426_v2.jpg" width="727" height="401" /></p></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
  </tr>
</table>
</body>
</html>
