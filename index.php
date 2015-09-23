<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Password Generator</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
	require("password_funcs.php");
?>
<header>
&nbsp;
</header>
<section>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-xs-12">
        <h1 class="text-center">xkcd Password Generator</h1>
      </div>
      <div class="col-xs-12 pass-border">
        <h2 class="text-center"><?php echo $word_array; ?></h2>
      </div>
      <div class="text-center col-lg-12"> 
        <form role="form" id="passwordform" class="text-center" action="index.php" method="post">
          <div class="form-group text-left">
            <label for="number">Number of words</label>
            <select name="number" id="number">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="form-group text-left">
            <label for="seperator">Seperator</label>
            <input type="text" class="form-control" id="separator" name="separator" placeholder="!@#)$%^&*(">
            <span class="help-block" style="display: none;">Please enter a special character.</span>
            <label><span style="color: #4F4F4F">&nbsp;(More than 1 value will be randomized within the password)</span></label></div>
          <div class="form-group text-left">
            <input type="checkbox" id="uppercase" name="uppercase"  />
            <label for="uppercase">Make the first letter of each word uppercase.</label></div>      
          <div class="form-group text-left">
           <input type="checkbox" id="end_num" name="end_num"  />
            <label for="end_num">Insert a number to the end.</label></div>
            <button type="submit" name="submit" id="Submit" class="btn btn-primary btn-lg" style=" margin-top: 10px;">Generate Password</button>
        </form>
      </div>
    </div>
  </div>	
</section>
<section>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-xs-12">
				<p>28 bits of entropy.  Do you know what it means?  Neither do we.  This application was built to create complex passwords while still maintaining complexity.  The comic below easily identifies the current problems when creating secure passwords.</p>
				<img src="img/xkcd.bmp" alt="xkcd password comic" />      </div>
    </div>
  </div>	
</section>
<section>

</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
