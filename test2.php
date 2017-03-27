<?php
if(isset($_POST['sub'])) {
	$msg = $_POST['msg'];
	mail('zachmazzie@gmail.com', 'test1', $msg);
}
?>
