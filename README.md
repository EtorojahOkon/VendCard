# VendCard
A dummy recharge card vending API

To use simply send a curl GET request like "https://www.fussionhq.com/etoro/api/vendor.php?network=".urlencode("mtn")."&amount=".urlencode("200")

$network represents the type of network eg MTN, AIRTEL, ETISALAT, GLO
The $amount is the amount wanted in NGN eg 200.
Both are urlencoded

Eg usage

<?php
$network = urlencode("MTN");
$amount = urlencode("200");
$url = "https://www.fussionhq.com/etoro/api/vendor.php?network=".$network."&amount=".$amount;
$request = curl_init();
curl_setopt($request, CURLOPT_URL, $url);
$response = curl_exec($request);
?>

See example folder

You can also get the values from a form eg

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
  <head></head>
  <body>
    <form method="POST" action="">
      <input type="text" name="network" placeholder="Input Network Type"/>
      <input type="number" name="amount" placeholder="Input Amount in NGN"/>
      <button type="submit" name="submit">Buy Recharge </button>
    </form>
  </body>
</html>

The request can also be used with payment APIs
If the payment is successfull call this API in the success statement...
Remember to validate and sanitize form inputs
Viola
Version2 will include API endpoint parameters for users to specify valid networks
Watch out

#Enjoy#
