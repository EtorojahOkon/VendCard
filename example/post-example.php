<?php
if(isset($_POST["submit"])) {
  $network = urlencode($_POST["network"]);
  $amount = urlencode($_POST["amount"]);
  $url = "https://www.fussionhq.com/etoro/api/vendor.php?network=".$network."&amount=".$amount;
  $request = curl_init();
  curl_setopt($request, CURLOPT_URL, $url);
  $response = curl_exec($request);
 }
?>
<!DOCTYPE html>
<html>
  <head>
      <title>POST Recharge vending</title>
  </head>
  <body>
    <form method="POST" action="">
      <input type="text" name="network" placeholder="Input Network Type"/>
      <input type="number" name="amount" placeholder="Input Amount in NGN"/>
      <button type="submit" name="submit">Buy Recharge </button>
    </form>
  </body>