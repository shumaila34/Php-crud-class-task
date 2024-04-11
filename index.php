<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <nav class="navbar  navbar-expand-lg bg-dark text-light bg-body-tertiary"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hospital System</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="patientlogin.php">Patient Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="read.php">Show Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="updatepatient.php">Update Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="delete.php">Delete Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="addpara.php">Add New paramedical  staff</a>
        </li> <br>
        <select name="staff" class="nav-item dropdown">
          <option value="" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" selected >ParaMedical staff</option>
          <?php
          $conn=mysqli_connect('localhost','root','','hi');
          $query="select * from  Paaramedical_staff";
          $data=mysqli_query($conn,$query);
          while($rows=mysqli_fetch_assoc($data)){
            ?>
          <option value="<?php $rows['id']?>"><?php echo $rows['staff_name']?></option>
            <?php
          } 
          ?>
        </select>    
        <br><br>
       
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>