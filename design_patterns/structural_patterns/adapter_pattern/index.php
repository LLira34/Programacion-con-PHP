<?php

include_once('support.php');

$support = new Support('caro');
$support->sendMessage('Problema', 'No funciona algo', '4271045647');

$support1 = new Support('bere');
$support1->sendMessage('Comentario', 'hola mundo');
