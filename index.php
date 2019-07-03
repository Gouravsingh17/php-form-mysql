
<?php include('db.php') ?>
<?php include('insert.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>

	 <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

	<div class="signup">
  <div class="signup-connect">
    <h1>Create An Account</h1>
    <a href="https://www.facebook.com/" class="btn btn-social btn-facebook">
      <i class="fa fa-facebook" aria-hidden="true"></i>
      Sign in with Facebook
    </a>
    <a href="https://twitter.com/login" class="btn btn-social btn-twitter">
      <i class="fa fa-twitter" aria-hidden="true"></i>
      Sign in with Twitter
    </a>
    <a href="https://mail.google.com/" class="btn btn-social btn-google">
      <i class="fa fa-google-plus" aria-hidden="true"></i>
      Sign in with Google
    </a>
    <a href="https://www.behance.net/" class="btn btn-social btn-behance">
      <i class="fa fa-behance" aria-hidden="true"></i>
      Sign in with Behance
    </a>
  </div>
  <div class="signup-classic">
    <h4><a href="user_list.php">User List</a></h4>
     <form action="insert.php" class="form"  method="post">
      <fieldset class="username">
        <input type="text" name="username" placeholder="username">
      </fieldset>
      <fieldset class="password">
        <input type="password" name="password" placeholder="password">
      </fieldset>
      <fieldset class="email">
        <input type="email" name="email" placeholder="email">
      </fieldset>
       <button type="submit" name="submit" value="submit" class="btn">Sign up</button>
     <!-- <input type="submit" name="submit" value="submit"> -->
    </form>
  </div>
</div>

</body>
</html>