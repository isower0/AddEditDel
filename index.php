<?php
session_start();
include('db.php');

$sql = "SELECT * FROM `employee`";
$resuit = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
<?php 
    if (isset($_SESSION['sucess'])) {
        echo $_SESSION['sucess'];
        unset($_SESSION['sucess']);
    }

?> 

  <div class="container">
  <div class="row">
    <div class="col">

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Saralry</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $count = 1;
      while($row = mysqli_fetch_assoc($resuit))
      {
  ?>

 
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $row['NAME']; ?></td>
      <td><?php echo $row['AGE']; ?></td>
      <td><?php echo $row['ADDRESS']; ?></td>
      <td><?php echo $row['SALARY']; ?></td>
      <td><a href="edit.php?edit=<?php echo $row['ID'] ?>">EDIT</a></td>
      <td><a href="action.php?del=<?php echo $row['ID'] ?>" onclick="return confirm('are you sure?')">DELETE</a></td>
    </tr>
    <?php 
     $count++; 
     }

?>
  </tbody>
</table>

    </div>
    <div class="col-5">
    <h1>INSERT</h1>
    <form action="action.php" method="post">
        <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Age</label>
    <input type="number" class="form-control" id="age" name="age" placeholder="age">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Salary</label>
    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary">
  </div>
  <button type="submit" id="add" name="add" class="btn btn-secondary btn-lg">Submit</button>
    </div>
  </div>
</div>   

        </form>
        
</body>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>