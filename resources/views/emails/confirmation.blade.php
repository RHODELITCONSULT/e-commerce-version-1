<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register HTML</title>
</head>
<body>
<table>
	<tr><td>Dear {{$name}}</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Click on the blow link to activate your RHODEL E-COMMERCE Account:</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><a href="{{ url('user/confirm/'.$code)}}">Confirm Account</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Thanks & Regards,</td></tr>
	<tr><td>RHODEL E-COMMERCE</td></tr>
	<tr><td>&nbsp;</td></tr>
</table>
</body>
</html>