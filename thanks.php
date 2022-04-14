<head>
	<!-- Thank you page - template -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank youuuu</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        
        body { 
            background: url(images/plane_background.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<!-- Showing appreciation to user -->
		<p class="main-content__body" data-lead-id="main-content-body">Thank you so much <?php echo $_POST['name']." ".$_POST['surname']?> for booking with us. We hope you have the most amazing time! </p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Please look out for our email that has been sent to <?php echo $_POST['email']?> to confirm your booking as well as the details with regards to your stay.</p>
        <p class="site-footer__fineprint">Please let us know if there is anything else that we can assist you with.</p>
        <br>
        <div class="site-footer__fineprint">Contact Details:
            <p>Phone: +27 63 891 9739</p>
            <p>Email: codidf25@gmail.com</p>
        </div>
    </footer>
</body>

<br><br><br><br><br><br><br><br><br><br>
<!-- Button to the email.php to show understanding of how the mailing system works and how to use Composer -->
<button type='submit' onclick="window.location.href='email.php'">Click here to view more techinical details about email</button>