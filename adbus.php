<!--<link class="cssdeck" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css">-->
<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="css/bootstrap.css">
<style>
@font-face { font-family: Edmondsans; src: url('Edmondsans/Edmondsans-Regular.otf'); } 
input {
	font-family: Edmondsans;
}
input{
	font-family: Edmondsans;
	border-radius: 0px;
	height: 40px;
	border-color: orange;
	margin-top: 15px;
}
select{
	font-family: Edmondsans;
}
label{
	font-family: Edmondsans;
}
textarea{
	font-family: Edmondsans;
}

</style>
<body style="background-color:rgba(255, 247, 245, 0.12);">
<?php
include("includes/nav2.php");
?>
<form class="col-lg-12">
  <div class="col-md-9" id="row" style="margin-left:18%; margin-top: 20px; background-color: #fef9f5;">
		<div class="col-md-5">
<!--			<select id="subject" name="subject" class="span3"style="border-radius: 0px;width: 80%;height: 40px;outline: 1px inset orange; outline-offset: -1px;border: 0px;margin-top:30px;">-->
			<select id="subject" name="subject" class="span3 form-control">
				<option value="na" selected="">Category list</option>
				<option value="service">General Customer Service</option>
				<option value="suggestions">Suggestions</option>
				<option value="product">Product Support</option>
			</select>
			<div class="form-group"><input type="text" name="bname"class="span3 form-control" placeholder="Business Name" ></div>
<!--			<input type="text" name="bname"class="span3" placeholder="Business Name" style="border-radius: 0px;height: 40px;border-color:orange;width: 80%;margin-top:15px;">-->
<!--			<textarea name="bdescription" id="Business Description" placeholder="Business Description" class="input-xlarge span5" rows="10"style="border-radius: 0px;height: 60px;width: 80%;border-color: orange;margin-top:15px;"></textarea>-->
			<div class="form-group">
                <textarea name="bdescription" id="bescription" placeholder="Business Description" class="input-xlarge span5 form-control"></textarea>
            </div>
<!--			<input type="text" class="span3" name="website" placeholder="Website"style="border-radius: 0px;height: 40px;border-color: orange;width: 80%;margin-top:15px;">-->
			<input type="text" class="span3 form-control" name="website" placeholder="Website">
			<input type="text" class="span3 form-control" name="location" placeholder="Location">
			<input type="text" class="span3 form-control" name="cphone" placeholder="Company Phone Number">
			<input type="text" class="span3 form-control" name="aphone" placeholder="Alternative Phone Number">
			
		</div>
		<div class="col-lg-6">
			<label style="color: rgba(255, 79, 0, 0.86);margin-top:20px;">Mode of payment</label>
			<div class="form-group">
		      <label class="checkbox-inline"><input type="checkbox" name="radio">Cash </label>
		      <label class="checkbox-inline"><input type="checkbox" name="radio" > Cheque </label>
		      <label class="checkbox-inline"><input type="checkbox" name="radio"> Bank Transaction </label>
		    </div>
			<label style="color: rgba(255, 79, 0, 0.86); margin-top:20px;">Your Brief Profile</label>
		<div>
			<input type="text" class="span3 form-control" name="uwebsite" placeholder="Website">
			<input type="text" class="span3 form-control" name="uwebsiteurl" placeholder="Website URL">
			<input type="text" class="span3 form-control" name="ufullname" placeholder="Your full name">
<!--			<input type="text" class="span3" name="utitle" placeholder="Your desgination/title"style="border-radius: 0px;height: 40px;border-color: orange;width: 80%;margin-top:15px;">-->
			<input type="text" class="span3 form-control" name="utitle" placeholder="Your desgination/title">
			<input type="text" class="span3 form-control" name="uemail" placeholder="Your email address">
			<div class="form-group"><input type="text" class="span3 form-control" name="ualtemail" placeholder="Alternative email"></div>
		</div>
			<div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
		</div>
	</div>
</form>
</body>