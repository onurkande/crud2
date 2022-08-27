<?php
include 'connect.php';

 ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="database.php">
    <link rel="stylesheet" href="localhost.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>crudoperation</title>
     <style>
        body{
    background-color: #FFEBEE;
}
     </style>
</head>
<body>

<!--FORMS -->

    <form method="post">


<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h6 class="card-title mb-3 text-center ">Bu randevu için</h6>
            <div class="d-flex flex-row"> <label class="radio mr-1"> <input type="radio" name="add" value="anz" checked> <span> <i class="fa fa-user"></i> Giriş </span> </label> <label class="radio"> <input type="radio" name="add" value="add"> <span> <i class="fa fa-plus-circle"></i> Ekle </span> </label> </div>
            <h6 class="information mt-4  text-center ">Lütfen Bilgileri Giriniz</h6>


            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Adınızı Girin" name="name" > </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> 
                            <input class="form-control" type="email" placeholder="Email Girin" name="email" > </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> 
                            <input class="form-control" type="text" placeholder="şifrenizi Girin" name="password" > </div>
                    </div>
                </div>
            </div>


           

            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                <small class="agree-text">Bu randevuyu rezerve ederek şunları kabul etmiş olursunuz:</small>
                 <a href="#" class="terms">Şartlar ve Koşullar</a> 
            </div> 


           <button type="submit" class="btn btn-primary btn-block confirm-button" name="submit" >Confirm</button> 
           <!-- <input type="submit" class="btn btn-primary btn-block confirm-button" value="Gönder" name="submit"  > -->
        </div>
    </div>
</div>

</form>


<div class="border border-light p-3 mb-4">

<div class="text-center">
  <button type="button" class="btn btn-primary"> <a href="veriler.php" class="btn btn-primary" >veriler</a></button>
</div>

</div>


<!--<div  class="" >
    <button class="btn btn-primary my-5" >
    <a href="veriler.php" class="text-light" >veriler</a>
    </button>-->




</body>
</html>