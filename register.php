<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SV BIKE RENTAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="book.php">FLEET AND PRICING <span class="sr-only">(current)</span></a>
      </li>
           </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">FAQ</a>
      </li>
  </li>
      </ul>
    
  </div>
</nav>


<section id="register" class="my-4">
  <div class="py-4">
    <h3 class="text-center">SIGNUP</h3>
    <div class="py-3">
        <div class="row">
    <div class="col-sm">
      <img src="images/idk.jpg" class="img-fluid">
    </div>
  <div class="col-sm">
  <form action="userinfo.php" method="POST"> 
  <div class="form-group input-group">
        <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input type="text" name="fname" class="form-control" id="inputfname" required>
    </div>
      <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" name="lname" class="form-control" id="inputlname" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city"class="form-control" id="inputCity" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">State</label>
      <input type="text" name="state" class="form-control" id="inputCity" required>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name="zip" class="form-control" id="inputZip" required>
    </div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
</form>
<div class="py-3">
   <a href="#Login" class="stretched-link" style="position: relative;">Aldready Have an Account?</a>
</div>
</div>
</div>
</div>
</section>


<section id="Login" class="my-5">
  <div class="py-5">
  <h3 class="text-center">SIGN IN</h3>
<div class="card mx-auto" style="width: 24rem;">
  <img src="images/login.jpg" class="card-img-top" alt="login">
  <div class="card-body">
    <form action="login.php" method="POST">
          <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="text-center">
    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  </div>
    </form>
    <div class="py-3">
         <a href="#register" class="stretched-link" style="position: relative;">Don't Have an Account?</a>
    </div>
  </div>
</div>
</div>
  </section>






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>