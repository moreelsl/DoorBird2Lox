<?php 

require_once "loxberry_io.php";
 
$response = msudp_send(1, 10001, "DoorBirdHTTP2UDP", $_GET["name"]);
if (!isset($response)) {
    echo "Error sending to Miniserver";
} else {
    echo "Sent ok.";
}

echo htmlspecialchars($_GET["name"]); 



?> 


