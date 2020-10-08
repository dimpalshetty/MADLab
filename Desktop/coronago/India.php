<!DOCTYPE html>
	<html>
<head>
	<title></title>
	<?php include 'link/links.php' ?>
	<?php include 'css/style.php' ?>
</head>
<body>

  
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
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indx.php">World</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="India.php">India</a>
      </li>
      
     
    </ul>
    
  </div>
</nav>

<section class="corona_update container fluid">
  <div class="my-5">
    <h3 class="text-center text-uppercase">Corona Update In India</h3>
  </div>
  <div class="table-responsive">
    <table cLass="table table-bordered table-striped text-center" id="tbval"><tr>


      <th class="text-capitalize">Last Updated</th>
      <th text-capitalize>State</th>
      <th text-capitalize>Confirmed</th>
      <th text-capitalize>Active</th>
      <th text-capitalize>Recovered</th>
      <th text-capitalize>Deaths</th>
    </tr>

 
 <?php





$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

$i=1;
while($i < $statescount){

  ?>
  <tr>
    <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
    <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
    <td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
    <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
    <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>

  </tr>

  <!--echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; -->

  <?php
  $i++;
}


  ?>  
      
    </table>
  </div>
  <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, Dimpal </span>
        </div>
    </footer>
 
 </body>
</html>

