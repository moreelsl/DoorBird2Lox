<?php 

require_once "loxberry_io.php";
 
$response = msudp_send(1, 10001, "DoorBird2Lox", $_GET["name"]);
if (!isset($response)) {
    echo "Error sending to Miniserver";
} else {
    echo "Sent ok. Relay: ";
    echo htmlspecialchars($_GET["name"]); 
}
?>