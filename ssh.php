<?php
//error_reporting(E_ALL);
$server='192.168.2.100';
$port='22';
$username='mehdi';
$password='123';
//////////////////
include "vendor\autoload.php";
use phpseclib3\Net\SSH2;

$socket = stream_socket_client('tcp://'.$server.':'.$port.'', $errno, $errstr, ini_get('default_socket_timeout'), STREAM_CLIENT_CONNECT);

$ssh = new SSH2($socket);
$ssh->login($username,$password );
echo $ssh->exec('whoami');

echo "<hr>";
echo $ssh->exec('pwd');
?>