<!DOCTYPE html>
<html>
<head>
<title>corona</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
*{
	margin: 0; padding: 0; box-sizing: border-box;
}
.nav_style{
	background-color: #a29bfe!important;
}
.nav_style a{
	color: white;
}

.danger img{
	animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat
{
	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(.1);
	}
	40%{
		transform: scale(.75);
	}
	60%{
		transform: scale(.1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.70);
	}
}
.footera{
	background-color: #a29bfe!important;
	color: white;
	padding-bottom: 30px;
}
</style>

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
	 <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/boozymedia/"><img width="20px" src="iii.jpg">  boozymedia</a>
      </li>
      
    
    </ul>
    
  </div>
</nav>

 
<div class="danger text-center w-100 h- 100" ><img src="coc.png" width="200" height="200"></div>
 <section class="corona_update container-fluid ">
 
 <div class="my">
 <h2 class="text-center text-uppercase"><marquee>covid-19 live update</marquee></h2>
 </div>
<div class="table-responsive">
  <table class= "table table-bordered table-striped text-center">
    <tr>
	   <th class="text-capitalize btn-success">data</th>
	   <th class="text-capitalize btn-danger">Country</th>
	   <th class="text-capitalize btn-warning">TotalConfirmed</th>
	   <th class="text-capitalize btn-primary">TotalRecovered</th>
	   <th class="text-capitalize btn-secondary">TotalDeaths</th>
	   <th class="text-capitalize btn-success">NewConfirmed</th>
	   <th class="text-capitalize btn-info">NewDeaths</th>
	</tr>
	
<?php
 $data = file_get_contents('https://api.covid19api.com/summary');
 $coronadata = json_decode($data, true);
 
 //echo "<pre>";
 //print_r($coronadata);
 //echo "</pre>";

$countrycount = count($coronadata['Countries']);

$i=0;
while($i < $countrycount){
	?>
	
	<tr>
	 <td class="btn-success"><?php echo $coronadata['Countries'][$i]['Date'] ?></td>
	 <td class="btn-danger"><?php echo $coronadata['Countries'][$i]['Country'] ?></td>
	 <td class="btn-warning"><?php echo $coronadata['Countries'][$i]['TotalConfirmed'] ?></td>
	 <td class="btn-primary"><?php echo $coronadata['Countries'][$i]['TotalRecovered'] ?></td>
	 <td class="btn-secondary"><?php echo $coronadata['Countries'][$i]['TotalDeaths'] ?></td>
	 <td class="btn-success"><?php echo $coronadata['Countries'][$i]['NewConfirmed'] ?></td>
	 <td class="btn-info"><?php echo $coronadata['Countries'][$i]['NewDeaths'] ?></td>
	</tr>
	 

<?php	

	$i++;
	
}
?>
</table>
  </div>
  </section>

 
  <footer class="footera text-center"> <div>
<!-- PopAds.net Popunder Code for attackcoronavirus.000webhostapp.com -->
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
  var _pop = _pop || [];
  _pop.push(['siteId', 4013051]);
  _pop.push(['minBid', 0]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', false]);
  (function() {
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    var s = document.getElementsByTagName('script')[0]; 
    pa.src = '//c1.popads.net/pop.js';
    pa.onerror = function() {
      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
      sa.src = '//c2.popads.net/pop.js';
      s.parentNode.insertBefore(sa, s);
    };
    s.parentNode.insertBefore(pa, s);
  })();
/*]]>/* */
</script>
<!-- PopAds.net Popunder Code End -->
</div>
 
  <h1>STAY HOME LIVE HAPPY</h1><br>
  <h2>In this lockdown period people fell so boring, that's why we create a funny instagram page, which is full enertainment you can follow now!!</h2><br>
  <a href="https://www.instagram.com/boozymedia/"><img width="100px" src="iii.jpg"><br><h1>boozymedia</h1></a>

  </footer>
 
</body>
</html>
