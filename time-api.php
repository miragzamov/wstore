<?php
$password = $_GET['password'];
if($password == "mxtap"){
echo '{"hour":"'.date("H",strtotime(' + 9 hours')).'","minute":"'.date("i",strtotime(' + 9 hours')).'","second":"'.date("s",strtotime(' + 9 hours')).'"}';
}else{
echo 'Invalid Password Or Param Not Found';
}
?>
