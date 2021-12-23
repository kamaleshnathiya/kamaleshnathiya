<?php
$usr_name=$_POST['username'];
$q_score=$_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$conn = mysqli_connect("localhost", "root","", "feedback");
$query ="insert into feedbackform(quality_score,username,feedback)values('$q_score','$usr_name', '$feedback_txt')";
$result = mysqli_query($conn, $query);
if($result)
header("Location:19.png");
else
die("Something terrible happened. Please try again. ");
?>