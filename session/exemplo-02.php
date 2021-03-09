<?php

require_once("config.php");

/*session_unset() //usa-se sem parametros e destroi todas as sessões*/

unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy();

?>