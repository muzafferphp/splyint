<html>
<header>
<title>Email verification in Logistic website</title>
</header>
<body>
	<table>
		<tr><td>Dear {{$name}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Please click on the below link for email verification in Logistic website.</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><a href="{{url('carrier/confirm/'.$code)}}">Click here for email verification</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thanks & Regards</td></tr>
		<tr><td>Logistic Website</td></tr>
	</table>
</body>
</html>