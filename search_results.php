<?php

if (isset($_GET["search"])) {
	$search = $_GET["search"];
	$search = filter_search($search);
} else {
	header("location: index.php");
}

function filter_search($str) {
	$str = trim($str);
	$str = stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}
include("db.php");
$sql = "SELECT event_name, event_description FROM event_table WHERE event_name LIKE('%" . $search . "%');";
$result = $conn->query($sql);


$title = "search results for ";
require("application_top.php"); //php initialisation
require("head.php"); // initialisation of html meta tags, includes files, <head> and starts html
include("nav.php");
include("box_search.php");

if ($result->num_rows > 0) {
	$events = "";
	$i = 0;
	while($row = $result->fetch_assoc()) {	
		$events[$i] = array("event_name"=>$row['event_name'], "event_description"=>$row['event_description']);
		$i++;
	}
?>
<?php	
	for($j = 0; $j < sizeof($events); $j++) {
		include("box_event.php");
		#echo '<div><h2><a href="#">'.$events[$j]["event_name"].'</a></h2>'. $events[$j]["event_description"].'</p></div>';
	}
	
}

?>



<?php
include("footer.php");
?>