<?php
$output = NULL;

if(isset($_GET['search-subm'])){
	$mysqli = new mysqli("localhost", "root", "", "search") or die("can't connect to database");
	$search = $mysqli->real_escape_string($_GET["search1"]);
	$resultSet = $mysqli->query("SELECT * FROM searchsite WHERE keywords LIKE '%$search%'");
	if($resultSet->num_rows > 1){
		while ($rows = $resultSet->fetch_assoc()) {
			$sn = $rows['description'];
			$asset_num = $rows['keywords'];
			$asset = $rows['title'];
			$link = $rows['link'];
			$output .= "<br>"."<div class='search-res'>"."<h2><a href='$link'>$asset</a></h2> $link <br>$sn</div>";
		}
	}
	else{
		$output = "<h4>No results. Pleace try again.</h4>";
	}
	echo $output;
}

?>