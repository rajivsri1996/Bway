<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:170px;
	top:5px;
	width:894px;
	height:511px;
	z-index:1;
	background-image: url(../Images/flowers-a-blue-background-on-the-bubble-backgrounds-wallpapers.jpg);
}
.style2 {font-size: 18px;
	font-weight: bold;
}
.style3 {color: #000000}
.style5 {font-size: 18px; color: #0000FF; }
.style6 {
	font-size: 36px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>

<body>
<div id="Layer1">
  <table width="967" height="504" border="0">
    <tr>
      <td height="123" colspan="3"><div align="center" class="style6">Your Assignment was, </div></td>
    </tr>
    <tr>
      <td width="303" height="174"><p align="left" class="style5">&nbsp;</p>
          <p align="left" class="style5">&nbsp;</p>
        <p align="left" class="style5">&nbsp;</p>
      <p align="left" class="style5">&nbsp;</p></td>
      <td width="405">
         
	    <span class="style5">
      <?php
	  //Creating variables and assign into objects of form
	  include("dbconnect.php");
	  $AsName=$_POST["lstasmntName"];	 
	  $stuName=$_POST["txtstuName"]; 
	  
	  $sbmtDate=$_POST["cmbdate"]."/".$_POST["cmbmonth"]."/".$_POST["cmbyear"];
	  
	  $Desc=$_POST["txtdesc"];
	 
	  $Assmntfile =$_FILES["filebrws"]["name"];
	   
	  $path="MBA /".$Assmntfile;
	  //Insert valuse into table of MBA students
	   mysql_query("INSERT INTO mba values('".$AsName."','".$stuName."','".$sbmtDate."','".$Desc."','".$path."')");
	  
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
           </span></td>
      <td width="245">&nbsp;</td>
    </tr>
    <tr>
      <td height="171"><a href="home.php"></a></td>
      <td><div align="center" class="style2"><a href="MBA.php" class="style3">&lt;&lt; Back to Submit Page &gt;&gt; </a></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
