<?php 

  $jsonData = file_get_contents("family.json");
  $json = json_decode($jsonData, true);

  $family = $json['family'];

  $output = "";
  foreach($family as $member) {
    $output .= "ID : ".$member['id']."<br>";
    $output .= "Name : ".$member['name']."<br>";
    $output .= "Favorite Color : ".$member['color']."<br>";
    $output .= "Birthday : ".$member['birthday']."<br>";
    $output .= "<br>";
  }

  // echo $output;

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP JSON Test</title>
  <meta name="description" content="PHP JSON Test">
  <meta name="author" content="Adam Krueger">

</head>

<body>

  <h1>PHP JSON Test</h1>

  <p>Below is the output of a JSON file parsed with PHP.</p>

  <?php echo $output; ?>
  
</body>
</html>