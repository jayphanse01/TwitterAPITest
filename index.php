<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;


// define('CONSUMER_KEY', '9sxdX69aemp33yty2A2Qo7Mud');
// define('CONSUMER_SECRET', 'sGVgsA9Id3fLrwuPssMXoLFQOiamOI0jwGHplHSN3nBH924pbB');
// define('ACCESS_TOKEN', '1364863466494955521-U1XWXdhoxgmVtkN0XYAM1XvI2hwB6j');
// define('ACCESS_TOKEN_SECRET', '0wgfGETa6FYvP4nFo4A8H4IlxZ62QGbuH1FBliK1JIHb6');

// $tw = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
define('CONSUMER_KEY', getenv('9sxdX69aemp33yty2A2Qo7Mud'));
define('CONSUMER_SECRET', getenv('sGVgsA9Id3fLrwuPssMXoLFQOiamOI0jwGHplHSN3nBH924pbB'));
define('OAUTH_CALLBACK', getenv(urlencode('http://localhost/TwitterAPITest/index.php')));
$connect = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$connect->setDecodeJsonAsArray(true);
$request_token = $connect->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
$ACCESS_TOKEN = $request_token['oauth_token'];
$ACCESS_TOKEN_SECRET = $request_token['oauth_token_secret'];

$tw = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);
$tw->setDecodeJsonAsArray(true);
$response = $tw->get('account/verify_credentials');
try {

    if (isset($response['errors'])) {
        echo "connect fail" . "</br>";
    } else {
        echo "connect successful" . "</br>";
        // echo implode(' ', $response);   
    }
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}


try {
    $status ="Test post 16";
    $tw->post('statuses/update', array('status' => $status));
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}

print_r($tw);
