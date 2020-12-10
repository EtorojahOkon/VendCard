<?php
$network = urlencode("MTN");
$amount = urlencode("200");
$url = "https://www.fussionhq.com/etoro/api/vendor.php?network=".$network."&amount=".$amount;
$request = curl_init();
curl_setopt($request, CURLOPT_URL, $url);
$response = curl_exec($request);
?>