<?php
session_start();
include('db.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $sql = "SELECT * FROM `employee` WHERE `ID` = $id";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Edit</title>
</head>
<body>
<div class="box">
<h1>EDIT </h1>
<div class="col">
    <form action="action.php" method="post">
        <div class="form-group">
        <input name="id" type="hidden" value="<?php echo $row['ID'];?>" />
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo $row['NAME']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Age</label>
    <input type="number" class="form-control" id="age" name="age" placeholder="age" value="<?php echo $row['AGE']; ?>" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $row['ADDRESS']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Salary</label>
    <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" value="<?php echo $row['SALARY']; ?>">
  </div>
  <button type="submit" id="edit" name="edit" class="btn btn-secondary btn-lg">Submit</button>
  <a href="index.php">BACK TO HOME</a>
    </div>
  </div>
</div>   

        </form>
        
        </div>
        

</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>