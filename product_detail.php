<?php
include(header.php);
include(global.php);

echo $row["product_name"] . "<br />";
echo "<img src='images/" . $row["image"] . "'><br /><br />";
echo $row["description"] . "<br />";

include (footer.php);
?>

