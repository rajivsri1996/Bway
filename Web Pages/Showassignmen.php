<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer2 {
	position:absolute;
	left:206px;
	top:2px;
	width:971px;
	height:600px;
	z-index:2;
	background-image: url(../Images/Fresh-Water-Windows-7-Background-Desktop-Wallpaper1.jpg);
}
.style4 {font-size: 36px}
.style6 {
	font-size: 50px;
	font-weight: bold;
	color: #00FFFF;
}
.style7 {
	font-size: 24px;
	font-weight: bold;
}
.style9 {color: #FF0000}
-->
</style>
</head>

<body>
<div id="Layer2">
  <table width="975" height="495" border="0">
    <tr>
      <td height="178" colspan="3"><div align="center"><span class="style6">Lecturer Page </span></div></td>
    </tr>
    <tr>
      <td width="137" height="158">&nbsp;</td>
      <td width="731">
	  <form action="Gallary.php" method="post" name="form1" id="form1">
        <span class="style4"><strong><span class="style9">HND</span> Assignments </strong> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="selectassmnthnd" id="selectassmnthnd">
          <?php 
			include("dbconnect.php");
			
			//mysql_query("insert into album values('".$aID."','".$aName."','".$uID."','".$aDate."','".$adesc."')");
			
			$Result=mysql_query("select AsName,Assmntfile from hnd");
			
			while($row=mysql_fetch_array($Result))
			 {
						 
			 ?>
          <option value="<?php echo $row['AsName'];?>"><?php echo $row['Assmntfile'];?> </option>
          <?php
			 		 
			 }
						
			?>
        </select>
&nbsp;&nbsp;&nbsp;&nbsp;
<input name="Show" type="submit" id="Show" value="Show" />
          </span>
      </form></td>
      <td width="77">&nbsp;</td>
    </tr>
    <tr>
      <td height="134"><div align="center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p class="style7"><a href="HomePage.php">&lt;&lt;Back </a></p>
      </div></td>
      <td><form id="form2" name="form2" method="post" action="">
        <span class="style4"><strong><span class="style9">MBA</span> Assignments </strong> :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="selectassmntmba" id="selectassmntmba">
          <?php 
			include("dbconnect.php");
			
						
			$Result=mysql_query("select AsName,Assmntfile from mba");
			
			while($row=mysql_fetch_array($Result))
			 {
						 
			 ?>
          <option value="<?php echo $row['AsName'];?>"><?php echo $row['Assmntfile'];?> </option>
          <?php
			 		 
			 }
						
			?>
        </select>
&nbsp;&nbsp;&nbsp;&nbsp;
<input name="Show2" type="submit" id="Show2" value="Show" />
        </span>
            </form>
      </td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
