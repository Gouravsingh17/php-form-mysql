
<?php include('db.php') ?>



<?php 
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  
  $stmt=$conn->prepare("INSERT INTO form (username,password,email) VALUES(?,?,?)");
    $stmt->bind_param("sss",$username,$password,$email);
$ins=$stmt->execute();

if($ins){
     
     echo "<script>window.location.href=('index.php')</script>";
   }else{
     //echo "Delete Not Successfully";
    echo "",mysqli_error($conn);
   }
   }
 ?> 


<!--   fatch  -->



