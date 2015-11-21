<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-size: 36px;
	font-weight: bold;
}
#Layer2 {
	position:absolute;
	left:103px;
	top:17px;
	width:971px;
	height:394px;
	z-index:2;
	background-image: url(../Images/1365461.jpg);
}
-->
</style>
</head>

<body>
<div id="Layer2">
  <table width="967" height="398" border="1">
    <tr>
      <td height="111" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="141" height="228"><p align="left">&nbsp;</p>
        </td>
      <td width="634">
	  <?php 
			include("dbconnect.php");
			
			
			$result=mysql_query("select Assmntfile , Desc from hnd where AsName=".$_POST['selectassmnthnd']);
			
			while($row=mysql_fetch_array($result))
			 {
				echo "<p align='center'>".$row[1]."</p><br>";		 
			 ?><br/>
          <?php
			 	}
				
				mysql_free_result($result);	
									
			?>      </td>
      <td width="170">&nbsp;</td>
    </tr>
    <tr>
      <td height="49"><a href="home.php"></a></td>
      <td>&nbsp;</td>
      <td><div align="center"><a href="Showassignmen.php"><strong>Back </strong></a></div></td>
    </tr>
  </table>
</div>
</body>
</html>
