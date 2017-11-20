
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css_login.css">
    <link rel="stylesheet" type="text/css" href="form_register_login.css">
  </head>
  <body>
    <div class="jumbotron text-center">
      <div class="container">

        <h1>Prudentail</h1>

      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->

      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Victoria</h2>
        </div>
      </div>


      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6"> <a data-toggle="tab" href="#Register" class="btn btn-sm animated-button victoria-one">Register</a> </div>
        <div class="col-md-4 col-sm-4 col-xs-6"> </div>
        <div class="col-md-4 col-sm-4 col-xs-6"> <a data-toggle="tab" href="#Login" class="btn btn-sm animated-button victoria-two">Login</a> </div>
      </div>


      <div class="tab-content">

         <div id="Register" class="tab-pane fade in active">
          <br><br>
          <fieldset>
            <form action="Welcome.php" method="POST">
              <h1>Register</h1>
              <input type="text" placeholder="Name" name="n" >
              <input type="text"  placeholder="Surname" name="ln">
              <input type="text" placeholder="Email" name="email">
              <input type="text" placeholder="Tel" name="tel">
              <button>Register</button>
              <br><br><br><br><br><br>
            </form>
          </fieldset>
        </div>

        <div id="Login" class="tab-pane fade in active">
          <br><br>
          <fieldset>
			  <form action="welcome.php">
  				Name: <input type="text" id="username"/>
  				Password: <input type="password" id="password"/>
  				<input type="submit" value="Login"/>
  			</form>
          </fieldset>
        </div>


      <footer class="jumbotron text-center">
        <div class="container">
          <p style="color:#888">More resources at <a href="http://designify.me/">designify.me</a></p>
        </div>
      </footer>
      <script  src="js_login.js"></script>

  </body>
</html>
