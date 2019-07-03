<?php include('db.php');
   if(isset($_GET['delete']) ){
     $delete=$_GET['delete'];
     $stmt=$conn->prepare("DELETE FROM form WHERE id='".$delete."' ");
      $del=$stmt->execute();
   if($del){
     
     echo "<script>window.location.href=('user_list.php')</script>";  // Link For page redirection
   }else{
     echo "Delete Not Successfully";
   }
   
   }
  ?>
  