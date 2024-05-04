<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="table-responsive">
<table class="table">
<tr>



        
<?php

$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

$x = 1;

foreach($states as $state) {




// State with Uppercase and underscore
$upperunder = preg_replace('/\s+/','_', $state);

//State with lowercase and underscore
$lowerunder = strtolower($upperunder);

if($x == 6) {
    echo '</tr><tr>';
    $x = 1;
}

echo '<td><a href="pages/'.$lowerunder.'.html"><img class="img-responsive" src="https://jaxcode.com/stateflags/'.$upperunder.'.svg.png"><br>';
echo ''.$state.'<a/></td>';

$x++;


}



?>
</tr></table></div>
</div></div></div>
</body>
</html>