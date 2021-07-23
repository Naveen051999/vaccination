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
<script>
function nxtdose()
{
if (vaccine.value = covaxine)
{
	nxtdose = vaccinedate+30;
}
else{
	nxtdose = vaccinedate+84;
}
}
</script>
<style >
body{
	background-image: url('./img/registration1.jpg') ;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  
  }

</style>
</head>

<body>
<b><i><u><h1 style="text-align:center" > VACCINATION </h1></u></i></b>
<div class="row">
<div class="container">
<form action="vaccine_reg.php" method="POST" enctype="multipart/form-data" role="form">
<div class="form-group row">
<label for="name" class="col-sm-2 form-control-label"class="color:red" > NAME:</label>
<input type="text" name="name" class="col-md-4 form-control" id="name" required>
</div>
<!--radio-->

<div class="form-group row">
<label for="gender" class="col-sm-2 form-control-label radio-inline">GENDER:</label>
<input type="radio" class="col-md-1" id="gender" value="male" name="gender" checked>MALE:
<input type="radio"class="col-md-1 "id="gender" value="female"name="gender" checked>FEMALE:
</div>
<div class="form-group row">
<label for="dob" name="dob" class="col-sm-2 form-control-label">DOB:</label>

<input type="date" id="dob"  name="dob" class="col-md-4 form-control"  style="color:red" required="required">
</div><br>

<div class="form-group row">
<label for="phone" name="phone" class="col-sm-2 form-control-label" >PHONE NO:</label>
<input type="ph" name="phone" id="phone" class="col-md-4 form-control" placeholder="plz enter the ph no" required>
</div><br>

<div class="form-group row">
<label for="email" name="email" class="col-sm-2 form-control-label" >EMAIL ID:</label>
<input type="email" name="email" id="email" class="col-md-4 form-control" placeholder="plz enter valid email" required>
</div><br>







<div class="form-group row">
<label for="vaccine" id="vaccine" class="col-sm-2 form-control-label">VACCINE:</label>
<select  name="vaccine" class="col-sm-4 form-control">
<option id="vaccine"selected="selected" disabled>--plz select--</option>
<option value="covaxine">COVAXINE</option>
<option value="covishield">COVISHIELD</option>
</select></div><br>
<div class="row">
<div class="col-sm-6 form-group row">
<label for="vaccinedate" name="vaccinedate" class="col-sm-4 form-control-label">VACCINATION DATE:</label>
<input type="date" name="vaccinedate" id="vaccinedate"class="col-sm-4 form-control" onchange="nxtdose()" placeholder="enter date">
</div>

<div class="col-sm-6 form-group row">
<label for="nxtdose" name="nxtdose" class="col-sm-4 form-control-label">NEXT DOSE:</label>
<input type="text" name="nxtdose" class="col-sm-4 form-control-text"    readonly>
</div>
</div><br>


<div class="form-group row">
<label for="add" name="add" class="col-sm-2 form-control-label">ADDRESS:</label>
<textarea name="address" id="address" class="col-md-3 form-control"></textarea>
</div><br>

<div class="form-group row">
<label for="certificate" class="col-sm-2 form-control-label" style="color:black">VACCINE CERTIFICATE</label>
<input type="file" name="certificate"  accept="image/*" id="certificate" onchange="preview_image(event)">
<div id="wrapper">
 <img id="output_image">
 </div>
</div>
<div class="form-group row">
<label for="certificate" class="col-sm-2 form-control-label"></label>
<input type="submit" value="submit"  class="col-md-3 btn btn-primary">
</div></div>
</div>

</body>


</html>

