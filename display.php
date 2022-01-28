<!DOCTYPE html>
<html>
<head>
 <title></title>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>

 <div class="countainer-fluid">
 <div class="col-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th class="text-white"> Id </th>
 <th class="text-white"> Name </th>
 <th class="text-white"> Gender </th>
 <th class="text-white"> Age </th>
 <th class="text-white"> Mobile </th>
 <th class="text-white"> Father's Name </th>
 <th class="text-white"> Mother's Name </th>
 <th class="text-white"> Guardian's Contact </th>
 <th class="text-white"> Address </th>
 <th class="text-white"> College </th>
 <th class="text-white"> Experience </th>
 <th class="text-white"> Skills </th>
 <th class="text-white"> Delete operation</th>
 <th class="text-white">Update operation</th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from form";

 $query = mysqli_query($con,$q);
//die( mysqli_error($form));
 while($res = mysqli_fetch_array($query))   {
 //var_dump($skills);

//echo $res['skills'];
 
 ?>
 <tr><td><?php 
echo $res['id'];

  ?></td>
  <td><?php 
echo $res['name'];

  ?></td>
  <td><?php 
echo $res['gender'];

  ?></td>
  <td><?php 
echo $res['age'];

  ?></td>
  <td><?php 
echo $res['mobile'];

  ?></td>
  <td><?php 
echo $res['father'];

  ?></td>
  <td><?php 
echo $res['mother'];

  ?></td>
  <td><?php 
echo $res['contact'];

  ?></td>
  <td><?php 
echo $res['address'];

  ?></td>
  <td><?php 
echo $res['college'];

  ?></td><td><?php 
echo $res['experience'];

  ?></td><td><?php 
echo $res['skills'];


  ?></td>

 <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
