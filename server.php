<?php
$config = json_decode(file_get_contents('config.json'), true);
echo "Server: " . $config['server'] . "<br>";
echo "Port: " . $config['port'] . "<br>";
echo "Username: " . $config['username'] . "<br>";
echo "Password: " . $config['password'] . "<br>";
?>
