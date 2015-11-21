<?php

session_Start();

?>


<title>Logindetails</title>
</head>

<body>

<?php 

$uname=$_POST["txtUname"];
$upass=$_POST["txtPass"];
if(($uname=="") && ($upass==""))
{
include("errorpage.php");
}
//Check validity of HND user login
else if(($uname=="hnd") && ($upass=="hnd123"))

{

$_SESSION["usernam"]=$uname;

setcookie("myCookie",$uname,time()+3600);

header('Location: HND.php');

}//Check validity of MBA user login
else if(($uname=="mba") && ($upass=="mba123"))

{

$_SESSION["usernam"]=$uname;

setcookie("myCookie",$uname,time()+3600);

header('Location: MBA.php');

}//Check validity of Lecturer user login
else if(($uname=="lecture") && ($upass=="lecture"))

{

$_SESSION["usernam"]=$uname;

setcookie("myCookie",$uname,time()+3600);

header('Location: Showassignmen.php');

}
else 

{

include("errorpage.php");

}

?>
</body>
</html>
