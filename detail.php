<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>MotoRent.ru</title>
		<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
        <link href="css/login-style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/myscripts.js" type="text/javascript"></script>
        <?php include("reg/bd.php");
            session_start();?>
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
                <h1 id="main_h1" align="center">Motorbike hire!</h1>
                <p><span class="pq">Motorcycle — two-wheeled vehicle</span>, with a sidecar or without having a maximum mass not exceeding 400 kg and/or engine with capacity of more than 50 cm? in the case of the internal combustion engine (and/or rated capacity more than 4 kW in the case of the motor. However, the provisions of differ in different countries.) </p>
                <form id="my_form" action="orders_veiw.php" method="post">
					<div id="bigform">
						<fieldset>
		                  <!-- Right block of form -->
			             <div id="div_form_1">
				            <fieldset id="innerfieldset">
	                       <legend>Pick up Details</legend>
				            <p><strong>Pick up Details</strong></p>
				            <div id="format">
				            <label>Pick up Date:</label>
                            <input type="date" id="date" name="pickupdate"/>	
                            <label>Pick up Time:</label>
                            <input type="time" id="pickuptime" name="pickuptime"><br><br>  
                            <label>Pick up Location</label>
                            <select name="pickuplocation" size="1" id="motoSelect">
                            <option value="Airport">Airport Varna</option>
				            <option value="University">TU-Varna</option>
				            <option value="Stadium">Stadium</option>  
                            </select>
                            <p><strong>Drop-off Details</strong></p>
                            <label>Drop-off Date:</label>
                            <input type="date" id="dropoffdate" name="dropoffdate"/>	
                            <label>Drop-off Time:</label>
                            <input type="time" id="dropofftime" name="dropofftime"><br><br>  
                            <label>Drop-off Location</label>
                            <select name="dropofflocation" size="1" id="dropoffmotoSelect">
                            <option value="Airport">Airport Varna</option>
				            <option value="University">TU-Varna</option>
				            <option value="Stadium">Stadium</option><br><br>
                            </select>
					       <p><strong>Additional options</strong></p>
                            <input type="checkbox" value="helmet" name="helmet" id="shlem" />
						  <label for="shlem">Helmet</label><br>
						  <input type="checkbox" value="trunk" name="trunk" id="bag" />
                            <label for="trunk">Trunk</label><br>
						  <input type="checkbox" value="cl" name="cl" id="od" />
						  <label for="od">Motorcycle clothing</label><br>
                            <p><strong>Do you need insurance?</strong></p>
						  <input type="radio" id="inch_yes" value="yes" name="insurance" />
						  <label for="inch">Yes</label>
						  <input type="radio" id="inch_no" value="no" name="insurance" />
						  <label for="inch">No</label><br><br>
                            <!--Button block -->
                                
                            <?php 
                            if (($_SESSION['login']))
                            {echo '<input type="submit" value="Submit" id="my_button"/>';}
                                else{
                                    echo '<input type="submit" value="Submit" id="my_button" disabled/><h5 style="color:red;">Please log in to submit application</h5>';}?>
                                
                            <!--Image selection block -->
                            <?php $first = mysql_query("SELECT id FROM bikes WHERE id=".$_GET['id'],$db);
                                $second = mysql_fetch_array($first); ?>
                            <input type="hidden" value="<?php echo  $second['id'];?>" name="moto" /></div>
                             </fieldset>
                            </div>                               
            <!-- Left block of form -->
            <div id="div_form_2">
            <?php 
            $moto =  mysql_query("SELECT id,name,description,img FROM bikes WHERE id=".$_GET['id'],$db);
            $myrow2 = mysql_fetch_array($moto);
                echo '<h1 id="motoName">'.$myrow2[name].'</h1>';
                echo '<img id="forImg" src="'.$myrow2['img'].'">';
                echo '<p id="description">'.$myrow2[description];
                ?>
            </div>
            </fieldset>
				</div>
				</form> 
                <p><strong>At the moment to hire the following models are available:</strong></p>
				<!-- Moto list block -->
				<ol id="moto_models">
					<li>Harley Davidson</li>
					<li>Bike</li>
					<li>Motorcycle Racing</li>
					<li>Conceptual Motorcycle</li>
				</ol>
                <h3 id="my_h3"><span class="pq">Links to the websites of manufacturers</span> and specifications of motorcycles:</h3>
				<ul id="my_links">
					<li><a href="http://www.yamaha-motor.ru" target="_blank" id="superlink">Yamaha Motors Russia</a></li>
					<li><a href="documents/yamaha_fz6.PDF">Specification for motorcycle Yamaha FZ6</a></li>
				</ul>                 
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
            </div>        
			<!-- Footer block -->
			<div id="forfooter">
				<img src="images/footer.jpg" width="900" height="67" alt="Footer" title="Manufactures" />
			</div>
			<!-- End of footer block -->
            </div>
	</body>
</html>






