<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:177px;
	top:5px;
	width:949px;
	height:876px;
	z-index:1;
	background-color: #666666;
	background-image: url(../Images/Farms_wallpapers_431.jpg);
}
.style3 {color: #330099; font-weight: bold; font-size: 24px; }
.style8 {
	font-size: 36px;
	color: #000000;
}
.style5 {	font-size: 18px;
	font-weight: bold;
}
.style20 {font-size: 36px; font-weight: bold; font-style: italic; color: #CCCCCC; }
.style21 {color: #CC0066}
.style24 {color: #000000}
.style25 {font-size: 24px; font-weight: bold;}
.style31 {color: #FFFF00}
.style36 {font-size: 24px; font-weight: bold; color: #000000; }
.style38 {font-size: 36px; font-weight: bold; font-style: italic; color: #FF0000; }
.style39 {color: #333333}
-->
</style>
</head>

<body>
<div id="Layer1">
  <table width="973" height="886" border="0">
    <tr>
      <th height="154" colspan="3" class="style3" scope="col"><span class="style20"><span class="style21">Bright Way</span> <span class="style39">Online Assignment Submission Process.</span>
        <label></label>
      </span>
      <label></label></th>
    </tr>
    <tr>
      <th width="303" height="368" scope="col"><span class="style38">You Are....?</span></th>
      <th width="386" scope="col">
	  <form action="CheckUserNamePassword.php" method="post" name="form1" class="style24" id="form1" onsubmit="return verify();">
        <table width="363" height="243" border="5" align="center">
          <tr class="style25">
            <td height="50" colspan="2"><div align="left" class="style36"><strong>Login to</strong> your Category</div></td>
          </tr>

			<style type="text/css">
			.inpBox{
				 background-color:#0033FF;
				 border; solid lpx #666666;
			       }
			.inpBoxError{
			
			            border:solid 2px #FF0000;
			            }

			</style>
			
			<script type="text/javascript">

					function verify()
					{
					var username=document.getElementByID("txtUname");
					var pass=document.getElementByID("txtPass");
					var msg="";
					
					if(username.value=="")
					{
					msg+="Please Enter User Name....! \n";
					username.className="inpBoxError";
					}
					if(pass.value=="")
					{
					msg+="Please Enter Password....! \n";
					pass.className="inpBoxError";
					}
					if(msg == "")
					{
					return true;
					}
					else 
					{
					alert(msg);
					return false;
					}
					}
					</script>

          <tr>
            <td width="137" height="46" class="style25"><strong class="style36">User Name </strong></td>
            <td width="206"><input name="txtUname" type="text" id="txtUname" class="inpBox" /></td>
          </tr>
          <tr>
            <td height="71" class="style25"><strong class="style36">Password</strong></td>
            <td><input name="txtPass" type="password" id="txtPass" class="inpBox" /></td>
          </tr>
          <tr class="style25">
            <td height="60" colspan="2"><div align="right"><span class="style31">
              </span><span class="style31"></span><span class="style31">
              </span><span class="style31">
              <input name="btnlogin" type="submit" class="style5" id="btnlogin" value="Login" />
              <input name="btncancel" type="reset" class="style5" id="btncancel" value="Reset" />
              </span></div>
              <span class="style31"><label>              </label>
              </span>              <label>
                <div align="right"></div>
              </label>            </td>
          </tr>
        </table>
        </form>
      <p class="style8">&nbsp;</p>      </th>
      <td width="270">&nbsp;</td>
    </tr>
    <tr>
      <td height="178" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center" class="style25 style24">
        <label><a href="HomePage.php">Back to Home Page </a></label>
      </div></td>
    </tr>
  </table>
</div>
</body>
</html>
