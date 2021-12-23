<html>
<head>
 
<style>
*{
box-sizing:border-box;
}
body{
font-family: 'Open Sans', sans-serif; 
color:#333; 
font-size:14px; 
background-color:#dadada; 
padding:100px;
}
.form_box
{
width:400px;
 padding:10px; 
background-color:white;
}
input{
padding:5px;  
margin-bottom:5px;
}
input[type="submit"]{
border:none; 
outlin:none; 
background-color:#679f1b; 
color:white;
}
.heading{
background-color:green; 
color:white; 
height:40px; 
width:100%; 
line-height:40px; 
text-align:center;
}
.shadow{
  -webkit-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
-moz-box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);
box-shadow: 0px 0px 17px 1px rgba(0,0,0,0.43);}
.pic{text-align:left; width:33%; float:left;}
</style>
<body background=18.jpg>
<center>
 <div class="form_box shadow">
 <form method="post" action="feedbacksql.php">
 <div class="heading">
   Feedback Your Opinion
 </div>
 <br/>
 <p align="left">What do you think about the quality of our serives?</p>
 <div>
   <div class="pic">
     <img src="bad.jpeg" alt="" width="50" height="50"> <br/>
     <input type="radio" name="quality" value="0"> Bad
   </div>
   <div class="pic">
     <img src="better.jpeg" alt="" width="50" height="50"> <br/>
     <input type="radio" name="quality" value="1"> Okay
   </div>
   <div class="pic">
     <img src="good.jpeg" alt="" width="50" height="50"> <br/>
     <input type="radio" name="quality" value="2"> Good
   </div><br>
<br>
<br><br>
<br>

 <label align="left">Username:</label>
<input type="text" name="username" id="user" align="left" required>
 </div>

 <p align="left">Do you have any suggestion for us? </p>
 <textarea name=" suggestion" rows="8" cols="40" ></textarea>
  <input type="submit" name="submit" value="Submit Form" >
</form></center>
 </div>
</body>
</html>