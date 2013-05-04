<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<title>Resume Builder</title>	
</head>
<body>
<?php
include 'mysqlcon.php';

?>
<div class="container">
	<div class ="row">
		<div class="span12">
			<form class="form-horizontal" action = "insert.php" method = "post" enctype="multipart/form-data">
				<div class ="row" style="background-color:tan; margin:1%">
					<div class="span12">
						<strong>Personal Details</strong></p>
					</div>	
				</div>
				<div class="control-group">
  					<label class="control-label" for="resumeid">Resume ID</label>
    				<div class="controls">
     					<input type="text" id="resumeid" name="resumeid" class = "span3" placeholder="Resume ID" readonly>
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="fname">First Name</label>
    				<div class="controls">
     					<input type="text" id="fname" name="fname" class = "span4" placeholder="First Name">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="lname">Last Name</label>
    				<div class="controls">
     					<input type="text" id="lname" name="lname" class = "span4" placeholder="Last Name">
    				</div>
  				</div>	
				<div class="control-group">
  					<label class="control-label" for="address">Address</label>
    				<div class="controls">
     					<textarea id="address" name="address" class = "span4" rows="3"></textarea>
    				</div>
  				</div>	
 				<div class="control-group">
  					<label class="control-label" for="city">City</label>
    				<div class="controls">
     					<input type="text" id="city" name="city" class = "span4" placeholder="City">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="state">State</label>
    				<div class="controls">
     					<input type="text" id="state" name="state" class = "span4" placeholder="State">
    				</div>
  				</div>		
  				<div class="control-group">
  					<label class="control-label" for="zip">Zip Code</label>
    				<div class="controls">
     					<input type="text" id="zip" name="zip" class = "span4" placeholder="Zip Code">
    				</div>
  				</div>	
  				<div class="control-group">
  					<label class="control-label" for="country">Country</label>
    				<div class="controls">
     					<input type="text" id="country" name="country" class = "span4" placeholder="Country">
    				</div>
  				</div>	
  				<div class="control-group">
  					<label class="control-label" for="landline">Landline No.</label>
    				<div class="controls">
     					<input type="text" id="landline" name="landline" class = "span4" placeholder="landline No.">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="mobile">Mobile</label>
    				<div class="controls">
     					<input type="text" id="modile" name="mobile" class = "span4" placeholder="Mobile">
    				</div>
  				</div>		
  				<div class="control-group">
  					<label class="control-label" for="email">Email</label>
    				<div class="controls">
     					<input type="text" id="email" name="email" class = "span4" placeholder="Email">
    				</div>
  				</div>		
				<div class="control-group">
  					<label class="control-label" for="website">Website</label>
    				<div class="controls">
     					<input type="text" id="website" name="website" class = "span4" placeholder="Website">
    				</div>
  				</div>	
  				<div class="control-group">
  					<label class="control-label" for="file">Upload a Photo</label>
    				<div class="controls">
     					<input type="file" name="file" id="file">
    				</div>
  				</div>		
  				<div class ="row" style="background-color:tan; margin:1%">
					<div class="span12">
						<strong>Personal Statement</strong></p>
					</div>	
				</div>
				<div class="control-group">
  					<label class="control-label" for="personalstatement">Statement</label>
    				<div class="controls">
     					<textarea id="personalstatement" name="personalstatement" class = "span6" rows="10"></textarea>
    				</div>
  				</div>	
  				<div class ="row" style="background-color:tan; margin:1%">
					<div class="span12">
						<strong>Career Objective</strong></p>
					</div>	
				</div>
				<div class="control-group">
  					<label class="control-label" for="careerobj">Objective</label>
    				<div class="controls">
     					<textarea id="careerobj" name="careerobj" class = "span6" rows="10"></textarea>
    				</div>
  				</div>	
  				<div class ="row" style="background-color:tan; margin:1%">
					<div class="span12">
						<strong>Key Skills</strong></p>
					</div>	
				</div>
				<div class="control-group">
  					<label class="control-label" for="skill1">Skills</label>
    				<div class="controls">
     					<input type="text" id="skill1" name="skill1" class = "span4" placeholder="Skill1">
     					<input type="text" id="skill2" name="skill2" class = "span4" placeholder="Skill2">
     					<input type="text" id="skill3" name="skill3" class = "span4" placeholder="Skill3">
     					<input type="text" id="skill4" name="skill4" class = "span4" placeholder="Skill4">
    				</div>
  				</div>	
  				<div class ="row" style="background-color:tan; margin:1%">
					<div class="span12">
						<strong>Education</strong></p>
					</div>	
				</div>
				<div class="control-group">
  					<label class="control-label" for="yearpass1">Education</label>
    				<div class="controls">
     					<input type="text" id="yearpass1" name="yearpass1" class = "span3" placeholder="Year of Passing">
     					<input type="text" id="edu1" name="edu1" class = "span6" placeholder="Education 1">
     					<input type="text" id="yearpass2" name="yearpass2" class = "span3" placeholder="Year of Passing">
     					<input type="text" id="edu2" name="edu2" class = "span6" placeholder="Education 2">
     					<input type="text" id="yearpass3" name="yearpass3" class = "span3" placeholder="Year of Passing">
     					<input type="text" id="edu3" name="edu3" class = "span6" placeholder="Education 3">
    				</div>
  				</div>
  				<div class ="row" style="background-color:tan; margin:1%">
					<div class="span12">
						<strong>Work Experience</strong></p>
					</div>	
				</div>
				<div class="control-group">
  					<label class="control-label" for="workexp">Experience</label>
    				<div class="controls">
     					<textarea id="workexp" name="workexp" class = "span6" rows="10"></textarea>
    				</div>
  				</div>	
  				<div class="control-group">
  					<label class="control-label" for="submit"></label>
    				<div class="controls">
     					<button type = "submit" class = "btn btn-success" id="submit" name="submit">Submit</button>
    				</div>
  				</div>	
			</form>

		</div>	
	</div>
</div>		


</body>
