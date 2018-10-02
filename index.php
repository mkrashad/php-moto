<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>MotoRent.ru</title>
		<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script  type="text/javascript" src="js/myscripts.js"></script>
	</head>
	<body>
		<!-- Main div for everything -->
		<div class="maindiv" id="main_div">
			<!-- Header Block -->
			<div id="forheader">
    <a href="index.php"><img src="images/logo.jpg" width="900" height="108" alt="Header" title="Header" /></a>
			</div>
			<!-- End of header block -->
			<div id="forbody">
                <h1 id="main_h1">Welcome to the website of the company MotoRent.ru</h1> 
        <h2><a href="reg/login.php" id="loginform">Login</a>|<a href="reg/reg.php">Register</a></h2>    
                <!--Login block -->
                <?php 
                session_start();
                if(isset($_SESSION["login"])){
                    echo "<h2 id='welcome'>You logged in as a $_SESSION[login]</h2>";
                    }
                ?>
                <!-- Moto description block -->
                <p><span class="pq">Motorcycle — two-wheeled vehicle</span>, with a sidecar or without having a maximum mass not exceeding 400 kg and/or engine with capacity of more than 50 cm? in the case of the internal combustion engine (and/or rated capacity more than 4 kW in the case of the motor. However, the provisions of differ in different countries.) </p>
				<!-- Block with 4 images -->
				<div id="div_for_img"> 
                    <?php include ("ex.php"); ?>
				</div>
				<p><strong>At the moment to hire the following models are available:</strong></p>
				<!-- Moto list block -->
				<ol id="moto_models">
					<li>Harley Davidson</li>
					<li>Bike</li>
					<li>Motorcycle Racing</li>
					<li>Conceptual Motorcycle</li>
				</ol>
                <!-- -->
				<h3 id="my_h3"><span class="pq">Links to the websites of manufacturers</span> and specifications of motorcycles:</h3>
                 <!--Links Block -->
				<ul id="my_links">
					<li><a href="http://www.yamaha-motor.ru" target="_blank" id="superlink">Yamaha Motors Russia</a></li>
					<li><a href="documents/yamaha_fz6.PDF">Specification for motorcycle Yamaha FZ6</a></li>
				</ul>
				<h3>Calculation of the cost of motorbike rental:</h3>
				<!-- Form block -->
				<form action="mailto:admin@gmail.com?subject=Motorent&body=Hello my friend" method="post" enctype="text/plain" id="my_form">
					<div id="bigform">
						<fieldset>
							<!-- Right block of form -->
							<div id="div_form_1">
								<fieldset id="innerfieldset">
									<legend>Additional options</legend>
									<p><strong>Additional options</strong></p>
									<div id="format">
										<input type="checkbox" value="helmet" name="extra" id="shlem" />
										<label for="shlem">Helmet</label>
										<input type="checkbox" value="Trunk" name="extra" id="bag" />
										<label for="bag">Trunk</label>
										<input type="checkbox" value="clothes" name="extra" id="od" />
										<label for="od">Motorcycle clothing</label>
									</div>
									<p><strong>Do you need insurance?</strong></p>
									<div id="radio">
										<input type="radio" id="inch_yes" value="yes" name="insurance" />
										<label for="inch">Yes</label>
										<input type="radio" id="inch_no" value="no" name="insurance" />
										<label for="inch">No</label>
									</div>
								</fieldset>
								<input type="submit" value="Submit" id="my_button" />
							</div>
							<!-- Left block of form --> 
							<div id="div_form_2">
								<span>Models:</span>
								<select name="moto" size="1" id="motoSelect">
									<option value="Harley Davidson">Harley Davidson (100$ a day)</option>
									<option value="Bike ">Bike (40$ a day)</option>
									<option value="Motorcycle Racing">Motorcycle Racing (150$ a day)</option>
									<option value="Conceptual Motorcycle">Conceptual Motorcycle (340$ a day)</option>
								</select>
								<span>Days:</span>
								<select name="days" size="1" id="daysSelect">
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
								<p><strong>Write here your email:</strong></p>
								<input type="text" name="email" id="email" value="Example: you@site.ru"  /> 
								<p><strong>Comment below:</strong></p>
								<textarea cols="45" rows="2" name="comment" id="mytextarea" ></textarea>
							</div>
						</fieldset>
					</div>
				</form>
				<!-- End form block -->
				<!-- Table with prices of motocycles -->
				<h3 id="sale">Motorcycles for sale (used):</h3>
				<table width="550" id="moto_table" title="Motorcycle price table" class="mototable">
					<thead>
						<tr>
							<th><strong>Models</strong></th>
							<th><strong>Prices</strong></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Harley Davidson</td>
							<td>25000</td>
						</tr>
						<tr>
							<td>Conceptual Motorcycle</td>
							<td>10000</td>
						</tr>
                        <tr>
							<td>Suzuki</td>
							<td>25000</td>
						</tr>
                         <tr>
							<td>Yamaha</td>
							<td>25000</td>
						</tr>
					</tbody>
				</table>
				<div id="forresults"></div>
            </div>
			<!-- Footer block -->
			<div id="forfooter">
				<img src="images/footer.jpg" width="900" height="67" alt="Footer" title="Manufactures" />
			</div>
			<!-- End of footer block -->
        </div>
	</body>
</html>
