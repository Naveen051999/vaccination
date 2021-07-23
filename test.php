<html>
<head>
<link rel="stylesheet" href="./css/bootstrap.min.css">

<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style>
body{
	background-image: url('./img/kia.jpg');
	background-position: center;
  background-repeat: no-repeat;
  }

</style>
</head>
<body>

<div class="container" style="background-color:null;">
<form action="register.php" method="POST" enctype="multipart/form-data" role="form">
<h2 style="text-align:center;">Registration From </h2>
<div class="form-group row">
<label for="name" class="col-sm-2 form-control-label"> NAME:</label>
<input type="text" placeholder="Enter Your Name" name="name" id="name" class="col-md-6 form-control" required>
<br></div>

<div class="form-group row">
<label for="mobno" class="col-sm-2 form-control-label">MOBNO:</label>
<input type="number"  placeholder="Enter Your Phone Number" name="mobno" id="mobno" class="col-md-6 form-control" required file>
<br></div>

<div class="form-group row">
<label for="email" class="col-sm-2 form-control-label">EMAIL ID:</label>
<input type="email" placeholder="Enter Your email" name="email" id="email" class="col-md-6 form-control">
<br></div>

<div class="form-group row">
<label  for="gen" class="col-sm-2 form-control-label">GENDER:</label>



<input type="radio" name="gender" value="male">
<label for="ML" class="col-sm-2 form-control-label" style="color:red">MALE</label>
<input type="radio"  name="gender"   value="female" >
<label  for="fm" class="col-sm-2 form-control-label" style="color:red">FEMALE</label>

<br></div>

<div class="form-group row">
<label for="bdgrp" class="col-sm-2 form-control-label">BLOOD BROUP:</label>
<div class="col-md-6">
<select  class="form-control" name="bdgrp">
<option selected="selected" disabled>--select--</option>
<option >o+</option>
    <option >B+</option>
    <option>AB-</option>
   </select>
<br></div></div>

<div class="form-group row">
<label for="add" class="col-sm-2 form-control-label">ADDRESS:</label>
<textarea  placeholder="Enter Your Address" id="address" name="address"  class="col-md-6 form-control"></textarea>
</div>


<div class="form-group row">
<label for="propic" class="col-sm-2 form-control-label">UPLOAD UR PIC:</label>
<input type="file" id="propic" name="propic" accept="image/*"  onchange="preview_image(event)">
<div id="wrapper">
 <img id="output_image"/>
 </div></div>
 <div class="form-group row">
<label for="propic" class="col-sm-2 form-control-label"></label>
<input type="submit" value="submit" class="btn btn-primary">
</div>
</form>
 <br></div>
</body>
</html>
