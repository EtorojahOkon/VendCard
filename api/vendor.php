<?php
$date = date("jS, M, Y h:i:sa");
$vouchers = rand(01, 100);

function sanitizeNetwork($network){
    $output = htmlspecialchars($network);
    $output = filter_var($network, FILTER_SANITIZE_STRING);
    $output = trim($network);
    $output = stripslashes($network);
    return $output;
}

function sanitizeAmount($amount){
    $output = htmlspecialchars($amount);
    return $output;
}

if(isset($_GET["network"])) {
    $network = sanitizeNetwork($_GET["network"]);
    $amount = sanitizeAmount($_GET["amount"]);
    if(strtolower($network) == "mtn" || strtolower($network) == "airtel" || strtolower($network) == "etisalat" || strtolower($network) == "glo") {
        $card_id = strtoupper($network)."_".rand(100000, 999999);
        echo json_encode(["network" => $network, "amount" => $amount, "card_id" => $card_id, "date_gen" => $date, "suscribers" => $vouchers]);
    }
    else {
        echo "Invalid Networks!";
        
    }
}
?>