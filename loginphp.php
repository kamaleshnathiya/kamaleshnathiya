<?php

$host="localhost";
$user="root";
$password="";
$db="register_details";

mysqli_connect($host,$user,$password);
mysqli_select_db($db);

if(isset($_POST['username']))
{
$uname=$_POST['username'];
$password=$_POST['password'];

$sql="select*from register where username='".$uname."'AND password='".$password."'
limit 1";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1){
echo "j component 1.html";
exit();
}
else{
echo "invaid password or username";
exit();
}
}

?>

<html>
<head>
<title>
ONLINE GROCERY SHOP
</title>
<style> body{
background-image:url(3.jpg);
}


form { 
margin:100px;
border: 1px solid white; 
width:50%;
background-color:white; 
text-align:left;

}

input[type=text], input[type=password] { 
width: 100%;
padding: 15px 25px;
 margin: 10px 0; 
display: inline-block; 
border: 1px solid #ccc; 
box-sizing: border-box;
}


button {
background-color: #4CAF50; 
color: white;
padding: 14px 20px; 
margin: 8px 0; border: none; 
cursor: pointer; 
width: 100%;
}

button:hover { 
opacity: 0.8;
}
.cancelbtn { 
width: auto;
padding: 10px 10px;
background-color: #f44336;
}
.imgcontainer { 
text-align: center;
margin: 24px 0 12px 0;
}
img.avatar { width: 20%;
border-radius: 40%;
}



.container { padding: 8px;
}



span.psw { float: right;
padding-top: 16px;

}
@media screen and (max-width: 300px) { span.psw {
display: block; float: none;
}
.cancelbtn { width: 100%;
}
}

</style>


</head>
<body>
<center>




<form action="loginphp.php" method="post" name="myform" onsubmit="return validateform()">
<div class="imgcontainer" >
<img src="profile.jpg" alt="Avatar" class="avatar">
</div>


<div class="container">
<label for="usr"><b>Username</b></label>
<input type="text" placeholder="Enter Username" id="usr" name="username" class="tb">


<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" id="psw" name="password" class="tb" minlength="6">

<button><input type="submit" value="submit"/></button>
<label>
<input type="checkbox" checked="checked" name="remember"> Remember me
</label>
</div>


<div class="container" style="background-color:#f1f1f1" a href="firstpage.html">
<button type="button" class="cancelbtn" >Cancel</button>
<span class="psw"> <a href="register form.html">signup</a></span>
</div>

</form>
</center>






</body>
</html>