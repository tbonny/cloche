<?php
class UDP{

    private $_adress;
    private $_port;
    private $_socket;

    public function __construct($adress, $port)
    {
        $this->_socket = socket_create ( AF_INET, SOCK_DGRAM, SOL_UDP );
        $this->_adress = $adress;
        $this->_port = $port;
    }

    public function getRead($buf){
        socket_sendto($this->_socket, $buf, strlen($buf), MSG_EOF, $this->_adress, $this->_port);
    }
    public function getrecv(){
        socket_bind($this->_socket, '0.0.0.0', 49392);
        socket_recvfrom($this->_socket, $srvBuf, 2, 0, $ipDistante, $this->_port);
        return $srvBuf;
    }
    public function getAdress(){
        return $this->_adress;
    }
    public function getPort(){
        return $this->_port;
    }
}
?>