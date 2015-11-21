<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:191px;
	top:6px;
	width:947px;
	height:462px;
	z-index:1;
	background-image: url(../Images/flowers-a-blue-background-on-the-bubble-backgrounds-wallpapers.jpg);
}
.style3 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
.style6 {	font-size: 36px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>

<body>
<div id="Layer1">
  <table width="967" height="466" border="0">
    <tr>
      <td height="111" colspan="3"><div align="center"><span class="style6">Your Assignment was, </span></div></td>
    </tr>
    <tr>
      <td width="323" height="174"><p align="left"><strong><a href="AddAlbum.php"></a></strong></p>
          <p align="left"><strong><a href="Addphoto.php"></a></strong></p>
        <p align="left"><strong><a href="ManageAlbum.php"></a></strong></p>
      <p align="left">&nbsp;</p></td>
      <td width="385">
         
	  <?php
	  include("dbconnect.php");
	  
	  $AsName=$_POST["lsthnd"];	 
	  $stuName=$_POST["txtstuName"]; 
	  
	  $sbmtDate=$_POST["cmbdate"]."/".$_POST["cmbmonth"]."/".$_POST["cmbyear"];
	  
	  $Desc=$_POST["txtdesc"];
	  $Assmntfile=$_FILES["filebrws"]["name"];
	   
	  $path="MBA/".$Assmntfile;
	  
	   mysql_query("INSERT INTO hnd values('".$AsName."','".$stuName."','".$sbmtDate."','".$Desc."','".$path."')");
	  
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
      <td width="245">&nbsp;</td>
    </tr>
    <tr>
      <td height="171"><a href="home.php"></a></td>
      <td><div align="center" class="style6"><a href="HND.php" class="style3">&lt;&lt; Back to Submit Page &gt;&gt; </a></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
