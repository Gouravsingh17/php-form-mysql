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
 
  <div class="signup-classic">
    <h2>Update Form</h2>
    <?php
        if(!empty($_GET['edit'])){
$stmt=$conn->query("SELECT * FROM form WHERE id='".$_GET['edit']."' ");
while($row=$stmt->fetch_array()){?>

     <form action="insert.php" class="form"  method="post">
      <fieldset class="username">
        <input type="text" value="<?php echo $row['username'];?>" name="username" placeholder="username">
      </fieldset>
      <fieldset class="password">
        <input type="password" value="<?php echo $row['password'];?>" name="password" placeholder="password">
      </fieldset>
      <fieldset class="email">
        <input type="email" value="<?php echo $row['email'];?>" name="email" placeholder="email">
      </fieldset>
       <button type="submit" name="submit" value="submit" class="btn">Sign up</button>
     <!-- <input type="submit" name="submit" value="submit"> -->
    </form>

    <?php } } ?>
  </div>
</div>

</body>
</html>
<style type="text/css">
  .signup-connect, .signup-classic {
    width: 100%;
    padding: 30px 50px;
}
</style>