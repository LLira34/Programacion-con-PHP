<?php

class Support{
    private $username;
    function __construct($username){
        $this-> username = $username;
    }

    public function sendMessage($title, $message, $phoneNumber = ''){
        if ('' == $phoneNumber) {
            return $this-> sendPublic($title, $message);
        }else {
            return $this-> sendPrivate($title, $message, $phoneNumber);
        }
    }

    protected function sendPublic($title, $message){
        echo "Publicado <br />";
    }

    protected function sendPrivate($title, $message, $phoneNumber){
        echo "Recibido <br />";
    }
}
