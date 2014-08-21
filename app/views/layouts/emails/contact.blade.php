<?php
$name = Input::get('first_name');
$subject = Input::get ('subject');
$email = Input::get ('email');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?>

<h1>Message from Way2adv</h1>

<p>
	name: <?php echo ($name); ?> <br>
	Email: <?php echo ($email);?> <br>
	Subject: <?php echo ($subject); ?><br>
	Message: <?php echo ($message);?><br>
	Date: <?php echo($date_time);?><br>
	User IP address: <?php echo($userIpAddress);?><br>
</p>