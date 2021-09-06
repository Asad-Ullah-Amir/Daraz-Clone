<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



<style type="text/css">
input[type=text], select {
  width: 95%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 95%;
  padding: 5px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>


</head>
<body>
<div class="container" >
	<div class="row">
	<div class="col-sm-6">	
	<h4>Welcome to Daraz! Please login</h4>
	</div>
	<div class="col-sm-6" style="text-align: right;">
		<p>New member <a href="#">Register Here</a></p>
	</div>
</div>
</div>




	<div class="container">
		
			<div class="card" >
				<div class="card-body">
					<div class="row">
  	<div class="col-sm-6">
    <form>
    	<label>Phone Number or Email*</label><br>
    	<input type="text" name="text"  placeholder="Please Enter Phone Number or Email" ><br>
    	<label>Password*</label><br>
    	<input type="password" name="password"  placeholder="Please Enter Password" >
    </form>
    <div style="text-align: right;">
    <a href="#" ><span >Forget Password</span></a>
    </div>
    </div>

    <div class="col-sm-6 ">
    	<button style=" background-color:orange; height:40px; width:100%; color: white; border: 0;">Login</button><br>
    	<a href="#" ><span >or Login With</span></a><br><br>
    	<button style=" background-color:#3B5998;height:40px; width:100%; color: white; border: 0; margin-bottom: 10px;">Facebook</button><br>
    	<button style=" background-color:red;height:40px; width:100%; color: white; border: 0;">Gmail</button><br>
    </div>

  </div>
</div>
</div>
</div>

</body>
</html>