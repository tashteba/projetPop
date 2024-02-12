<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';  ?>
<body>
<?php include 'includes/navbar.php';  ?>


<form class="container" method='POST'>
        <div class="mb-3">
          <label for="name" class="form-label">First Name</label>
          <input type="name" class="form-control" id="name">
        </div>

        <div class="mb-3">
          <label for="LastName" class="form-label">Last Name</label>
          <input type="LastName" class="form-control" id="LastName">
        </div>


        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <a href="creat.php"><button type="submit" class="btn btn-primary" name ="validate">Creat Account</button></a>
</body>
</html>