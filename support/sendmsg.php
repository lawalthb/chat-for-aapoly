<?php

include 'connection.php' ;

?>

<?php
$newmsg =  $_GET['newmsg'];
$session_id = $_COOKIE['chatapp_cookies'];
$ip = $_SERVER['REMOTE_ADDR'];
if(isset($newmsg)){
$sql = "INSERT INTO `messages` (`id`, `user_id`, `ip_address`, `messages`, `admin_id`, `status`, `deleted`, `seen`, `userfile`, `department_id`, `session_id`, `reg_date`) VALUES 
(NULL, '$session_id', '$ip', '$newmsg ', '1', '1', '0', '0', NULL, '1', '$session_id', $session_id );";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>


<?php

include 'footer.php' ;

?>