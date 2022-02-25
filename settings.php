<?php

$server_url = "/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH

$db_host = "localhost";
$db_user = "wallet_user";
$db_pass = "coin";
$db_name = "wallet";

$rpc_host = "127.0.0.1";
$rpc_port = "21120";
$rpc_user = "rpcuser123";
$rpc_pass = "rpcpassword123";

$fullname = "Bitcoin Addition"; //Website Title (Do Not include 'wallet')
$short = "BTCA"; //Coin Short (BTC)
$blockchain_tx_url = "https://explorer.btcadd.io/tx/"; //Blockchain Url
$support = "forking.altcoins@gmail.com"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = ""; //Donation Address

$reserve = "0"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.

//Recaptcha
$public = "6LcMhM4ZAAAAAD8O2BEm67Gnr3zH3O2ac-n2HhZd";
$secret = "6LcMhM4ZAAAAAJyzH8GeOb6W8JEwbCVcnxYw0a_u";
?>
