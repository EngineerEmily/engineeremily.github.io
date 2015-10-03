<html>
<body bgcolor="#330000" text="#000000" topmargin="0" link="#330000" vlink="#CC6600">
<table width="764" border="0" align="center" bgcolor="#FFFFCC">
  <tr>
    <td width="764" height="185"> 
    <div align="center"><img src="http://www.mountainviewhistorical.org/art/top_banner_home_4.gif" width="764" height="237" usemap="#Map2" border="0"></div>    </td>
  </tr>
  <tr>
  <td>
<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$membership_type = $_POST["membership_type"];
$amount_enclosed = $_POST["amount_enclosed"];
$to = "membership@mountainviewhistorical.org";
$subject = "MVHA New Member";

$message = "First Name: " . $first_name . "<br>" . "Last Name: " . $last_name . "<br>" . "Address: " . $address . "<br>" . "City: " . $city . "<br>" . "State: " . $state . "<br>" . "Zip: " . $zip . "<br>" . "Telephone: " . $telephone . "<br>" . "Email: " . $email . "<br>" . "Membership Type: " . $membership_type . "<br>" . "Amount Enclosed $" . $amount_enclosed . "<br>"; 

// More headers
$headers = "Content-type: text/html\r\n";

mail ($to,$subject,$message,$headers);
echo "Thank you for filling out the membership form <a href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CPX79245TXTYE' target=_blank'>click here</a> to pay your membership dues online<br><br>";
echo "Paying by check? Print out this page and send it with the check to:<br><br>";
echo "<b>Mountain View Historical Association</b><br>";
echo "P. O. Box 252 <br>";
echo "Mountain View, CA 94042 <br><br>";

echo "First Name: ";
echo $first_name . "<br>";
echo "Last Name: ";
echo $last_name . "<br>";
echo "Address: ";
echo $address . "<br>";
echo "City: ";
echo $city . "<br>";
echo "State: ";
echo $state . "<br>";
echo "Zip: ";
echo $zip . "<br>";
echo "Telephone: ";
echo $telephone . "<br>";
echo "Email: ";
echo $email . "<br>";
echo "Membership Type: ";
echo $membership_type . "<br>";
echo "Amount Enclosed $";
echo $amount_enclosed . "<br>";
?>
</td>
</tr>
  <tr>
    <td> 
      <p><img src="http://www.mountainviewhistorical.org/art/line.gif" width="760" height="10"></p>
      <p align="center"><font face="Georgia, Times New Roman, Times, serif" color="#663300" size="2"><b><a href="http://www.mountainviewhistorical.org/">Home </a>
        &nbsp;| &nbsp;<a href="http://www.mountainviewhistorical.org/about.html">About</a> &nbsp; | &nbsp; <a href="http://www.mountainviewhistorical.org/projects.html">Projects</a> 
        &nbsp; | &nbsp; <a href="http://www.mountainviewhistorical.org/bbq.html">BBQ</a> &nbsp; | &nbsp;<a href="http://www.mountainviewhistorical.org/history.html">History</a> 
        &nbsp; | &nbsp; <a href="http://www.mountainviewhistorical.org/membership.html">Membership</a><br>
        Copyright &copy; 2008 - 2015 Mountain View Historical Association. All 
        rights reserved.</b></font><br></p></td>
  </tr>
</table>
<map name="Map2"> 
  <area shape="rect" coords="4,200,76,219" href="http://www.mountainviewhistorical.org/index.html">
  <area shape="rect" coords="522,198,616,228" href="http://www.mountainviewhistorical.org/history.html">
  <area shape="rect" coords="447,199,516,225" href="http://www.mountainviewhistorical.org/bbq.html">
  <area shape="rect" coords="616,197,762,226" href="http://www.mountainviewhistorical.org/membership.html">
  <area shape="rect" coords="324,198,437,224" href="http://www.mountainviewhistorical.org/projects.html">
  <area shape="rect" coords="75,199,308,224" href="http://www.mountainviewhistorical.org/about.html">
</map>
</body>
</html>