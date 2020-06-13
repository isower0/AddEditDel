<?php
session_start();
include('db.php');

if (isset($_POST['add']) || isset($_POST['edit'])) {
    $id= $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $sqlary = $_POST['salary'];
 
    if (isset($_POST['add'])) {
        $sql = "INSERT INTO `employee`( `NAME`, `AGE`, `ADDRESS`, `SALARY`) VALUES ('$name','$age','$address','$sqlary')";
        $query = mysqli_query($conn,$sql);
       
        $_SESSION['sucess']= '<script>alert("INSERT COMPETLE")</script>'; 
        header('Location: index.php');
     }else{
         echo 'error';
     }

     if (isset($_POST['edit'])) {
        $sqlEdit = "UPDATE `employee` SET `NAME`='$name',`AGE`='$age',`ADDRESS`='$address',`SALARY`='$sqlary' WHERE `ID`=$id ";
        $queryEdit = mysqli_query($conn,$sqlEdit);
        
    if ($queryEdit) {
        $_SESSION['sucess']= '<script>alert("EDIT COMPETLE")</script>'; 
        header('Location: index.php');
    }else{
        echo 'error';
      
    }

     }else{
        echo 'error';
    }
  
 }else{
     echo 'nooo';
 }

 /*if (isset($_POST['edit'])) {
     $id= $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $sqlary = $_POST['salary'];
 
    $sqlEdit = "UPDATE `employee` SET `NAME`='$name',`AGE`='$age',`ADDRESS`='$address',`SALARY`='$sqlary' WHERE `ID`=$id ";
    $queryEdit = mysqli_query($conn,$sqlEdit);
   
    if ($queryEdit) {
        $_SESSION['sucess']= '<script>alert("EDIT COMPETLE")</script>'; 
        header('Location: index.php');
    }else{
        echo 'error';
      
    }
   
 }*/

if (isset($_GET['del'])) {
    $id= $_GET['del'];
    
    $sqlDel="DELETE FROM `employee` WHERE `ID`=$id ";
    $queryDel= mysqli_query($conn,$sqlDel);
    if ($queryDel) {
        $_SESSION['sucess']= '<script>alert("DELETE COMPETLE")</script>'; 
        header('Location: index.php');
    }else{
        echo 'error';
    }


}


 
?>