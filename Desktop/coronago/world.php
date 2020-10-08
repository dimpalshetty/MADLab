
<!DOCTYPE html?
	<html>
<head>
	<title></title>
	<?php include 'link/links.php' ?>
	<?php include 'css/style.php' ?>
</head>
<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="world.php">World</a>
      </li>
 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="India.php">India</a>
      </li>
      
     
    </ul>
    
  </div>
</nav>

<?php

    // Retrieving Json Data
    $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
    $data = json_decode($jsonData, true);

    // Counting the number of days in the Json File
    foreach($data as $key => $value){
        $days_count = count($value)-1;
        $days_count_prev = $days_count - 1;
    }

    $total_confirmed = 0;
    $total_recovered = 0;
    $total_deaths = 0;

    // Total Cases Calculation
    foreach($data as $key => $value){
        $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
        $total_recovered = $total_recovered + $value[$days_count]['recovered'];
        $total_deaths = $total_deaths + $value[$days_count]['deaths'];
    }

?>