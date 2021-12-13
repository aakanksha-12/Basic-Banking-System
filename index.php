<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!--  External CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Sparks Bank </title>
    
  </head>
  <body>
      <!--nevbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Welcome To Sparks Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto pr-3">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <!--<a class="nav-link" href="#"> Money Transfer </a>-->
        <a class="nav-link" href="history.php"> Transactions History </a>
        <a class="nav-link" href="contact.php">Contact  </a>
          </div>
       </div>
  </div>
</nav>
    
    <!--  Background Image -->

  <div class="backimg">
    <img src="images/back1.jpg" class="img-fluid" alt="Sparks Bank">
  </div>


<!--  Transaction Money Form  -->

<div class="container">
  <div class="row">
    <div class="col">
    <div class="card border-success  mx-4 my-5 " style="max-width: 19rem;" >
  <div class="card-header bg-transparent border-denger text-center "><h4>Money Transfer</h4></div>
  <div class="card-body text-success">
   
 <form method="post" >
  <div class="mb-3">
    <label for="user1" class="form-label">Debit User</label>
    <select class="form-select" aria-label="Default select example" name="user1">
  <option selected > Debitors Users </option>
    <option value="Aakanksha Yadav">Aakanksha Yadav</option>
    <option value="Nelson Carter">Nelson Carter</option>
    <option value="Jamie Stephens">Jamie Stephens</option>
    <option value="Harley Bates">Harley Bates</option>
    <option value="Harper Watts">Harper Watts</option>
    <option value="Michael Eland">Michael Eland</option>
    <option value="Stewart Tyler">Stewart Tyler</option>
    <option value="Philip Wood">Philip Wood</option>
    <option value="Nelson Pierce">Nelson Pierce</option>
    <option value="Eden Baker">Eden Baker</option>
    <option value="Sylvester Paul">Sylvester Paul</option>
    <option value="Jerome Turner">Jerome Turner</option>
    <option value="Perry Geis">Perry Geis</option>
    
</select>
    
  </div>
  <div class="mb-3">
    <label for="user2" class="form-label">Credit User</label>
    <select class="form-select" aria-label="Default select example" name="user2">
  <option selected >Creditors Users</option>
    <option value="Aakanksha Yadav">Aakanksha Yadav</option>
    <option value="Nelson Carter">Nelson Carter</option>
    <option value="Jamie Stephens">Jamie Stephens</option>
    <option value="Harley Bates">Harley Bates</option>
    <option value="Harper Watts">Harper Watts</option>
    <option value="Michael Eland">Michael Eland</option>
    <option value="Stewart Tyler">Stewart Tyler</option>
    <option value="Philip Wood">Philip Wood</option>
    <option value="Nelson Pierce">Nelson Pierce</option>
    <option value="Eden Baker">Eden Baker</option>
    <option value="Sylvester Paul">Sylvester Paul</option>
    <option value="Jerome Turner">Jerome Turner</option>
    <option value="Perry Geis">Perry Geis</option>

</select>
  </div>
  <div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input type="number" class="form-control" id="amount" name="amount">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="check1">
    <label class="form-check-label" for="check" name="">Send Money </label>
  </div>
  

  </div>
  <div class="card-footer bg-transparent border-success mx-auto "><button type="submit" class="btn btn-primary" name="submit">Continue</button>
</form></div>
</div>
</div>

<!
--  Databse Connectivity   -->  

<?php
include 'dbcon.php';


if (isset($_POST['submit'])) {
 

   
 
 
   $user1= $_POST['user1'];
    $user2= $_POST['user2'];
      $amount= $_POST['amount'];
        
 
 


 $insertq= "insert into transactions  (user1, user2, amount) values('$user1',
 '$user2','$amount')";

 $result = mysqli_query($con , $insertq);



 if ($result){

  
     echo " <br/> <br/> <h2>Transaction complete :)</h2> ";
  
 }else{
 
     echo"Transaction not completed";
 }
}

?>

<!--  Footer   -->

<footer>
  <nav class="navbar fixed-bottom navbar-dark bg-dark">
  <div class="container-fluid justify-content-center ">
    <a class="navbar-brand text-center footertxt" href="#">
      <h6>  Copyright @ 2021. Made by <b>Aakanksha Yadav</b><br>
       For the Project of <b>The Sparks Foundation</b></br></h6>   
    </a>
  </div>
</nav>


</footer>
    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>