<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mail from contact us page</title>
</head>
<body>
<h2>Hello Admin,</h2>
<p>You received an email from : {{ $name }} <br> Here are the details:</p> <br>
<p><b>Name:</b> {{ $name }}</p>
<p><b>Email:</b> {{ $business_email }}</p>
<p><b>Phone Number:</b> {{ $phone }}</p>
<p><b>Request type:</b> {{ $request_type }}</p>
<p><b>Message:</b> {{ $description }}</p>
<h5>Thank You</h5>
</body>
</html>