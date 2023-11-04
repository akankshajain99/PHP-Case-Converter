<?php

$convertStr = '';

if (isset($_POST['convert'])) {
	$str = $_POST['string'];
	$case = $_POST['case'];

switch ($case) {
	case 'lowercase':
		$convertStr = strtolower($str);

		break;
	case 'UPPERCASE':
		$convertStr = strtoupper($str);
	

		break;
	case 'Sentence case':
		$convertStr = ucfirst($str);


		break;
	case 'Capitalize Each Word':
		$convertStr = ucwords($str);


		break;
	case 'tOGGLE cASE':

		$string=explode(" ",$str);
		$i=0;
		while($i<count($string)){
		    $string[$i] = lcfirst(strtoupper($string[$i]));
		    $i++;
		}
		$convertStr = implode(" ",$string);

		break;	
	 
	
	
}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Case Converter Using PHP</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
	
</style>
</head>
<body>

<section style="padding-top: 50px;">
	<div class="container">
		<div class="row">
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Convert Your Text Here...</h5>
		        <form method="post" action="index.php">
					<div class="mb-3">
				  
				  	  <textarea name="string" class="form-control" placeholder="Type Your Text Here..." required="" rows="5" cols="3"></textarea>
					</div>
					<div class="mb-3">
				  
				  	<select name="case" class="form-control" required="">
				  		<option>Select Case</option>
				  		<option value="lowercase">lowercase</option>
				  		<option value="UPPERCASE">UPPERCASE</option>
				  		<option value="Sentence case">Sentence case.</option>
				  		<option value="Capitalize Each Word">Capitalize Each Word</option>
				  		<option value="tOGGLE cASE">tOGGLE cASE</option>
				  	</select>
					</div>
					<div class="mb-3">
					  <button type="submit" name="convert" class="btn btn-danger"> Convert </button>
					</div>
				</form>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Your Converted Text Here...</h5>
		        <br>
		        <?php 

						if (isset($_POST['convert'])) {?>
							
							<p style="font-size:20px; color:blue;"><?=$convertStr;?></p>
				<?php } ?>
		      </div>
		    </div>
		  </div>
		</div>
		
	</div>
</section>

</body>
</html>