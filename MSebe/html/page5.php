<html>
<head>
	<title>Underfloor Heating DIY</title>
	<style>
	<!--
		p {
			margin-left:330;
			position:absolute;
			width:50%;
		}
		#steps{
			width:100%
		}
	-->
	</style>
</head>
<body>
	<div>
		<section id="page" style="background-color:white; width:100%; "><!--this links to the javascript on the index page that allows the AJAX to use a single page to display multiple pages so this peice of work will be sent to the index-->
			<div id="steps" >
				<ul>
					<h3><a name="wire" >Email Me</a></h3>
					<form method="post" style="background-color:#EEEEEE;">
						<fieldset>
							<legend style="color:sienna;font-weight:bold;">Email</legend>
							<table>
								<tr>
									<td>from: </td>
									<td><input type="text" name="from" /></td>
								</tr>
								<tr>
									<td>Subject </td>
									<td><input type="text" name="subject" /></td>
								</tr>
							</table>
							<textarea name="message" cols="90" rows="5"></textarea>
						</fieldset>
						<br/><br/>
						<input type="submit" value="Send" />
					</form>

					<?php
						$to = "carlosher760@gmail.com";
						$from = "From:DoNotreply@dont.com";
						if(!isset($_REQUEST["from"]) || $_REQUEST["from"] == null){
							echo "please enter a valid address";
						}
						else{
							$result = mail($to, $_REQUEST['subject']
								,$_REQUEST["message"],$from . $cc);

							if(!$result){
								$message = "Message error";
								echo "<script type='text/javascript'>alert('$message');</script>";
							}else{
								$message = "Message Sent";
								echo "<script type='text/javascript'>alert('$message');</script>";
							}
						}

					 ?>

					<h3><a name="conn" >Contact Details</a></h3>
					<ol>
						<li>Cell: +2760 504 6270</li>
						<li>Email:Nkoetshepo@gmail.com</li>
					</ol>

					<h3><a name="join">Location</a></h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d128746.1224155768!2d27.982300947114833!3d-26.054249739383703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957398cbf40517%3A0xdf8bd21bf1eb74c!2sSandton!5e0!3m2!1sen!2sza!4v1491912452365" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</ul>
				<p style="margin-top:500px;">For more information you can watch my video on Youtube <a href="www.youtube.com/underfloor heating" >www.youtube.com/underfloor heating</a></p>
			</div>
		</section>
	</div>
</body>
</html>
