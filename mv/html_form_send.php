<html>
<body>

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
$to = "Emily00@gmail.com";
$subject = "MVHA New Member";
$message = "First Name: " . $first_name . "<br>" . "Last Name: " . $last_name . "<br>" . "Address: " . $address . "<br>" . "City: " . $city . "<br>" . "State: " . $state . "<br>" . "Zip: " . $zip . "<br>" . "Telephone: " . $telephone . "<br>" . "Email: " . $email . "<br>" . "Membership Type: " . $membership_type . "<br>" . "Amount Enclosed $" . $amount_enclosed . "<br>"; 

// More headers
$headers = $email;

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
</body>
</html>