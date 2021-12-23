<script>
function check(myform)
{ 
if(myform.user.value=="" || myform.user.value== null || myform.user.value!="gpsshop")
{
alert("name is mandatory!!or invalid username"); 
return false;
}
if(myform.pass.value!="gpsshop" || myform.pass.value==null || myform.pass.value=="")
{
alert("minumum password lengthis 6!!! or invalid password");
return false;
}
else { 
return true;
}
}
</script>