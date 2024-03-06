<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>My ToDO</title>
</head>
<body>

<div class="container mt-5">

<div class="row justify-content-center">
        <div class="col-md-6 text-center">

        <h1 class="text-center py-4 my-4">ToDo'S List</h1>

    <form action="insert.php" method="post" autocomplete="off">
        <div class="form-group">
            <input class="form-control" type="text" name="title" id="title" placeholder="Type Here To Add On Task..." Required>
            <button class="btn btn-success mt-3">Add Task+</button>
        </div>
        

    </form>
    </div>

    </div>
    </div>

    <hr class="bg-dark w-50 m-auto mt-3">


    <div class="lists w-50 m-auto my-4">
        <h1>My Tasks</h1>
        <div id="lists">
        <table class="table table table-hover">
  <thead>
    <tr>
      <th scope="col" name="id">T.no</th>
      <th scope="col">ToDo Task</th>
    <th></th>
    </tr>
  </thead>

  <tbody>
 <?php
        include 'database/data.php';
        $sql="SELECT * FROM todo";
        $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $title=$row['title'];
               
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title  ?></td>
                    <td>
                    <a class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
 
                    </td>             
                </tr>
                <?php
            }
        }
    ?> 
    
   
  </tbody>
</table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>