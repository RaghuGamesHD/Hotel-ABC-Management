<?php
$checkinDate = $_POST['checkinDate'];
$checkoutDate = $_POST['checkoutDate'];
if(($checkinDate == "2019-09-05") && ($checkoutDate == "2019-10-04")) {
	echo "Your room is available haha";
}
?>