<!DOCTYPE html>
<html>
<head>
    <title>Import Export Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
	<div class="container text-center">
        <img src="{{ asset('img/logo.png') }}" style="  height: 10%; width: 10%;" class="img-fluid" alt="Responsive image">
        <h1>.</h1>
    </div>
    <a href="{{ URL::temporarySignedRoute('secret', now()->addSeconds(5), null ) }}" >secret</a>
</body>
</html>