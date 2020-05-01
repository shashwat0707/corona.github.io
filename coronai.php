<!DOCTYPE html>
<html>
<head>

<?php include 'links.php'; ?>
<?php include 'css.php'; ?>

</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg navbar-light bg-light nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      
    
    </ul>
    
  </div>
</nav>
 <section class="corona_update container-fluid ">
 
 <div class="my">
 <h2 class="text-center text-uppercase"><marquee>covid-19 live update</marquee></h2>
 </div>
  <div class="table-responsive">
  <table class= "table table-bordered table-striped text-center">
    <tr>
	   <th>lastupdatedtime</th>
	   <th>state</th>
	   <th>confirmed</th>
	   <th>active</th>
	   <th>recovered</th>
	   <th>deaths</th>
	</tr>
	
	<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);
	
	
	 $statescount = count($coronalive['statewise']);
	$i=1;
	while($i < $statescount){
		
		?>
	<tr>
	<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
	<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
	</tr>
	<!--	echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>"; 
	echo $coronalive['statewise'][$i]['state']."<br>"; 
	echo $coronalive['statewise'][$i]['confirmed']."<br>"; 
	echo $coronalive['statewise'][$i]['active']."<br>"; 
	echo $coronalive['statewise'][$i]['recovered']."<br>"; 
	echo $coronalive['statewise'][$i]['deaths']."<br>"; --!>
	

	<?php
	$i++;
	}
	
	?>
	
	
  </table>
  </div>
  </section>
  <script>
</body>
</html>