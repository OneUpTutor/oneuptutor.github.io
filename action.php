<?php
//echo "<pre>";
//print_r($_SERVER); die;

session_start();
// error_reporting(1);
/* Set e-mail recipient */
$myemail  = "raj@oneuptutor.com";
/*if(mail('info@cynnaindia.com', 'heyt', 'hello'))
{
    echo "Done";
}
else
{
    echo 'NOt done';
}
exit;*/

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['firstname'], "Enter your name");

$email    = check_input($_POST['email']);
$telephone  = check_input($_POST['phone']);
$comments = check_input($_POST['message'], "Write your Message");



/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
   // show_error("E-mail address not valid");
	$_SESSION['msg']= "E-mail address not valid";
	$_SESSION['cls']= 'error';
	header('Location: https://oneuptutor.github.io/contact.php?error=1');
}


/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email
Mobile NUmber: $telephone



Message:
$comments

End of message
";

/* Send the message using mail() function */
if(!empty($email) )
{ 
if(mail($myemail, $subject, $message))
{
	$_SESSION['msg']= 'Thank you our representative will contact you soon!';
	$_SESSION['cls']= 'success';
	header('Location: https://oneuptutor.github.io/contactus.html?success=1');
}
else
{
	$_SESSION['msg']= 'Email not send!';
	$_SESSION['cls']= 'error';
	header('Location: https://oneuptutor.github.io/contactus.html?error=1');
}
} 
/* Redirect visitor to the thank you page */
//header('Location: thanks.htm');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        // show_error($problem);
		$_SESSION['msg']= $myError;
		$_SESSION['cls']= 'error';
		show_error($problem);
		//header('Location: '.$_SERVER['HTTP_REFERER'].'');
    }
    return $data;
}

function show_error($myError)
{
header('Location: https://oneuptutor.github.io/contactus.html?error=1');
}
?>