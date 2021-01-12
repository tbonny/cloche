<?php
/*$socket = socket_create ( AF_INET, SOCK_DGRAM, SOL_UDP );
$srv_port = '205';
$buf = "coucou";

socket_sendto($socket, $buf, strlen($buf), MSG_EOF, "192.168.65.68", $srv_port);
//socket_bind($socket, '0.0.0.0', 49392);
//socket_recvfrom($socket, $srvBuf, 2, 0, $ipDistante, $srv_port);
//echo "$ipDistante:$srv_port:".$srvBuf."\n";
socket_close($socket);
echo "fini";*/
$adress = '192.168.65.103';
$port = '203';

echo "creation du socket ....";
$socket = socket_create(AF_INET,SOCK_STREAM, SOL_TCP);
if($socket == false){
    echo "socket_create() a echoue :". socket_strerror(socket_last_error()). "<br>";
}else{
    echo "ok <br>";
}
echo "Essai de connexion a '$adress' sur le prot '$port'....";
$result = socket_connect($socket, $adress, $port);
if($socket == false){
    echo "socket_connect() a echoue :". socket_strerror(socket_last_error($socket)). "<br>";
}else{
    echo "ok <br>";
}
echo "Lire la reponse : \n\n";

socket_recv($socket, $donnes,2048,0);
socket_recv($socket, $donnes1,2048,0);
echo $donnes;
echo '<br>';
echo $donnes1;
echo "Fermeture du socket...";
socket_close($socket);
echo "OK.<br>";


?>