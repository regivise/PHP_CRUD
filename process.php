<?php

include("connect.php");
//create
if(isset($_POST['create'])){
    $title =  mysqli_real_escape_string($conn,$_POST['title']) ;
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $type = mysqli_real_escape_string($conn,$_POST['type']);
    $description= mysqli_real_escape_string($conn,$_POST['description']);
    $sql = "INSERT INTO books (title, author,type,description) VALUES('$title', '$author', '$type', '$description')";
    
    $createRecord = mysqli_query($conn,$sql);

    if($createRecord){
        session_start();
        $_SESSION['create'] ="Book added successfully";
        header("Location:index.php");
    }else{
        die("Record creation fail!").mysqli_error($conn);
    }

}
//edit

if(isset($_POST['edit'])){
    $title =  mysqli_real_escape_string($conn,$_POST['title']) ;
    $author = mysqli_real_escape_string($conn,$_POST['author']);
    $type = mysqli_real_escape_string($conn,$_POST['type']);
    $description= mysqli_real_escape_string($conn,$_POST['description']);
    $id= mysqli_real_escape_string($conn,$_POST['id']);

    $sql = "UPDATE books SET title ='$title', author ='$author', type = '$type', description = '$description' WHERE id=$id";
    
  


    if( mysqli_query($conn,$sql)){
        session_start();
        $_SESSION['update'] ="Book edited successfully";
        header("Location:index.php");
    }else{
        die("Record edit fail!").mysqli_error($conn);
    }


}

 

?>