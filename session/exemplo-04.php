<?php

session_id('uurovl5dpmc9daqm2jv72a34dt'); //indico qual session_id usar

require_once("config.php");

session_regenerate_id(); //regenera o id de sessão

echo session_id();

var_dump($_SESSION);

?>