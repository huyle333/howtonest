<!DOCTYPE html>
<html>
	<head>
		<title>how to nest</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="SHORTCUT ICON" href="img/nest-logo.jpg"/>
	</head>
	<body>
	<div class = "navbar navbar-inverse navbar-static-top">
		<div class = "container">
			<div id = "logo">
			<a href ="index.html" class = "navbar-brand"><img src = "img/nest-logo.jpg">how to nest</a>
			</div>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="thermostat.html">Thermostat</a></li>
					<li><a href="smokedetector.html">Smoke Detector</a></li>
					<li class = "active"><a href="#">Check Status</a></li>
					<li class = "dropdown">
					<a href="#" class = "dropdown-toggle" data-toggle = "dropdown">About <b class = "caret"></b></a>
					<ul class = "dropdown-menu">
						<li><a href = "http://huyle.me/">Huy Le</a></li>
						<li><a href = "#">Winston Chen</a></li>
					</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<form name="form1" method="post" action="status.php">
	<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
	<tr>
	<td colspan="3"><strong>Check the Status of Your Nest Thermostat</strong></td>
	</tr>
	<tr>
	<td width="78">Username</td>
	<td width="6">:</td>
	<td width="294"><input name="myusername" type="text" id="myusername"></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input name="mypassword" type="password" id="mypassword"></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input class="btn btn-primary" type="submit" name="Submit" value="Login with Nest"></td>
	</tr>
	</table>
	</td>
	</form>
	</tr>
	</table>
	<br></br><br></br>
	<div class = "navbar navbar-default navbar-fixed-bottom">
	<div class = "container">
	<p class = "navbar-text pull-left">Copyright &#169 2014</p> <a href = "http://getbootstrap.com/" class = " navbar-btn btn-info btn pull-right">Powered by Bootstrap</a>
	</div>
	</div>

	<div class = "modal fade" action = "send_form_email.php" id = "contact" role = "dialog">
		<div class = "modal-dialog">
			<div class = "modal-content">
				<form class = "form-horizontal">
					<div class = "modal-header">
						<h4> Contact: How To Nest</h4>
					</div>
						<div class = "modal-body">
							<div class = "form-group">
								<label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
									<div class = "col-lg-10">
										<input type = "text" class = "form-control" id="contact-name" placeholder = "Full Name">
									</div>
							</div>
						<div class = "form-group">
							<label for = "contact-email" class = "col-lg-2 control-label">E-mail:</label>
								<div class = "col-lg-10">
									<input type = "email" class = "form-control" id="contact-e-mail" placeholder = "you@example.com">
								</div>
						</div>
						<div class = "form-group">
							<label for = "contact-sub" class = "col-lg-2 control-label">Subject:</label>
								<div class = "col-lg-10">
									<input type = "text" class = "form-control" id="contact-sub" placeholder = "Subject">
								</div>
						</div>
							<div class = "form-group">
								<label for = "contact-msg" class = "col-lg-2 control-label">Message:</label>
									<div class = "col-lg-10">
										<textarea class = "form-control" rows ="8" id="contact-msg"></textarea>
									</div>
							</div>
								<div class = "modal-footer">
									<button type = "submit" class = "btn btn-primary">Submit</button>
										<a class = "btn btn-default" data-dismiss = "modal">Close</a>
								</div>
						</div>
			</div>
		</div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
