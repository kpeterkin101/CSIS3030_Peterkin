<?php

include("global.php");
include("header.php");

$result = mysqli_query($connection,"select * from categories order by category_name");

while ($row = mysqli_fetch_assoc($result)) {
	
	echo "<a href='product_list.php?category_id=" . $row["id"] . "'>";
	echo $row["category_name"];
	echo "</a>";
	echo "<br  />";
	echo "<br  />";
	
	
	
}

include("footer.php");

?>
