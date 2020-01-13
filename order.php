<!DOCTYPE html>
<html>
<head>
	<title>ORDER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Order.css">

</head>
<body>

	<nav class="nabar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img src="hajdee.png" href="index.html"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" active>
					<a class="nav-link" href="index.html">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">COLLECTION</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="order.html">ORDER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactUs.html">CONTACT US</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
	<div class="row">
  <div class="column" style="background-color:black;">
    <h2 style="color: #FFD700">WHAT DO WE OFFER</h2>
    <p style="color: #F0E68C" >We can offer you a whole range of ways of making the most of your abilities, including some you would never even have imagined! If you are one of the best, we have a job for you. We seek intelligent, creative, enthusiastic people who are prepared to take on all sorts of challenges in all the departments of our company.</p>
  </div>
  <div class="column" style="background-color:black;">
    <h2>SERVICES</h2>
    <p style="color:#F0E68C ">Hublot makes every effort to bring you the greatest possible satisfaction. With the aim of constantly improving our service, we would ask you to inform us of any questions or comments you may have concerning our brand.

FIND SERVICES NEAR ME </p>
  </div>
</div>

<form method="post" action="infos.php">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" placeholder="ex:Your Name"required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Your Surname" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="gmail/hotmail/live" aria-describedby="inputGroupPrepend3" required>
        <div class="invalid-feedback">
          Enter your email.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Geneve" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">State</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Switzerland" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
	 By checking this box, you agree that your data will be processed by Hublot SA as data controller, in conformity with its <a href="https://www.hublot.com/en/privacy">privacy policy</a>, which describes all details surrounding the processing (including use, transfers and retention) of your data, as well as your rights and choices regarding such processing.
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Send</button>
</form>
</body>
</html>