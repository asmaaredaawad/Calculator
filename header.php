
<?php
	require('footer.php');
?>
<html>
	<title>Simple Calculator</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<style type="text/css">
			body {
    			width:100%;
    			height: 100%;
    			 background-image: url("images.jpg");
	         	 background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
	          	background-size:cover;
			}
			#content{
				background-color: lightblue;
				margin-left: 400px;
    			margin-top: 150px;
			    border-style: outset;

			}
			#radio{
				margin-left:50px;
			}
			#calc{
				padding-top: 20px;
			}
			#submit{
				margin-left: 150px;
			}
			legend.scheduler-border {
			  
			    padding:0 20px; /* To give a bit of padding on the left and right */
			    padding-left: 20px;
			    margin-left: 80px;
			    margin-top: 10px;
			    color:#8c7373;
			    font-style: bold;
			   
			}
		</style>
	</head>
<body>
	<div  id='content' class='col-md-4'>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">Simple Calculator</legend>
			<form id='calc' action='calc.php' method='post'>
				  <div class="form-group">
				    <label for="first number" value=>First Number</label>
				    <input type="text" class="form-control" name='num1' placeholder="first Number">
				  </div>
				  <div class="form-group">
				    <label for="Second number">Second Number</label>
				    <input type="text" class="form-control"  name='num2' placeholder="Second Number">
				  </div>
				  <div class='row' id="radio">
					  
							<div class="radio col-md-3 ">
						      <label><input type="radio" name="radio" value='+'>+</label>
						    </div>
						    <div class="radio  col-md-3">
						      <label><input type="radio" name="radio" value='-'>-</label>
						    </div>
						    <div class="radio  col-md-3">
						      <label><input type="radio" name="radio" value='*' >*</label>
						    </div>
						     <div class="radio  col-md-3">
						      <label><input type="radio" name="radio"  value='/'>/</label>
						    </div>
					   
				  </div>	   
				  <button  id='submit' type="submit" class="btn btn-primary" name='submit' value='submit' >Result</button>
			</form>
		</fieldset>

	
	