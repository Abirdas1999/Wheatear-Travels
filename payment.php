<?php
$url = "https://api.phonepe.com/apis/hermes/pg/v1/pay";
$merchantId = "WHEATEARONLINE";
$saltKey = "e7e13f04-a451-4140-a113-4e597f8bf2f1";
$saltIndex = "1";



$amount = intval($_POST['amount']);

$payload = json_encode([
    "merchantId" => $merchantId,
    "orderId" => uniqid(),
    "amount" => $_POST['amount']*100,  
    "currency" => "INR",
    "callbackUrl" => "https://wheateartravels.com",
    "merchantTransactionId" => uniqid(),
    "merchantUserId" => uniqid(),
    "redirectUrl" => "https://wheateartravels.com",
    "redirectMode" => "REDIRECT",
    "mobileNumber" => $_POST['phone'],
    "paymentInstrument" => [
        "type" => "PAY_PAGE"
    ]
]);



$requestPayload = base64_encode($payload);
$encodeString = $requestPayload . "/pg/v1/pay" . $saltKey;
$xVerify = hash('sha256', $encodeString) . "###" . $saltIndex;

$headers = [
    "accept: application/json",
    "Content-Type: application/json",
    "X-VERIFY: $xVerify"
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["request" => $requestPayload]));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    $responseArray = json_decode($response, true);
    if ($responseArray['success'] && $responseArray['code'] == 'PAYMENT_INITIATED') {
        $redirectUrl = $responseArray['data']['instrumentResponse']['redirectInfo']['url'];
        header("Location: $redirectUrl");
        exit;
    } else {
        echo 'Error: ' . $responseArray['message'];
    }
}

curl_close($ch);
?>