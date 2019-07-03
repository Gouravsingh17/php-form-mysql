<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('db.php') ?>
    <?php include('insert.php') ?>
    <?php include('process.php') ?>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">  
    <style type="text/css">
           .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container">
           
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="index.php" class="btn btn-success pull-right">Add New Employee</a>
                    </div>
              
                    
                    <table class='table table-bordered table-striped'>
                                <thead>
                                   <tr><th>Id</th>
                                    <th>Name</th>
                                    <th>Password</th>
                                   <th>Email</th>
                                   <th>Action</th>
                                      </tr>
                                      </thead>
                                    <tbody>
                                        <?php
        $stmt=$conn->query("SELECT * FROM form");
        while($rows=$stmt->fetch_array()){?>
                            <tr>

                                        
                                        <td><?php echo $rows['id']; ?></td>
                                        <td><?php echo $rows['username']; ?></td>
                                        <td><?php echo $rows['password']; ?></td></td>
                                        <td><?php echo $rows['email']; ?></td></td>
                                        
                                   <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                            <a href="update.php?edit=<?php echo $rows['id'];?>">
                                                <button class="btn btn-xs btn-info">
                                                    <span class='glyphicon glyphicon-pencil'></span>
                                                </button>
                                            </a>
                                            <a href="process.php?delete=<?php echo $rows['id'];?>">
                                                <button class="btn btn-xs btn-info">
                                                    <span class='glyphicon glyphicon-trash'></span>
                                                </button>
                                            </a>
                                            
                                        </div>
                                    </td>
                                    </tr>
                                <?php } ?>
                                </tbody>                        
                            </table>
                            
                            
                  
        </div>
    </div>
</body>
</html>

<!-- 
 <td>
                                            <a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                            <a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                            <a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                        </td> -->