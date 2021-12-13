
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
    <a class="navbar-brand" href="#">Sparks Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto pr-3">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
       <!-- <a class="nav-link" href="index.php"> Money Transfer </a>-->
        <a class="nav-link" href="history.php"> Transactions History </a>
        <a class="nav-link" href="contact.php">Contact  </a>
          </div>
       </div>
  </div>
</nav>
    
    <!--  Background Image -->

  
  <div class="main-div">
  		<table class="table">
  			<figure class="text-center">
  <blockquote class="blockquote my-2 bg-info pt-1 pb-1">
    <h2>Transactions History</h2>
  </blockquote>
  
</figure>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Debitors Users</th>
      <th scope="col">Creditors Users</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>

  	<?php


include 'dbcon.php';

$selectquery = " select * from transactions ";

$query = mysqli_query($con, $selectquery );

$nums = mysqli_num_rows($query);



while ($res = mysqli_fetch_array($query)){

?>	

 <tr>
    
      <td><?php echo $res['ID'] ?></td>
      <td><?php echo $res['User1'] ?></td>
      <td><?php echo $res['User2'] ?></td>
      <td><?php echo $res['Amount'] ?></td>
  </tr>

<?php

	}

?>
    
    
  </tbody>
</table>
  </div>


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