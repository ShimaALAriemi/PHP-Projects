<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update TODO Task</title>
</head>
<body>
    
<h1 class="text-center py-4 my-4">Update ToDo'S List</h1>

<?php
              include 'database/data.php';
              $id=$_GET['id'];
              $sql="SELECT * FROM todo WHERE id=".$id;

              $result = mysqli_query($conn, $sql);

              if($result){   
                  $row=mysqli_fetch_assoc($result);
                  $title=$row['title'];


              }


          ?>
<div class="w-50 m-auto">
  <form action="editaction.php" method="post" autocomplete="off">
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" id="title" value="<?php global $title; echo $title ?>" placeholder="Edit Here Your ToDo'S"
        Required>
        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
    </div><br>
    <button class="btn btn-success">Update </button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>