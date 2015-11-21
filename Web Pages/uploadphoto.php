<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer2 {	position:absolute;
	left:110px;
	top:-32px;
	width:971px;
	height:663px;
	z-index:2;
}
.style3 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<div id="Layer2">
  <table width="971" height="698" border="1">
    <tr>
      <td height="111" colspan="3"><div align="center" class="style3">Your Photo In :<?php echo $_POST["cmbname"]?> </div></td>
    </tr>
    <tr>
      <td width="208" height="464"><p align="left"><strong><a href="AddAlbum.php">Add Album</a></strong></p>
          <p align="left"><strong><a href="Addphoto.php">Add photo</a></strong></p>
        <p align="left"><strong><a href="ManageAlbum.php">Manage Album </a></strong></p></td>
      <td width="562">
	  
	   <?php
	  include("dbconnect.php");
	  $aid=$_POST["cmbname"];
	  $pid=$_POST["txtpid"];
	  $filename=$_FILES["filebrws"]["name"];
	  
	  $path="Photo/".$filename;
	  $des=$_POST["txtdesc"];
	  mysql_query("INSERT INTO photo values('".$aid."','".$pid."','".$path."','".$des."')");
	  
	  $num=mysql_affected_rows();
	  	  
	  if($num>0)	  
	  {	   
	  move_uploaded_file($_FILES["filebrws"]["tmp_name"],$path);
	 echo "Stored in ". $path;
	  }
	  else 	  
	  {
	  echo "Error In Upload !". mysql_error();
	  }
	  mysql_query("COMMIT");
	  
	  ?>
	  
	  
	  </td>
      <td width="179">&nbsp;</td>	  
    </tr>
    <tr>
      <td height="115">&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><strong>Logout</strong></div></td>
    </tr>
  </table>
</div>

</body>
</html>
