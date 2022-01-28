<?php

include 'conn.php';

if(isset($_POST['done'])){

 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
$mobile = $_POST['mobile'];
 $father = $_POST['father'];
 $mother = $_POST['mother'];
 $contact = $_POST["contact"];
 $address = $_POST['address'];
 $college = $_POST['college'];
 $experience = $_POST['experience'];
 $skills = $_POST['skills'];
 


 $q = "INSERT INTO `form`(`name`, `gender`,`age`,`mobile`,`father`,`mother`,`contact`,`address`,`college`,`experience`,`skills`) VALUES ( '$name', '$gender','$age','$mobile','$father','$mother','$contact','$address','$college','$experience','$skills')";
//$q = "SELECT * FROM `form` WHERE 1";
// SELECT * FROM `form` WHERE 1;
 
 $query = mysqli_query($con,$q);

}
?>

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




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br>

 Gender:-
<input type="radio" id="male" name="gender" value="male">Male
 <input type="radio" id="female" name="gender" value="female">Female
 <input type="radio" id="other" name="gender" value="other">Other<br>
 
 <label>age</label>
 <input type="text" name="age" class="form-control"> <br>

 <label>Mobile</label>
 <input type="text" name="mobile" class="form-control"> <br>

 <label>Father's Name</label>
 <input type="text" name="father" class="form-control"> <br>

 <label>Mother's Name</label>
 <input type="text" name="mother" class="form-control"> <br>


 <label>Guardian's Contact</label>
 <input type="text" name="contact" class="form-control"> <br>

 <label>Address</label>
 <textarea type="text" name="address"></textarea> <br>

 <label>College</label>
 <input type="text" name="college" class="form-control"> <br>

 <label>Experience Year</label>
 <input type="text" name="experience" class="form-control"> <br>

 <label>Skills</label>
 <input type="text" name="skills" value="">

 <button class="btn btn-success mt-5" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>