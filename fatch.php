
<?php include('db.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 
</head>
<body>

<div class="container">         
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
    <?php
		$stmt=$conn->query("SELECT * FROM form");
		while($rows=$stmt->fetch_array()){?>
      <tr>
       
        <td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['password']; ?></td></td>
        <td><?php echo $rows['email']; ?></td></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
