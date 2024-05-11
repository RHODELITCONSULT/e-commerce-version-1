<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register HTML</title>
</head>
<body>
<table>
	<tr><td>Dear User</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Click on the blow link to reset your Password:</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><a href="{{ url('user/reset-password/'.$code)}}">Reset Password</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Thanks & Regards,</td></tr>
	<tr><td>RHODEL E-COMMERCE</td></tr>
	<tr><td>&nbsp;</td></tr>
</table>
</body>
</html>