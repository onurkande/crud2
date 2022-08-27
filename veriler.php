<?php 
include "connect.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>veriler</title>
</head>
<body>
    
<div class="container">
    <button class="btn btn-dark my-5"><a href="user.php" class="text-light" >kullanıcı ekle</a>
        </button>


<table class="table table-dark">

<thead>
    <tr>
      <th scope="col">id no</th>
      <th scope="col">ADI</th>
      <th scope="col">EMAİLİ</th>
      <th scope="col">ŞİFRESİ</th>
      <th scope="col" >Update/Delete</th>
    </tr>
  </thead>

  <tbody>
 
  <?php
  
   $sql="select * from `crud2`";
   $result=mysqli_query($conn,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
     $id=$row['id'];
     $name=$row['name'];
     $email=$row['email'];
     $password=$row['password'];
     echo '<tr>
     <th scope="row">'.$id.'</th>
     <th scope="row">'.$name.'</th>
     <th scope="row">'.$email.'</th>
     <th scope="row">'.$password.'</th>

     <td>
     <button class="btn btn-primary" >
      <a href="update.php? updateid='.$id.' " class="text-white" >update</a> 
      </button>

     <button class="btn btn-danger" >
      <a href="delete.php? deleteid='.$id.' " class="text-white" >delete</a>
       </button>
     </td>

   </tr> ';
    }
   }

  ?>


  
</table>

</div>





</body>
</html>