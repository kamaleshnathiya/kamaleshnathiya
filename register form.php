<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="registerform.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phonecode" required>
      <option selected hidden value="">Select Code</option>
      <option value="+91">+91 IND</option>
      <option value="+93">+93 AFG</option>
      <option value="+61">+61 AUS</option>
      <option value="+45">+45 DEN</option>
      <option value="+20">+20 EGY</option>
      <option value="+52">+52 MEX</option>
    <option value="+31">+31 NET</option>
<option value="+64">+64 NZ</option>
<optionvalue="+92">+92 PAK</option>
<option value="+54">+54 ARG</option>
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>